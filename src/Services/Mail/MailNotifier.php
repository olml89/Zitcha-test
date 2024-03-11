<?php declare(strict_types=1);

namespace App\Services\Mail;

use App\Services\Notifier;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mime\Email;

final class MailNotifier implements Notifier
{
    public function notify(string $message): void
    {
        echo PHP_EOL . 'Sending notification via email' . PHP_EOL;

        $mailer_transport = Transport::fromDsn('smtp://sandbox.smtp.mailtrap.io');
        $mailer = new Mailer($mailer_transport);

        $email = (new Email())
            ->to('webmaster@domain.com')
            ->from('webmaster@domain.com')
            ->subject('You have a new notification')
            ->text($message);

        $mailer->send($email);
    }
}
