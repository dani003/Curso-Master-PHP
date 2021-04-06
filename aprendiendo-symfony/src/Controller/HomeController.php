<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'hello' => 'Hola Mundo con symfony 4 !!'
        ]);
    }

    public function animales($nombre, $apellido)
    {
        $title = 'Bienvenido a la pagina de animales';
        $animales = array('perro', 'gato', 'paloma', 'rata');
        $aves = array(
            'tipo' => 'palomo',
            'color' => 'gris',
            'edad ' => '4',
            'raza' => 'colillano'
        );

        return $this->render('home/animales.html.twig', [
            'title' => $title,
            'nombre' => $nombre,
            'apellido' => $apellido,
            'animales' => $animales,
            'aves' => $aves
        ]);
    }
    public function redirigir()
    {
        //return $this->redirectToRoute('animales', [
        //    'nombre' => 'Juan',
        //    'apellidos' => 'Lopez',
        //]);

        return $this->redirect('https://www.google.com');
    }
}
