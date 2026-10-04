<?php

namespace App\Http\Requests;

use App\AutomationAction;
use App\AutomationTrigger;
use App\GuestStatus;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Validator;

class AutomationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $action = $this->input('action');

        $isSendEmail = $action === AutomationAction::SendEmail->value;
        $isAddToContact = $action === AutomationAction::AddToContact->value;
        if ($this->isMethod('post')) {

            return [
                'name' => ['required', 'string', 'max:255'],

                'color' => ['nullable', 'string'],

                'trigger' => ['required', Rule::enum(AutomationTrigger::class)],

                'action' => ['required', Rule::enum(AutomationAction::class)],

                'payload' => [
                    Rule::requiredIf($isSendEmail || $isAddToContact),
                    'array',
                ],

                // paykoad for send email
                'payload.subject' => [
                    Rule::requiredIf($isSendEmail),
                    'string',
                    'max:255',
                ],

                'payload.guestType' => [Rule::enum(GuestStatus::class), 'nullable'],

                'payload.body' => [
                    Rule::requiredIf($isSendEmail),
                    'string',
                    'max:5000',
                ],

                // payload to add to contact
                'payload.email' => [
                    Rule::requiredIf($isAddToContact),
                    'email',
                    'max:255',
                ],

                'payload.name' => [
                    Rule::requiredIf($isAddToContact),
                    'nullable',
                    'string',
                    'max:255',
                ],
            ];
        }

        return [
            'name' => ['sometimes', 'required', 'string', 'max:255'],

            'color' => ['sometimes', 'nullable', 'string'],

            'is_active' => ['sometimes', 'nullable', 'boolean'],

            'trigger' => ['sometimes', 'required', Rule::enum(AutomationTrigger::class)],

            'action' => ['sometimes', 'required', Rule::enum(AutomationAction::class)],

            'payload' => [
                'sometimes',
                Rule::requiredIf($isSendEmail || $isAddToContact),
                'array',
            ],

            // payload for send email
            'payload.subject' => [
                Rule::requiredIf($isSendEmail && $this->has('payload')),
                'string',
                'max:255',
            ],

            'payload.guestType' => [
                'nullable',
                Rule::enum(GuestStatus::class),
            ],

            'payload.body' => [
                Rule::requiredIf($isSendEmail && $this->has('payload')),
                'string',
                'max:5000',
            ],

            // payload to add to contact
            'payload.email' => [
                Rule::requiredIf($isAddToContact && $this->has('payload')),
                'email',
                'max:255',
            ],

            'payload.name' => [
                Rule::requiredIf($isAddToContact && $this->has('payload')),
                'nullable',
                'string',
                'max:255',
            ],
        ];
    }

    public function after(): array
    {
        return [
            function (Validator $validator) {
                $trigger = $this->input('trigger');
                $action = $this->input('action');

                $allowedActions = [
                    AutomationTrigger::BookingCreated->value => [
                        AutomationAction::AutoAcceptBooking->value,
                        AutomationAction::SendEmail->value,
                        AutomationAction::AddToContact->value,
                    ],

                    AutomationTrigger::BookingEnded->value => [
                        AutomationAction::SendEmail->value,
                    ],

                    AutomationTrigger::BookingNoShow->value => [
                        AutomationAction::SendEmail->value,
                    ],

                    AutomationTrigger::BookingCancelled->value => [
                        AutomationAction::SendEmail->value,
                    ],
                ];

                if (! isset($allowedActions[$trigger])) {
                    return;
                }

                if (
                    $this->has('payload.guestType') &&
                    $action !== AutomationAction::SendEmail->value
                ) {
                    $validator->errors()->add(
                        'payload.guestType',
                        'Guest type can only be used when the action is send email.'
                    );
                }

                if (! in_array($action, $allowedActions[$trigger], true)) {
                    $validator->errors()->add(
                        'action',
                        'The selected action is not allowed for this trigger.'
                    );
                }
            },
        ];
    }
}
