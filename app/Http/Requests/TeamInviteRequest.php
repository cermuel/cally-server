<?php

namespace App\Http\Requests;

use App\TeamRole;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TeamInviteRequest extends FormRequest
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
            $team = $this->route('team');

            $teamId = $team instanceof \App\Models\Team
                ? $team->id
                : $team;
            return [
                'users' => ['required', 'array', 'min:1'],
                'users.*.email' => [
                    'required',
                    'email',
                    'distinct:ignore_case',
                    Rule::unique('team_invites', 'email')
                        ->where('team_id', $teamId),
                ],
                'users.*.role' => [
                    'required',
                    Rule::enum(TeamRole::class),
                ],
            ];
        }
        return [
            'role' => ['sometimes', Rule::enum(TeamRole::class)],
        ];
    }
}
