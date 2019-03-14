<?php

$errorHandler = function () {
    JSON(500, ['message' => 'something went wrong']);
};

function JSON(int $status, array $data): void
{
    header('content-type: application/json');
    http_response_code($status);
    echo json_encode($data);
    exit;
}

set_error_handler($errorHandler);
set_exception_handler($errorHandler);
