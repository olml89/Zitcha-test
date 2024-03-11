<?php declare(strict_types=1);

namespace App\Services;

use App\Services\Mail\MailNotifier;
use App\Services\Slack\SlackNotifier;

final class NotifierFactory
{
    public function create(Platform $platform): Notifier
    {
        return match ($platform) {
            Platform::email => new MailNotifier(),
            Platform::slack => new SlackNotifier(),
        };
    }
}
