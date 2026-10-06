<?php

namespace App\Models;

use Database\Factories\ContactFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Contact extends Model
{
    /** @use HasFactory<ContactFactory> */
    use HasFactory;

    protected $fillable = ['user_id', 'platform_user_id', 'name', 'email', 'phone', 'timezone', 'company', 'tag', 'notes', 'bookings_count', 'last_booked_at'];

    public function scopeFilter(Builder $query, array $filters): Builder
    {
        return $query->when($filters['search'] ?? null, function ($query, $search) {
            $query->where(function (Builder $query) use ($search) {
                $query
                    ->whereLike('name', "%{$search}%", caseSensitive: false)
                    ->orWhereLike('email', "%{$search}%", caseSensitive: false)
                    ->orWhereLike('tag', "%{$search}%", caseSensitive: false);

                if (is_numeric($search)) {
                    $query->orWhere('platform_user_id', (int) $search);
                }
            });
        });
    }

    public function scopeSort(Builder $query, array $sorts): Builder
    {
        $sortBy = $sorts['sort_by'] ?? 'created_at';
        $direction = $sorts['direction'] ?? 'desc';

        return $query->orderBy($sortBy, $direction);
    }

    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }

    public function platformUser(): BelongsTo
    {
        return $this->belongsTo(User::class, 'platform_user_id');
    }

    public function refreshBookingStatistics(): void
    {
        $this->update([
            'bookings_count' => $this->bookings()->count(),
            'last_booked_at' => $this->bookings()->max('starts_at'),
        ]);
    }

    protected function casts(): array
    {
        return [
            'last_booked_at' => 'datetime',
        ];
    }
}
