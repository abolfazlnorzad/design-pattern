<?php

namespace Src\Decorator\UserPresenter;

class User
{
    private $firstName;
    private $lattName;
    private $email;
    private $registerDate;

    /**
     * @param $firstName
     * @param $lattName
     * @param $email
     * @param $registerDate
     */
    public function __construct($firstName, $lattName, $email, $registerDate)
    {
        $this->firstName = $firstName;
        $this->lattName = $lattName;
        $this->email = $email;
        $this->registerDate = $registerDate;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return mixed
     */
    public function getLattName()
    {
        return $this->lattName;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getRegisterDate()
    {
        return $this->registerDate;
    }



}
