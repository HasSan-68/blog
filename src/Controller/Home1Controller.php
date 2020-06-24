<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class Home1Controller extends AbstractController
{
    /**
     * @Route("/home1", name="home1")
     */
    public function index()
    {
        return $this->render('home1/index.html.twig', [
            'controller_name' => 'Home1Controller',
        ]);
    }
}
