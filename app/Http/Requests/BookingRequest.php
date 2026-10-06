<?php

namespace App\Http\Requests;

use App\BookingStatus;
use Illuminate\Database\Query\Builder;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class BookingRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        // 'event_id', 'starts_at', 'ends_at', 'status', 'provider_event_id', 'meeting_url', 'notes', 'cancellation_reason', 'cancelled_at'
        if ($this->isMethod('post')) {
            return [
                'starts_at' => ['nullable', 'date', 'before:ends_at'],
                'ends_at' => ['nullable', 'date', 'after:starts_at'],
                'timezone' => ['nullable', 'timezone:all'],
                'notes' => ['string', 'nullable'],
                'event_id' => [
                    'string',
                    'required',
                    Rule::exists('events', 'id')->where(
                        fn (Builder $query): Builder => $query->where('user_id', $this->user()->id),
                    ),
                ],
            ];
        }

        return [
            'status' => ['nullable', Rule::enum(BookingStatus::class)],
            'starts_at' => ['nullable', 'date', 'before:ends_at'],
            'ends_at' => ['nullable', 'date', 'after:starts_at'],
            'timezone' => ['nullable', 'timezone:all'],
            'cancellation_reason' => ['string', 'nullable'],
            'notes' => ['string', 'nullable'],
            'event_id' => [
                'string',
                'nullable',
                Rule::exists('events', 'id')->where(
                    fn (Builder $query): Builder => $query->where('user_id', $this->user()->id),
                ),
            ],
            'contact_id' => [
                'nullable',
                'integer',
                Rule::exists('contacts', 'id')->where(
                    fn (Builder $query): Builder => $query->where('user_id', $this->user()->id),
                ),
            ],
        ];
    }
}
