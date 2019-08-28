<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index()
    {
        return $this->render('main/index.html.twig');
    }

    /**
     * @Route("/evaluation", name="evaluation")
     */
    public function evaluation()
    {
        return $this->render('main/evaluation.html.twig');
    }

    /**
     * @Route("/permisaac", name="permisaac")
     */
    public function permisaac()
    {
        return $this->render('main/permisaac.html.twig');
    }
}
