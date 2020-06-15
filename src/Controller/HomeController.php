<?php

namespace App\Controller;

use App\Entity\Klant;
use App\Repository\KlantRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\BlogpostRepository;


class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(BlogpostRepository $blogpostRepository , KlantRepository $klant)
    {

        $klant = $klant->getClassName(Klant::class);
        return $this->render('home/index.html.twig', [
            'blogpost' => $blogpostRepository->findAll(),
            'controller_name' => 'HomeController','klant' => $blogpostRepository,
        ]);
    }
}
