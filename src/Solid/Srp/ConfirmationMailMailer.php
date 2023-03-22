<?php

namespace Src\Solid\Srp;

class ConfirmationMailMailer
{

    public function __construct( private MailMailerInterface $mailer , private ConfirmationMailFactory $confirmationMailFactory)
    {
    }

    public function sendTo(User $user)
    {
        $message = $this->confirmationMailFactory->createMessageFor($user);
        $this->mailer->send($message);
    }
}
