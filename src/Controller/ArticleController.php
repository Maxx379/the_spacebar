<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
{
    #[Route('/')]
    public function homepage()
    {
        return new Response('Consegui!');
    }

    #[Route('/news/{slug}')]
    public function news($slug)
    {
        return new Response(sprintf('Bem vindo, %s!', $slug));
    }

}