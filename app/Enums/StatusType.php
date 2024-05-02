<?php

namespace App\Enums;

enum StatusType: string
{
    case STARTED = 'stared';
    case IN_PROGRESS = 'in_progress';
    case DONE = 'done';
}
