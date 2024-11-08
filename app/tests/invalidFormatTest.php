<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use src\classes\Product;
use src\classes\exceptions\InvalidFormatException;

class ExceptionTest extends TestCase
{
    public function testException(): void
    {

        $this->expectException(InvalidFormatException::class);
        $this->expectExceptionMessage('Invalid format');

        $product = new Product();

        $product->getProfit('6', 10);
    }
}