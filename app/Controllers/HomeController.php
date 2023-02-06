<?php

declare(strict_types=1);

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class HomeController extends Controller
{
    public function index(Request $request, Response $response, array $args = []): Response
    {
        return $this->render($response, 'home/index.twig', [
            'name' => $args['name']
        ]);
    }
}
