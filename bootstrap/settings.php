<?php

declare(strict_types=1);

use function App\env;

return [
    'app' => [
        'name' => env('APP_NAME', 'Slim 4 Starter'),
        'env' => env('APP_ENV', 'production'),
        'debug' => env('APP_DEBUG', false),
        'locale' => 'en',
    ],
    'db' => [
        'host' => env('DB_HOST', 'localhost'),
        'port' => env('DB_PORT', 3306),
        'user' => env('DB_USER', 'user'),
        'password' => env('DB_PASSWORD', ''),
        'name' => env('DB_NAME')
    ],
    'view' => [
        'path' => '../resources/views',
        'cache' => false,
    ],
    'doctrine' => [
        // Enables or disables Doctrine metadata caching
        // for either performance or convenience during development.
        'dev_mode' => true,

        // Path where Doctrine will cache the processed metadata
        // when 'dev_mode' is false.
        'cache_dir' => __DIR__.'/../var/doctrine',

        // List of paths where Doctrine will search for metadata.
        // Metadata can be either YML/XML files or PHP classes annotated
        // with comments or PHP8 attributes.
        'metadata_dirs' => [ __DIR__.'/../app/Entities'],

        // The parameters Doctrine needs to connect to your database.
        // These parameters depend on the driver (for instance the 'pdo_sqlite' driver
        // needs a 'path' parameter and doesn't use most of the ones shown in this example).
        // Refer to the Doctrine documentation to see the full list
        // of valid parameters: https://www.doctrine-project.org/projects/doctrine-dbal/en/current/reference/configuration.html
        'connection' => [
            'driver' => 'pdo_mysql',
            'charset' => 'utf8',
            'host' => env('DB_HOST'),
            'port' => env('DB_PORT'),
            'dbname' => env('DB_NAME'),
            'user' => env('DB_USER'),
            'password' => env('DB_PASSWORD'),
        ]
    ]
];
