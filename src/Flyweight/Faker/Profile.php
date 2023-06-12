<?php

namespace Src\Flyweight\Faker;

class Profile
{
    private string $gender;
    private string $city;
    private int $age;

    /**
     * @param string $gender
     * @param string $city
     * @param int $age
     */
    public function __construct(string $gender, string $city, int $age)
    {
        $this->gender = $gender;
        $this->city = $city;
        $this->age = $age;
    }

    /**
     * @return string
     */
    public function getGender(): string
    {
        return $this->gender;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }



}
