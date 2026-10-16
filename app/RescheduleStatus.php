<?php

namespace App;

enum RescheduleStatus: string
{
    case Accepted = 'accepted';
    case Pending = 'pending';
    case Declined = 'declined';
}
