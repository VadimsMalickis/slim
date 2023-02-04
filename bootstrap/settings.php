<?php

declare(strict_types=1);

use function App\env;

return [
    'app' => [
        'name'   => env('APP_NAME', 'Slim 4 Starter'),
        'env'    => env('APP_ENV', 'production'),
        'debug'  => env('APP_DEBUG', false),
        'locale' => 'en',
    ],
    'db' => [
        'host' => env('DB_HOST', 'localhost'),
        'port' => env('DB_PORT', '3306'),
        'user' => env('DB_USER', 'user'),
        'password' => env('db_password', ''),
        'name' => env('DB_NAME')
    ],
    'view' => [
        'path'  => '../resources/views',
        'cache' => false,
    ],
];
