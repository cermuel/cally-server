<?php

namespace App\Http\Requests;

use App\GuestStatus;
use App\Models\User;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PublicScheduleRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    protected function prepareForValidation(): void
    {
        if (is_string($this->input('username'))) {
            $this->merge([
                'username' => strtolower(trim($this->input('username'))),
            ]);
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'username' => ['required', 'string', 'exists:users,username'],
            'date' => ['nullable', 'date_format:Y-m-d'],
            'starts_at' => ['required', 'date', 'before:ends_at'],
            'ends_at' => ['required', 'date', 'after:starts_at'],
            'timezone' => ['required', 'timezone:all'],
            'notes' => ['nullable', 'string'],
            'event_id' => [
                'required',
                'string',
                Rule::exists('events', 'id')->where(function ($query): void {
                    $username = $this->input('username');
                    $userId = is_string($username)
                        ? User::query()->where('username', $username)->value('id')
                        : null;

                    $query
                        ->where('user_id', $userId)
                        ->where('is_active', true)
                        ->where('status', 'published')
                        ->whereNull('deleted_at');
                }),
            ],
            'guests' => ['required', 'array'],
            'guests.*.name' => ['nullable', 'string'],
            'guests.*.email' => ['required', 'email'],
            'guests.*.attendance_status' => ['nullable', Rule::enum(GuestStatus::class)],
        ];
    }
}
