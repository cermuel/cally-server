<?php

namespace App\Jobs;

use App\ImportStatus;
use App\Imports\ContactsImport;
use App\Models\Import;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use Throwable;

class ImportContactsJob implements ShouldQueue
{
    use Queueable;

    public int $tries = 3;

    public int $timeout = 300;

    public function __construct(
        public int $importId,
        public string $filePath,
    ) {
        $this->onQueue('import');
    }

    public function handle(): void
    {
        $import = Import::findOrFail($this->importId);

        $user = User::findOrFail($import->user_id);

        $import->update([
            'status' => ImportStatus::Processing,
        ]);

        Excel::import(
            new ContactsImport(
                $user,
                $import,
            ),
            Storage::path($this->filePath)
        );

        $import->refresh();

        $import->update([
            'status' => ImportStatus::Completed,
        ]);

        Storage::delete($this->filePath);
    }

    public function failed(Throwable $exception): void
    {
        $import = Import::find($this->importId);

        if ($import) {
            $errors = $import->errors ?? [];

            $errors[] = [
                'message' => $exception->getMessage(),
            ];

            $import->update([
                'status' => ImportStatus::Failed,
                'errors' => $errors,
            ]);
        }

        Storage::delete($this->filePath);
    }
}
