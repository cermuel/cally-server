<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TeamRequest extends FormRequest
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
                'name' => ['required', 'string'],
                'slug' => ['required', 'string', 'unique:teams,slug'],
                'description' => ['nullable', 'string'],
                'avatar_url' => ['nullable', 'string'],
            ];
        }

        return [
            'name' => ['sometimes', 'string'],
            'slug' => ['sometimes', 'string', Rule::unique('teams', 'slug')->ignore($this->route('team'))],
            'description' => ['sometimes', 'nullable', 'string'],
            'avatar_url' => ['sometimes', 'nullable', 'string'],
        ];
    }
}
