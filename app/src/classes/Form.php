<?php

declare(strict_types=1);

namespace src\classes;

use src\classes\exceptions\OnInputException;

class Form
{
    public function getFetchedData(): void
    {
        if ($this->checkDataRetrieved()) {
            header('Content-Type: application/json; charset=UTF-8');
            $value = $_POST['value'];
            echo json_encode(['value' => $value]);
        } else {
            echo json_encode([]);
        }
    }

    public function checkDataRetrieved(): bool
    {
        if (!isset($_POST['value']) | strlen($_POST['value']) < 1) {
            throw new OnInputException('Inaccurate data', 400);
        }

        return true;
    }
}