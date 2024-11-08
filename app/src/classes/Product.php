<?php

declare(strict_types=1);

namespace src\classes;

use src\classes\exceptions\InvalidFormatException;

class Product
{
    public function getProfit(int $price, int $quantity): int
    {
        if ($this->checkFormat($price, $quantity)) {
            return $price * $quantity;
        } else {
            throw new InvalidFormatException('Invalid format');
        }
    }

    public function checkFormat(int $price, int $quantity): bool
    {
        return is_integer($price) && is_integer($quantity) ? true : false;
    }
}