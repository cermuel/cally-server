<?php

namespace App;

enum ImportStatus: string
{
    case Pending = 'pending';
    case Completed = 'completed';
    case Processing = 'processing';
    case Failed = 'failed';
}
