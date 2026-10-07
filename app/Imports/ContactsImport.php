<?php

namespace App\Imports;

use App\Models\Contact;
use App\Models\Import;
use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ContactsImport implements
    ToCollection,
    WithHeadingRow,
    WithChunkReading
{
    public function __construct(
        private readonly User $user,
        private readonly Import $import,
    ) {}

    public function chunkSize(): int
    {
        return 250;
    }

    public function collection(Collection $rows): void
    {
        $seenEmails = [];
        $contactsToInsert = [];
        $errors = [];

        $imported = 0;
        $skipped = 0;

        $emails = $rows
            ->pluck('email')
            ->filter()
            ->map(fn($email) => strtolower(trim($email)))
            ->unique()
            ->values();

        $existingContactEmails = Contact::where(
            'user_id',
            $this->user->id
        )->whereIn('email', $emails)
            ->pluck('email')
            ->map(fn($email) => strtolower(trim($email)))
            ->flip();

        $platformUsers = User::whereIn('email', $emails)
            ->get([
                'id',
                'email',
            ])
            ->mapWithKeys(
                fn($user) => [
                    strtolower(trim($user->email)) => $user->id,
                ]
            );

        foreach ($rows as $index => $row) {
            $rowNumber =
                $this->import->processed_rows
                + $index
                + 2;

            $data = [
                'name' => isset($row['name'])
                    ? trim($row['name'])
                    : null,

                'email' => strtolower(
                    trim($row['email'] ?? '')
                ),

                'phone' => isset($row['phone'])
                    ? trim($row['phone'])
                    : null,

                'timezone' => isset($row['timezone'])
                    ? trim($row['timezone'])
                    : null,

                'company' => isset($row['company'])
                    ? trim($row['company'])
                    : null,

                'tag' => isset($row['tag'])
                    ? trim($row['tag'])
                    : null,

                'notes' => isset($row['notes'])
                    ? trim($row['notes'])
                    : null,
            ];


            $validator = Validator::make($data, [
                'name' => ['nullable', 'string', 'max:255'],
                'email' => ['required', 'email',  'max:255'],
                'phone' => ['nullable', 'string', 'max:50'],
                'timezone' => ['nullable', 'timezone'],
                'company' => ['nullable', 'string', 'max:255'],
                'tag' => ['nullable', 'string', 'max:255'],
                'notes' => ['nullable', 'string'],
            ]);

            if ($validator->fails()) {
                $errors[] = [
                    'row' => $rowNumber,
                    'email' => $data['email'],
                    'errors' => $validator
                        ->errors()
                        ->toArray(),
                ];

                $skipped++;

                continue;
            }

            if (isset($seenEmails[$data['email']])) {
                $errors[] = [
                    'row' => $rowNumber,
                    'email' => $data['email'],
                    'errors' => [
                        'email' => [
                            'Duplicate email inside import file.',
                        ],
                    ],
                ];

                $skipped++;

                continue;
            }

            $seenEmails[$data['email']] = true;

            /*
            |--------------------------------------------------------------------------
            | Existing user contact
            |--------------------------------------------------------------------------
            */

            if (
                $existingContactEmails->has(
                    $data['email']
                )
            ) {
                $errors[] = [
                    'row' => $rowNumber,
                    'email' => $data['email'],
                    'errors' => [
                        'email' => [
                            'Contact already exists.',
                        ],
                    ],
                ];

                $skipped++;

                continue;
            }

            $contactsToInsert[] = [
                'user_id' => $this->user->id,

                'platform_user_id' =>
                $platformUsers[$data['email']] ?? null,

                'name' => $data['name'],
                'email' => $data['email'],
                'phone' => $data['phone'],
                'timezone' => $data['timezone'],
                'company' => $data['company'],
                'tag' => $data['tag'],
                'notes' => $data['notes'],

                'bookings_count' => 0,
                'last_booked_at' => null,

                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        if (!empty($contactsToInsert)) {
            Contact::insert($contactsToInsert);

            $imported = count(
                $contactsToInsert
            );
        }

        $existingErrors =
            $this->import->errors ?? [];

        $processedRows = min(
            $this->import->processed_rows + $rows->count(),
            $this->import->total_rows
        );

        $importedRows =
            $this->import->imported_rows
            + $imported;

        $skippedRows =
            $this->import->skipped_rows
            + $skipped;

        $allErrors = [
            ...$existingErrors,
            ...$errors,
        ];

        $this->import->update([
            'processed_rows' => $processedRows,
            'imported_rows' => $importedRows,
            'skipped_rows' => $skippedRows,
            'errors' => $allErrors,
        ]);

        $this->import->processed_rows = $processedRows;
        $this->import->imported_rows = $importedRows;
        $this->import->skipped_rows = $skippedRows;
        $this->import->errors = $allErrors;
    }
}
