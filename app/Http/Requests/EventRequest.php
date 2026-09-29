<?php

namespace App\Http\Requests;

use App\EventStatus;
use App\EventVisibility;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EventRequest extends FormRequest
{

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
            'name' => ['nullable', 'string', 'min:4', 'max:20'],
            'slug' => ['nullable', 'string', 'min:3', 'unique:events,slug'],
            'description' => ['nullable', 'string'],
            'color' => ['nullable', 'string'],
            'status' => ['nullable', Rule::enum(EventStatus::class)],
            'duration_minutes' => ['nullable', 'integer'],
            'is_active' => ['nullable', 'boolean'],
            'visibility' => ['nullable', Rule::enum(EventVisibility::class)],
            'pre_meeting_minutes' => ['nullable', 'integer'],
            'post_meeting_minutes' => ['nullable', 'integer'],
        ];
    }
}
