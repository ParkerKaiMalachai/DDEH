<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use src\classes\User;
use src\classes\exceptions\ValidationException;

class ExceptionTest extends TestCase
{
    public function testException(): void
    {

        $this->expectException(ValidationException::class);
        $this->expectExceptionCode(401);

        $user = new User();

        $user->registerUserPassword('fgH56g!');
    }
}
