<?php

namespace App;

enum AutomationTrigger: string
{
    case BookingCreated = 'booking.created';
    case BookingReschedule = 'booking.reschedule';
    case BookingRescheduleRequest = 'booking.reschedulerequest';
    case BookingEnded = 'booking.ended';
    case BookingNoShow = 'booking.no_show';
    case BookingCancelled = 'booking.cancelled';
}
