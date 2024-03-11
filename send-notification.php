<?php

require('vendor/autoload.php');

if (count($argv) !== 3) {
    throw new \Exception('You must pass the platform and the message as command-line arguments');
}

$platform = $argv[1];
$message = $argv[2];

$notificationService = new \App\Services\NotificationService();
$notificationService->sendNotification($message, $platform);
