<?php

namespace App;

enum AutomationTrigger: string
{
    case BookingCreated = 'booking.created';
    case BookingEnded = 'booking.ended';
    case BookingNoShow = 'booking.no_show';
    case BookingCancelled = 'booking.cancelled';
}
