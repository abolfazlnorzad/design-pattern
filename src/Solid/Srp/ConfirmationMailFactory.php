<?php

// factory class =>  create new object

namespace Src\Solid\Srp;

class ConfirmationMailFactory
{
    public function __construct(private TranslatorInterface $translate , private TemplateEngineInterface $templating)
    {
    }

    public function createMessageFor(User $user) :Message
    {
        $subject = $this->translate->translate("please confirm your email address");
        $body = $this->templating->render("sdfsdfsdf");
        $emailAddress = $user->getEmailAddress();
        return (new Message($subject , $body , $emailAddress));

    }

}
