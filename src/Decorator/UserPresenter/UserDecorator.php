<?php

namespace Src\Decorator\UserPresenter;

class UserDecorator
{
    public function __construct(protected User $user)
    {

    }

    public function fullName()
    {
        return $this->user->getFirstName() . " ". $this->user->getLattName();
    }

    public function persianRegisterDate()
    {
        return jdate($this->user->getRegisterDate())->format("Y-m-d");
    }
}
