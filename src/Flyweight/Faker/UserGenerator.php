<?php

namespace Src\Flyweight\Faker;

class UserGenerator
{
    private $profiles = [];
    private $users = [];

    public function createUser(string $name, string $email, string $gender, string $city, int $age): User
    {
        $profile = $this->createProfile($gender, $city, $age);
        $user = new User($name, $email, $profile);
        $this->users[] = $user;
        return $user;
    }

    private function createProfile(string $gender, string $city, int $age)
    {
        $key = $this->createKey(get_defined_vars());
        if (!isset($this->profiles[$key])) {
            $this->profiles[$key] = new Profile($gender, $city, $age);
        }
        return $this->profiles[$key];
    }

    private function createKey(array $data): string
    {
        ksort($data);
        return md5(implode('_', $data));
    }
}
