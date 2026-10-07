<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        if ($this->filled('username')) {
            $this->merge([
                'email' => strtolower(trim($this->input('email'))),
            ]);
        }

        return [
            'name' => ['string', 'nullable', 'sometimes'],
            'avatar_url' => ['string', 'nullable', 'sometimes'],
            'username' => ['string', 'unique:users,username', 'min:3', 'nullable', 'sometimes'],
            'description' => ['string', 'nullable', 'sometimes'],
            'timezone' => ['string', 'timezone:all', 'nullable', 'sometimes'],
            'notification_preference' => ['array:booking_created,booking_cancelled,booking_rescheduled,guest_added', 'nullable', 'sometimes'],
            'notification_preference.booking_created' => ['array:in_app,email', 'sometimes'],
            'notification_preference.booking_created.in_app' => ['boolean', 'sometimes'],
            'notification_preference.booking_created.email' => ['boolean', 'sometimes'],
            'notification_preference.booking_cancelled' => ['array:in_app,email', 'sometimes'],
            'notification_preference.booking_cancelled.in_app' => ['boolean', 'sometimes'],
            'notification_preference.booking_cancelled.email' => ['boolean', 'sometimes'],
            'notification_preference.booking_rescheduled' => ['array:in_app,email', 'sometimes'],
            'notification_preference.booking_rescheduled.in_app' => ['boolean', 'sometimes'],
            'notification_preference.booking_rescheduled.email' => ['boolean', 'sometimes'],
            'notification_preference.guest_added' => ['array:in_app,email', 'sometimes'],
            'notification_preference.guest_added.in_app' => ['boolean', 'sometimes'],
            'notification_preference.guest_added.email' => ['boolean', 'sometimes'],
        ];
    }
}
