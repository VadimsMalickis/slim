<?php

declare(strict_types=1);

use App\Controllers\AboutController;
use App\Controllers\ContactController;
use App\Controllers\HomeController;

return function (Slim\App $app): void {

    $app->get('/about', [AboutController::class, 'index'])
        ->setName('about');
    $app->get('/contact', [ContactController::class, 'index'])
        ->setName('contact');
    $app->get('/[{name}]', [HomeController::class, 'index'])
        ->setArgument('name', 'User')
        ->setName('home');
};
