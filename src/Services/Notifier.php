<?php declare(strict_types=1);

namespace App\Services;

interface Notifier
{
    public function notify(string $message): void;
}
