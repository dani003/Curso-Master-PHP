<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Animal;

class AnimalController extends AbstractController
{
    /**
     * @Route("/animal", name="animal")
     */
    public function index(): Response
    {
        $animal_repo = $this->getDoctrine()->getRepository(Animal::class);

        //Todos los animales
        $animales = $animal_repo->findAll();

        //con condicion findOneBy para solo uno
        $animal = $animal_repo->findBy([
            'raza' => 'Africana'
        ], [
            'id' => 'DESC'
        ]);

        var_dump($animal);

        return $this->render('animal/index.html.twig', [
            'controller_name' => 'AnimalController',
            'animales' => $animales
        ]);
    }

    public function save()
    {
        //Guardar en una tabla de la base de datos

        //Cargo el em
        $entityManager = $this->getDoctrine()->getManager();

        //Creo el objeto y le doy valores
        $animal = new Animal();
        $animal->setTipo("Leon");
        $animal->setColor("Blanco");
        $animal->setRaza("Africana");

        //guardar objeto en doctrine
        $entityManager->persist($animal);

        //Volcar datos en la table
        $entityManager->flush();

        return new Response('El animal guardado tiene el id ' . $animal->getId());
    }
    public function animal(Animal $animal)
    {
        //EN CASOI DE MANDAR EL ID EN VEZ DE MANDAR EL OBNJETO ANIMAL
        /*
        //Cargarr repositorio

        $animal_repo = $this->getDoctrine()->getRepository(Animal::class);

        //Consulta
        $animal = $animal_repo->find($id);
        */

        if (!$animal) {
            $message = 'El animal no existe';
        } else {
            $message = 'Tu animal seleccionado es: ' . $animal->getTipo() . ' - ' . $animal->getRaza();
        }

        return new Response($message);
    }

    public function update($id)
    {
        //Cargar doctrine

        $doctrine = $this->getDoctrine();

        //Cargar entityManager
        $em = $doctrine->getManager();

        //Cargar repo Animal
        $animal_repo = $em->getRepository(Animal::class);

        //Find para consiguir el objeto 
        $animal = $animal_repo->find($id);

        //Comprobar si el objeto me llega
        if (!$animal) {
            $message = 'El objeto no existe';
        } else {

            //Asignarle los valores al objeto
            $animal->setTipo("Perro $id");
            $animal->setColor('rojo');

            //Persistir en doctrine
            $em->persist($animal);

            //Guardar en la bd
            $em->flush();

            $message = 'Haz actualizado el animal ' . $animal->getId();
        }

        //Respuesta
        return new Response($message);
    }

    public function delete(Animal $animal)
    {
        var_dump($animal);

        if ($animal && is_object($animal)) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($animal);
            $em->flush();

            $message = "Animal borrado correctamente";
        } else {
            $message = "Animal no encontrado";
        }

        return new Response($message);
    }
}
