<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class InicioController extends AbstractController
{

    public function principal(){

        return $this->render('index.html.twig', [
        ]);
    }

    public function contactenos(){

        return $this->render('contactenos.html.twig', [
        ]);
    }

    public function historia(){

        return $this->render('historia.html.twig', [
        ]);
    }

    public function material(){

        return $this->render('material.html.twig', [
        ]);
    }
}