<?php

namespace App\Http\Requests;

use App\GuestStatus;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class GuestRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        if ($this->isMethod('post')) {
            return [
                'booking_id' => ['required', 'exists:bookings,id'],
                'guests' => ['required', 'array'],
                'guests.*.name' => ['nullable', 'string'],
                'guests.*.email' => ['required', 'email'],
                'guests.*.attendance_status' => ['nullable', Rule::enum(GuestStatus::class)],
            ];
        }

        return [
            // 'booking_id' => ['required', 'exists:bookings,id'],
            'name' => ['nullable', 'string'],
            'email' => ['nullable', 'email'],
            'attendance_status' => ['nullable', Rule::enum(GuestStatus::class)],
        ];
    }
}
