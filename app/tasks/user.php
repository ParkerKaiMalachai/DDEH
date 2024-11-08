<?php

declare(strict_types=1);

use src\classes\User;
use src\classes\exceptions\BaseException;
use src\classes\exceptions\ValidationException;
use src\classes\exceptions\DataAccessException;

$user = new User();

try {
    $user->getData();
    $user->registerUserPassword('fgHgg6g');
} catch (DataAccessException $e) {
    $line = $e->getLine();
    $message = $e->getMessage();
    $e->log($message, 'DataAccessException', $line);
    echo $message;
} catch (ValidationException $e) {
    $line = $e->getLine();
    $message = $e->getMessage();
    $e->log($message, 'ValidationException', $line);
    echo $message;
} catch (BaseException $e) {
    $line = $e->getLine();
    $message = $e->getMessage();
    $e->log($message, 'BaseException', $line);
    echo $message;
} catch (Exception $e) {
    echo $e->getMessage();
}