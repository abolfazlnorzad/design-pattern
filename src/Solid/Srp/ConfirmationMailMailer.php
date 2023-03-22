<?php

namespace Src\Solid\Srp;

class ConfirmationMailMailer
{
    private MailMailerInterface $mailer;
    private TemplateEngineInterface $templating;
    private TranslatorInterface $translate;

    public function sendTo(User $user)
    {
        $message = $this->createMessageFor($user);
        $this->mailer->send($message);
    }

    private function createMessageFor(User $user) :Message
    {
        $subject = $this->translate->translate("please confirm your email address");
        $body = $this->templating->render("sdfsdfsdf");
        $emailAddress = $user->getEmailAddress();
        return (new Message($subject , $body , $emailAddress));

    }


}
