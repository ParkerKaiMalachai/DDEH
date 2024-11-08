<?php

declare(strict_types= 1);

try {
    $divideByZero = 5 / 0;
} catch (ArithmeticError $e) {
    echo $e->getMessage();
}