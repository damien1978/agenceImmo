<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController 
{

    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        return $this->render("home/index.html.twig", [
            "title" => "Bienvenue sur la page d'Accueil",
            "current_menu" => "index"
        ]);
    }
    /**
     * @route("/home", name="home")
     */
    public function home(): Response
    {
        return $this->render("home/home.html.twig",[
            "title" => "Présentation de l'Agence",
            "current_menu" =>"home",
        ]);

    }


}
