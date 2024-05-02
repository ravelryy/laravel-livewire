<?php

namespace App\Enums;

enum PriorityType: string
{
    case RENDAH = 'low';
    case NORMAL = 'normal';
    case TINGGI = 'high';
}
