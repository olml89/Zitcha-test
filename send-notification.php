<?php

use App\Services\NotificationService;
use App\Services\NotifierFactory;
use App\Services\Platform;

require('vendor/autoload.php');

if (count($argv) !== 3) {
    throw new \Exception('You must pass the platform and the message as command-line arguments');
}

$platform = \App\Services\Platform::from($argv[1]);
$message = $argv[2];

$notificationService = new NotificationService(new NotifierFactory());
$notificationService->sendNotification($message, $platform);
