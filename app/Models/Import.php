<?php

namespace App\Models;

use App\ImportStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Import extends Model
{
    /** @use HasFactory<\Database\Factories\ImportsFactory> */
    use HasFactory;

    protected $fillable = ['user_id', 'type', 'status', 'total_rows', 'processed_rows', 'imported_rows', 'skipped_rows', 'errors'];
    protected $casts = ['status' => ImportStatus::class, 'errors' => 'array'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
