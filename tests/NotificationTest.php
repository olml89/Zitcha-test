<?php declare(strict_types=1);

namespace Tests;

use App\Services\NotificationService;
use PHPUnit\Framework\TestCase;

class NotificationTest extends TestCase
{
    public static function provideMessageProvider(): array
    {
        return [
            "slack" => ['slack', PHP_EOL . 'Sending notification via Slack' . PHP_EOL],
            'email' => ['email', PHP_EOL . 'Sending notification via email' . PHP_EOL]
        ];
    }

    /**
     * @dataProvider provideMessageProvider
     */
    public function testNotification(string $provider, string $consoleOutput): void
    {
        $this->expectOutputString($consoleOutput);

        try {
            $notificationService = new NotificationService();
            $notificationService->sendNotification( 'test message', $provider);
        } catch (\Throwable) {
            //
        }
    }
}
