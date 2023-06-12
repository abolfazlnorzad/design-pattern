<?php

namespace Src\Flyweight\Faker;

class User
{
    private string $name,$email;
    private Profile $profile;

    /**
     * @param string $name
     * @param string $email
     * @param Profile $profile
     */
    public function __construct(string $name, string $email, Profile $profile)
    {
        $this->name = $name;
        $this->email = $email;
        $this->profile = $profile;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return Profile
     */
    public function getProfile(): Profile
    {
        return $this->profile;
    }



}
