<?php declare(strict_types=1);

namespace App\Services;

enum Platform: string
{
    case email = 'email';
    case slack = 'slack';
}
