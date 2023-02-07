<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Repositories\HomeRepository;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use App;

class HomeController extends Controller
{
    public function index(Request $request, Response $response, array $args = []): Response
    {
        $repo = new HomeRepository();
        $users = $repo->getAllUsers();

        return $this->render($response, 'home/index.twig', [
            'name' => $args['name']
        ]);
    }
}
