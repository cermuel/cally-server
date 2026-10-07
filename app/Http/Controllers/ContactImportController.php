<?php

namespace App\Http\Controllers;

use App\ImportStatus;
use App\Jobs\ImportContactsJob;
use App\Models\Import;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;

class ContactImportController extends Controller
{

    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'file' => ['required', 'file', 'mimes:csv,txt,xlsx,xls', 'max:10240',],
        ]);

        $user = $request->user();

        $activeImport = $user->imports()
            ->where('type', 'contacts')
            ->whereIn('status', [
                ImportStatus::Pending,
                ImportStatus::Processing,
            ])
            ->first();

        if ($activeImport) {
            return response()->json([
                'message' => 'A contact import is already in progress.',
                'import' => $activeImport,
            ], 409);
        }

        $path = $request->file('file')->store(
            'imports/contacts'
        );


        $import = $user->imports()->create([
            'type' => 'contacts',
            'status' => ImportStatus::Pending,
            'total_rows' => 0,
            'processed_rows' => 0,
            'imported_rows' => 0,
            'skipped_rows' => 0,
            'errors' => [],
        ]);

        ImportContactsJob::dispatch(
            $import->id,
            $path
        )->onQueue('import');

        return response()->json([
            'message' => 'Contact import started.',
            'import' => $import,
        ], 202);
    }


    public function getStatus(Request $request): JsonResponse
    {
        $user = $request->user();

        $import = $user->imports()
            ->where('type', 'contacts')
            // ->whereIn('status', [
            //     ImportStatus::Processing,
            //     ImportStatus::Pending,
            // ])
            ->latest()
            ->first();

        if (!$import) {
            $import = $user->imports()
                ->where('type', 'contacts')
                ->where('status', ImportStatus::Failed)
                ->latest()
                ->first();
        }

        if (!$import) {
            return response()->json([
                'import' => null,
                'progress' => null,
            ]);
        }

        $progress = $import->total_rows > 0
            ? min(
                100,
                round(
                    ($import->processed_rows / $import->total_rows) * 100
                )
            )
            : 0;

        return response()->json([
            'import' => $import,
            'progress' => $progress,
        ]);
    }

    public function destroy(
        Request $request,
        Import $import
    ): JsonResponse {
        $user = $request->user();

        if ($import->user_id !== $user->id) {
            abort(403);
        }

        if ($import->type !== 'contacts') {
            abort(404);
        }

        $import->delete();

        return response()->json([
            'message' => 'Import deleted successfully.',
        ]);
    }

    public function template(): StreamedResponse
    {
        $headers = ['name', 'email', 'phone', 'timezone', 'company', 'tag', 'notes',];

        $example = [
            'John Doe',
            'john@example.com',
            '+2348012345678',
            'Africa/Lagos',
            'Acme',
            'client',
            'Example contact',
        ];

        return response()->streamDownload(
            function () use ($headers, $example) {
                $handle = fopen('php://output', 'w');

                fputcsv($handle, $headers);
                fputcsv($handle, $example);

                fclose($handle);
            },
            'cally-contacts-template.csv',
            [
                'Content-Type' => 'text/csv',
            ]
        );
    }
}
