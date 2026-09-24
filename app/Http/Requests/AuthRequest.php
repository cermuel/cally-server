<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
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
        if ($this->filled('email')) {
            $this->merge([
                'email' => strtolower(trim($this->input('email'))),
            ]);
        }
        if ($this->isMethod('post')) {
            return [
                'email' => ['required', 'email', 'unique:users,email'],
                'password' => ['required', 'min:4', 'confirmed'],
            ];
        }

        return [
            'email' => ['required', 'email', 'unique:users'],
        ];
    }
}
