<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Animal;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Session\Session;

use Symfony\Component\Validator\Validation;
use Symfony\Component\Validator\Constraints\Email;

use App\Form\AnimalType;

class AnimalController extends AbstractController
{
    public function ValidarEmail($email)
    {
        $validator = Validation::createValidator();
        $errores = $validator->validate($email, [
            new Email()
        ]);

        if (count($errores) != 0) {
            echo "El email no se ha validado";

            foreach ($errores as $error) {
                echo $error->getMessage() . "</br>";
            }
        } else {
            echo "El email Si se ha validado";
        }
        var_dump($email);
        die();
    }

    /**
     * @Route("/animal", name="animal")
     */
    public function crearAnimal(Request $request)
    {
        $animal = new Animal();
        $form = $this->createForm(AnimalType::class, $animal);


        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($animal);
            $em->flush();

            //Session falsh
            $session = new Session();
            $session->getFlashBag()->add('message', 'animal creado');

            return $this->redirectToRoute('crear_animal');
        }

        return $this->render('animal/crear-animal.html.twig', [
            'form' => $form->createView()
        ]);
    }
    public function index(): Response
    {
        $em = $this->getDoctrine()->getManager();
        $animal_repo = $this->getDoctrine()->getRepository(Animal::class);

        //Todos los animales
        $animales = $animal_repo->findAll();

        //con condicion findOneBy para solo uno
        $animal = $animal_repo->findBy([
            'raza' => 'Africana'
        ], [
            'id' => 'DESC'
        ]);

        //var_dump($animal);
        /*
        //Query builder (una opcion tambien sin getParameter->andWhere("a.raza = 'Africana'"))
        $qb = $animal_repo->createQueryBuilder('a')
            //Sin ->andWhere y ->setParameter me trae todo los animales
            ->andWhere("a.raza = :raza ")
            ->setParameter('raza', 'Africana')
            ->orderBy('a.id', 'DESC')
            ->getQuery();

        $resulset = $qb->execute();
        */


        //var_dump($resulset);

        //DQL
        $dql = "SELECT a FROM App\Entity\Animal a WHERE a.raza = 'Africana' ORDER BY a.id DESC";
        $query = $em->createQuery($dql);

        $resulset = $query->execute();

        //var_dump($resulset);

        //SQL
        $conection = $this->getDoctrine()->getConnection();
        $sql = "SELECT * FROM animales ORDER BY id DESC";
        $prepare = $conection->prepare($sql);
        $prepare->execute();
        $resulset = $prepare->fetchAll();

        //var_dump($resulset);

        //Repositorio
        $animal = $animal_repo->getAnimalsOrderId('DESC');
        var_dump($animal);

        return $this->render('animal/index.html.twig', [
            'controller_name' => 'AnimalController',
            'animales' => $animales
        ]);
    }

    public function save(Request $request)
    {
        $request->get('tipo');

        /*
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
        */
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
