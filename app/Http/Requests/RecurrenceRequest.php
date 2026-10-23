<?php

namespace App\Http\Requests;

use App\RecurrenceFrequency;
use App\RecurrenceStatus;
use Illuminate\Database\Query\Builder;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RecurrenceRequest extends FormRequest
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
                'event_id' => ['required', 'integer'],
                'frequency' => ['required', Rule::enum(RecurrenceFrequency::class)],
                'interval' => ['required', 'integer', 'min:1'],
                'days_of_week' => [
                    'exclude_unless:frequency,weekly',
                    'required',
                    'array',
                    'min:1',
                    'max:7',
                ],
                'days_of_week.*' => [
                    'required',
                    'integer',
                    'between:0,6',
                    'distinct',
                ],
                'starts_on' => ['required', 'date_format:Y-m-d'],
                'ends_on' => [
                    'required',
                    'date_format:Y-m-d',
                    'after_or_equal:starts_on',
                ],
                'start_time' => ['required', 'date_format:H:i'],
                'contact_id' => [
                    'nullable',
                    'integer',
                    Rule::exists('contacts', 'id')->where(
                        fn (Builder $query): Builder => $query->where('user_id', $this->user()->id),
                    ),
                ],
            ];
        }

        return [
            'frequency' => [
                'sometimes',
                'required',
                Rule::enum(RecurrenceFrequency::class),
            ],
            'interval' => ['sometimes', 'required', 'integer', 'min:1'],

            'days_of_week' => ['sometimes', 'required', 'array', 'min:1', 'max:7'],
            'days_of_week.*' => [
                'required',
                'integer',
                'between:0,6',
                'distinct',
            ],

            'starts_on' => ['sometimes', 'required', 'date_format:Y-m-d'],
            'ends_on' => ['sometimes', 'required', 'date_format:Y-m-d'],
            'start_time' => ['sometimes', 'required', 'date_format:H:i'],
            'status' => [
                'sometimes',
                'required',
                Rule::enum(RecurrenceStatus::class),
            ],
        ];
    }
}
