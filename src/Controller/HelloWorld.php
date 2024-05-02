<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloWorld
{
    #[Route('/HelloWorld')]
    public function HelloWorld(): Response
    {

        return new Response(
            '<html><body><h1>Hello World ! 😁</h1></body></html>'
        );
    }
}