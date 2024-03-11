<?php declare(strict_types=1);

namespace App\Services;

use App\Services\Mail\MailNotifier;
use App\Services\Slack\SlackNotifier;
use InvalidArgumentException;

final readonly class NotificationService
{
    public function __construct(
        private NotifierFactory $notifierFactory,
    ) {}

    public function sendNotification(string $notificationMessage, string $platform): void
    {
        $notifier = $this->notifierFactory->create(Platform::from($platform));

        $notifier->notify($notificationMessage);
    }
}
