<?php

declare(strict_types=1);

namespace src\classes;

use src\classes\exceptions\ValidationException;
use src\classes\exceptions\DataAccessException;

class User
{
    public array $data = [];

    public function registerUserPassword(string $password): string
    {
        if ($this->validatePassword($password)) {
            return "password is secure";
        } else {
            throw new ValidationException('password is not secure', 401);
        }
    }

    public function validatePassword(string $password): bool
    {
        if (strlen($password) < 8 | strlen($password) > 20) {
            return false;
        }

        if (!preg_match("/(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[\W_])/", $password)) {
            return false;
        }

        return true;
    }

    public function getData(): array
    {
        if ($this->connectToDB()) {
            return $this->data;
        } else {
            throw new DataAccessException('no access');
        }
    }

    public function connectToDB(): bool
    {
        return true;
    }
}