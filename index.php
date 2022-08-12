<?php

use Psr\Http\Message\ServerRequestInterface;

function laravelapi(ServerRequestInterface $request): string
{
    require_once __DIR__ . '/public/index.php';

    return '';
}
