
<?php
return [
    [
        'key' => 'follow_up_email',
        'name' => 'Follow-up email',
        'description' => 'Send a thank-you email after a meeting ends.',
        'trigger' => 'booking.ended',
        'action' => 'send_email',
        'payload' => [
            'subject' => 'Thanks for meeting, {{guest_name}}',
            'body' => "Hi {{guest_name}},\n\nThanks for joining {{event_name}}. It was great speaking with you.",
        ],
    ],
    [
        'key' => 'no_show_email',
        'name' => 'No-show email',
        'description' => 'Send an email when a guest misses a meeting.',
        'trigger' => 'booking.no_show',
        'action' => 'send_email',
        'payload' => [
            'subject' => 'We missed you at {{event_name}}',
            'body' => "Hi {{guest_name}},\n\nLooks like you missed {{event_name}}. You can book another time if needed.",
        ],
    ],
    [
        'key' => 'booking_cancelled_email',
        'name' => 'Cancellation email',
        'description' => 'Send a custom message when a booking is cancelled.',
        'trigger' => 'booking.cancelled',
        'action' => 'send_email',
        'payload' => [
            'subject' => '{{event_name}} was cancelled',
            'body' => "Hi {{guest_name}},\n\nYour booking for {{event_name}} has been cancelled.",
        ],
    ],
    [
        'key' => 'auto_accept_booking',
        'name' => 'Auto-accept booking',
        'description' => 'Automatically confirm new bookings.',
        'trigger' => 'booking.created',
        'action' => 'auto_accept_booking',
        'payload' => [],
    ],
];
