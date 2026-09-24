<?php

namespace App\Http\Requests;

use App\Day;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AvailabilityRequest extends FormRequest
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
        if ($this->isMethod('post'))
            return [
                'day' => ['required', Rule::enum(Day::class)],
                'start_time' => ['date_format:H:i', 'nullable'],
                'end_time' => ['date_format:H:i', 'nullable']
            ];
        return [
            'day' => ['nullable', Rule::enum(Day::class)],
            'start_time' => ['date_format:H:i', 'nullable'],
            'end_time' => ['date_format:H:i', 'nullable']
        ];
    }
}
