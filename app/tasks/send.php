<?php

declare(strict_types=1);

require '../vendor/autoload.php';

use src\classes\exceptions\OnInputException;
use src\classes\Form;

    $form = new Form();

try {

    $form->getFetchedData();

} catch (OnInputException $e) {

    http_response_code($e->getCode());

    echo json_encode($e->getMessage());

} catch (Exception $e) {
    echo $e->getMessage();
}