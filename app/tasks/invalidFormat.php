<?php

declare(strict_types= 1);

use src\classes\Product;
use src\classes\exceptions\InvalidFormatException;

$product = new Product;

try {
    echo $product->getProfit(5, 10);
} catch (InvalidFormatException $e) {
    echo $e->getMessage();
}