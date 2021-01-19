<?php

class Response
{
    public const OK = 'OK';
    public const NOT_FOUND = 'NOT FOUND';
    public const SERVER_ERROR = 'SERVER ERROR';
}

$httpCode = 200;

$matchedCode = match ($httpCode) {
    200 => Response::OK,
    404 => Response::NOT_FOUND,
    500 => Response::SERVER_ERROR
};

echo $matchedCode . PHP_EOL;
