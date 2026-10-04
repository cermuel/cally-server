<?php

namespace App\Models;

use App\AutomationAction;
use App\AutomationTrigger;
use Database\Factories\AutomationFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Automation extends Model
{
    /** @use HasFactory<AutomationFactory> */
    use HasFactory;

    protected $fillable = ['user_id', 'trigger', 'action', 'payload', 'name', 'color', 'is_active'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    protected function casts(): array
    {
        return [
            'trigger' => AutomationTrigger::class,
            'action' => AutomationAction::class,
            'payload' => 'array',
            'is_active' => 'boolean',
        ];
    }
}
