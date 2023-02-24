<?php

declare(strict_types=1);

namespace App\Controllers;

use App;
use App\Entities\User;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class HomeController extends Controller
{
    public function index(Request $request, Response $response, array $args = []): Response
    {

        return $this->render($response, 'home/index.twig', [
            'name' => $args['name']
        ]);
    }
}
