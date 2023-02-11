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
        $em = $this->em;
        $user = new User('user' . random_int(0, 999) . '@rvt.lv');
        $em->persist($user);
        $em->flush();


        return $this->render($response, 'home/index.twig', [
            'name' => $args['name']
        ]);
    }
}
