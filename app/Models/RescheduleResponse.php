<?php

namespace App\Models;

use App\RescheduleStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RescheduleResponse extends Model
{
    /** @use HasFactory<RescheduleResponseFactory> */
    use HasFactory;

    protected $fillable = ['reschedule_id', 'guest_id', 'status', 'email', 'user_id'];

    protected $casts = [
        'status' => RescheduleStatus::class,
        'starts_at' => 'datetime',
        'ends_at' => 'datetime',
    ];

    public function reschedule(): BelongsTo
    {
        return $this->belongsTo(Reschedule::class);
    }

    public function guest(): BelongsTo
    {
        return $this->belongsTo(Guest::class, 'guest_id');
    }

    public function host(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
