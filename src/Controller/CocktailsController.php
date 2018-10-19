<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CocktailsController extends AbstractController
{
    /**
     * @Route("/cocktails", name="cocktails")
     */
    public function index()
    {
        return $this->render('Frontend/cocktails.html.twig');
    }
}
