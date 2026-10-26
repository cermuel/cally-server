<?php

namespace App\Http\Requests;

use App\BookingStatus;
use App\EventStatus;
use App\Models\Booking;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TeamBookingRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        if ($this->isMethod('post')) {
            return [
                'event' => [
                    'required',
                    'array:name,slug,duration_minutes,description,color,status',
                ],
                'event.name' => ['required', 'string'],
                'event.slug' => [
                    'required',
                    'string',
                    'min:3',
                    Rule::unique('events', 'slug')
                        ->where('user_id', $this->user()->id),
                ],
                'event.duration_minutes' => ['required', 'integer', 'min:1'],
                'event.description' => ['nullable', 'string'],
                'event.color' => ['nullable', 'string'],
                'event.status' => ['nullable', Rule::enum(EventStatus::class)],

                'booking' => [
                    'required',
                    'array:starts_at,ends_at,timezone,notes',
                ],
                'booking.starts_at' => [
                    'required',
                    'date',
                    'before:booking.ends_at',
                ],
                'booking.ends_at' => [
                    'required',
                    'date',
                    'after:booking.starts_at',
                ],
                'booking.timezone' => ['required', 'timezone:all'],
                'booking.notes' => ['nullable', 'string'],

            ];
        }

        $booking = Booking::query()
            ->with('event:id,user_id')
            ->whereKey($this->route('bookingId'))
            ->whereHas('event', fn($query) => $query->where('team_id', $this->route('teamId')))
            ->first();

        return [
            'event' => [
                'sometimes',
                'array:name,slug,description,color,status,duration_minutes,pre_meeting_minutes,post_meeting_minutes',
            ],
            'event.name' => ['sometimes', 'string', 'min:4', 'max:30'],
            'event.slug' => [
                'sometimes',
                'string',
                'min:3',
                Rule::unique('events', 'slug')
                    ->where('user_id', $booking?->event?->user_id ?? $this->user()->id)
                    ->ignore($booking?->event_id),
            ],
            'event.description' => ['sometimes', 'nullable', 'string'],
            'event.color' => ['sometimes', 'nullable', 'string'],
            'event.status' => ['sometimes', Rule::enum(EventStatus::class)],
            'event.duration_minutes' => ['sometimes', 'integer', 'min:1'],
            'event.pre_meeting_minutes' => ['sometimes', 'integer', 'min:0'],
            'event.post_meeting_minutes' => ['sometimes', 'integer', 'min:0'],

            'booking' => [
                'sometimes',
                'array:status,starts_at,ends_at,timezone,cancellation_reason,notes',
            ],
            'booking.status' => [
                'sometimes',
                Rule::enum(BookingStatus::class),
            ],
            'booking.starts_at' => [
                'required_with:booking.ends_at',
                'date',
                'before:booking.ends_at',
            ],
            'booking.ends_at' => [
                'required_with:booking.starts_at',
                'date',
                'after:booking.starts_at',
            ],
            'booking.timezone' => ['sometimes', 'timezone:all'],
            'booking.cancellation_reason' => ['sometimes', 'nullable', 'string'],
            'booking.notes' => ['sometimes', 'nullable', 'string'],
        ];
    }
}
