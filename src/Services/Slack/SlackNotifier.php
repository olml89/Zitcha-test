<?php declare(strict_types=1);

namespace App\Services\Slack;

use App\Lib\SimpleSlackClient;
use App\Services\Notifier;

final readonly class SlackNotifier implements Notifier
{
    public function notify(string $message): void
    {
        echo PHP_EOL . 'Sending notification via Slack' . PHP_EOL;

        SimpleSlackClient::postMessage('admin-notifications', $message);
    }
}
