<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
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
            'name' => ['string', 'nullable'],
            'avatar_url' => ['string', 'nullable'],
            'username' => ['string', 'unique:users,username', 'min:3', 'nullable'],
        ];
    }
}
