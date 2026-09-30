<?php

namespace App\Http\Requests;

use App\BookingStatus;
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
                'starts_at' => ['nullable', 'date_format:H:i'],
                'ends_at' => ['nullable', 'date_format:H:i'],
                'notes' => ['string', 'nullable'],
                'event_id' => ['string', 'required'],
            ];
        }

        return [
            'status' => ['nullable', Rule::enum(BookingStatus::class)],
            'starts_at' => ['nullable', 'date_format:H:i'],
            'ends_at' => ['nullable', 'date_format:H:i'],
            'cancellation_reason' => ['string', 'nullable'],
            'notes' => ['string', 'nullable'],
            'event_id' => ['string', 'nullable'],
        ];
    }
}
