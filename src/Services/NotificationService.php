<?php declare(strict_types=1);

namespace App\Services;

use App\Services\Mail\MailNotifier;
use App\Services\Slack\SlackNotifier;
use InvalidArgumentException;

final class NotificationService
{
    /**
     * @var array<string, Notifier>
     */
    private array $notifiers;

    public function __construct() {
        $this->notifiers = [
            Platform::email->value => new MailNotifier(),
            Platform::slack->value => new SlackNotifier(),
        ];
    }

    public function sendNotification(string $notificationMessage, string $platform): void
    {
        $notifier = $this->notifiers[$platform] ?? throw new InvalidArgumentException(sprintf(
            'Platform %s is not implemented',
            $platform,
        ));

        $notifier->notify($notificationMessage);
    }
}
