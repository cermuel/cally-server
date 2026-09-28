<?php

namespace App;

enum EventStatus: string
{
    case Published = 'published';
    case Draft = 'draft';
}
