<?php

namespace App\Http\Requests;

use App\EventStatus;
use App\EventVisibility;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EventRequest extends FormRequest
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
                'name' => ['required', 'min:4', 'max:20'],
                'slug' => [
                    'required',
                    'min:3',
                    Rule::unique('events', 'slug')->where('user_id', $this->user()->id),
                ],
                'description' => ['nullable'],
                'color' => ['nullable'],
                'status' => ['nullable', Rule::enum(EventStatus::class)],
                'duration_minutes' => ['required', 'integer'],
                'visibility' => ['nullable', Rule::enum(EventVisibility::class)],
            ];
        }

        return [
            'name' => ['required', 'min:4', 'max:20'],
            'slug' => ['optional', 'min:3', 'unique:events,slug'],
            'description' => ['nullable'],
            'color' => ['nullable'],
            'status' => ['nullable', Rule::enum(EventStatus::class)],
            'duration_minutes' => ['required', 'integer'],
            'is_active' => ['nullable', 'boolean'],
            'visibility' => ['nullable', Rule::enum(EventVisibility::class)],
            'pre_meeting_minutes' => ['nullable', 'integer'],
            'post_meeting_minutes' => ['nullable', 'integer'],
        ];
    }
}
