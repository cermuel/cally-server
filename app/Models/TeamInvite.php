<?php

namespace App\Models;

use App\TeamRole;
use Database\Factories\TeamInviteFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TeamInvite extends Model
{
    /** @use HasFactory<TeamInviteFactory> */
    use HasFactory;

    protected $fillable = ['email', 'team_id', 'token_hash', 'expires_at', 'accepted_at', 'declined_at', 'role'];

    protected $casts = [
        'expires_at' => 'datetime',
        'accepted_at' => 'datetime',
        'role' => TeamRole::class
    ];

    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }
}
