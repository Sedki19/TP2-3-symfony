<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/yes')]
    public function notifications(): Response
    {
   
        $articles = ['Artcile1', 'Article 2','Article 3']; 

        // the template path is the relative file path from `templates/`
        return $this->render('index.html.twig', ['articles' => $articles]);
    }
}