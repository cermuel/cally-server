<?php

namespace App\Http\Requests;

use App\Models\Contact;
use Illuminate\Database\Query\Builder;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ContactRequest extends FormRequest
{
    protected function prepareForValidation(): void
    {
        if ($this->filled('email')) {
            $this->merge([
                'email' => strtolower(trim($this->input('email'))),
            ]);
        }
    }

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
                'email' => [
                    'required',
                    'email',
                    'max:255',
                    Rule::unique('contacts', 'email')->where(
                        fn (Builder $query): Builder => $query->where('user_id', $this->user()->id),
                    ),
                ],
                'name' => ['nullable', 'string', 'max:255'],
                'phone' => ['nullable', 'string', 'max:255'],
                'timezone' => ['nullable', 'timezone:all'],
                'company' => ['nullable', 'string', 'max:255'],
                'tag' => ['nullable', 'string', 'max:255'],
                'notes' => ['nullable', 'string'],
            ];
        }

        $routeContact = $this->route('contact');
        $contact = $routeContact instanceof Contact
            ? $routeContact
            : Contact::find($routeContact);

        return [
            'email' => [
                'sometimes',
                'required',
                'email',
                'max:255',
                Rule::unique('contacts', 'email')
                    ->where(fn (Builder $query): Builder => $query->where('user_id', $contact?->user_id ?? $this->user()->id))
                    ->ignore($contact?->id),
            ],
            'name' => ['sometimes', 'nullable', 'string', 'max:255'],
            'phone' => ['sometimes', 'nullable', 'string', 'max:255'],
            'timezone' => ['sometimes', 'nullable', 'timezone:all'],
            'company' => ['sometimes', 'nullable', 'string', 'max:255'],
            'tag' => ['sometimes', 'nullable', 'string', 'max:255'],
            'notes' => ['sometimes', 'nullable', 'string'],
        ];
    }
}
