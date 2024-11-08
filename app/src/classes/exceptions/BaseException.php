<?php

declare(strict_types=1);

namespace src\classes\exceptions;

use Exception;
use DateTime;

class BaseException extends Exception
{
    public function log(string $message, string $type, int $line): void
    {
        $formattedDate = (new DateTime())->format('d-m-Y H:m:s');

        $info = sprintf('%s %s: %s On line: %s', $formattedDate, $type, $message, $line);
        
        error_log($info);
    }
}