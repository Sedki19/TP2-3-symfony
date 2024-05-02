<?php

namespace App\Controller;

use App\Entity\Article; 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request; 
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method; 
use Symfony\Component\Form\Extension\Core\Type\TextType; 
use Symfony\Component\Form\Extension\Core\Type\SubmitType; 
use Doctrine\ORM\EntityManagerInterface;


class IndexController extends AbstractController
{
    #[Route('/indextwig')]
    public function notifications(): Response
    {
   
        $articles = ['Artcile1', 'Article 2','Article 3']; 

     
        return $this->render('index.html.twig', ['articles' => $articles]);
    }

     
    #[Route("/article/save")]
    
    public function save(EntityManagerInterface $entityManager): Response
    {
        $article = new article();
        $article->setNom('Keyboard');
        $article->setPrix(1999);

        // tell Doctrine you want to (eventually) save the article (no queries yet)
        $entityManager->persist($article);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new article with id '.$article->getId());
    }

    #[Route('/article_list')]
    public function home(): Response
    {
   
        $articles = $this->getDoctine()->getRepository(Article::class)->findAll(); //me temchiechh
     
        return $this->render('index.html.twig', ['articles' => $articles]);
    }
}