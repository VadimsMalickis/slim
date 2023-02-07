<?php

declare(strict_types=1);

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use App;

class HomeController extends Controller
{
    public function index(Request $request, Response $response, array $args = []): Response
    {
        $conn = new \mysqli(env('DB_HOST'), env('DB_USER'), env('DB_PASSWORD'), env('DB_NAME'), (int) env('DB_PORT'));
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        return $this->render($response, 'home/index.twig', [
            'name' => $args['name']
        ]);
    }
}
