<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class StandwichController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home()
    {
    	return $this->render('standwich/home.html.twig');
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact()
    {
        return $this->render('standwich/contact.html.twig');
    }

    /**
     * @Route("/menu", name="menu")
     */
    public function menu()
    {
        return $this->render('standwich/menu.html.twig');
    }

    /**
     * @Route("/connection", name="connection")
     */
    public function connection()
    {
        return $this->render('standwich/connection.html.twig');
    }

    /**
     * @Route("/commande", name="commande")
     */
    public function commande()
    {
        return $this->render('standwich/commande.html.twig');
    }

     /**
     * @Route("/menu/classique", name="classique")
     */
    public function classique()
    {
        return $this->render('standwich/menu/classique.html.twig');
    }

    /**
     * @Route("/menu/speciaux", name="speciaux")
     */
    public function speciaux()
    {
        return $this->render('standwich/menu/speciaux.html.twig');
    }

    /**
     * @Route("/menu/burgers", name="burgers")
     */
    public function burgers()
    {
        return $this->render('standwich/menu/burgers.html.twig');
    }

    /**
     * @Route("/menu/salades", name="salades")
     */
    public function salades()
    {
        return $this->render('standwich/menu/salades.html.twig');
    }

    /**
     * @Route("/menu/assiettes", name="assiettes")
     */
    public function assiettes()
    {
        return $this->render('standwich/menu/assiettes.html.twig');
    }

    /**
     * @Route("/menu/panini", name="panini")
     */
    public function panini()
    {
        return $this->render('standwich/menu/panini.html.twig');
    }

    /**
     * @Route("/menu/tacos", name="tacos")
     */
    public function tacos()
    {
        return $this->render('standwich/menu/tacos.html.twig');
    }

    /**
     * @Route("/menu/barquettes", name="barquettes")
     */
    public function barquettes()
    {
        return $this->render('standwich/menu/barquettes.html.twig');
    }

    /**
     * @Route("/menu/desserts", name="desserts")
     */
    public function desserts()
    {
        return $this->render('standwich/menu/desserts.html.twig');
    }

    /**
     * @Route("/menu/boissons", name="boissons")
     */
    public function boissons()
    {
        return $this->render('standwich/menu/boissons.html.twig');
    }
}
