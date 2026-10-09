<?php

namespace App;

enum EventScheduleType: string
{
    case Individual = 'individual';
    case RoundRobin = 'round_robin';
    case Collective =  'collective';
}
