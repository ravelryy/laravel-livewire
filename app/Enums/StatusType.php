<?php

namespace App\Enums;

enum StatusType: string
{
    case BERJALAN = 'stared';
    case DALAM_PROSES = 'in_progress';
    case SELESAI = 'done';
}
