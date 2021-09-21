<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


class MainController extends AbstractController
{
    // création de 3 routes :

    /**
     * @Route("/home", name="home")
     */
    public function home(): Response
    {
        $tab[0]["prenom"] = "Tom";
        $tab[0]["nom"] = "CRUISE";
        $tab[1]["prenom"] = "Nicolas";
        $tab[1]["nom"] = "CAGE";
        $tab[2]["prenom"] = "Bruce";
        $tab[2]["nom"] = "WILLIS";

        return $this->render('Main/home.html.twig', ['tab'=>$tab]);
    }

    /**
     * @Route("/about_us", name="aboutUs")
     */
    public function aboutUs(): Response
    {
        $tab[0]["prenom"] = "Tom";
        $tab[0]["nom"] = "CRUISE";
        $tab[1]["prenom"] = "Nicolas";
        $tab[1]["nom"] = "CAGE";
        $tab[2]["prenom"] = "Bruce";
        $tab[2]["nom"] = "WILLIS";

        return $this->render('Main/aboutus.html.twig', ['tab'=>$tab]);
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact(): Response
    {
        die('Contact');
    }
}