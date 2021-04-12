<?php

namespace App\Repository;

use App\Entity\Animal;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class AnimalRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Animal::class);
    }

    public function getAnimalsOrderId($order)
    {
        $qb = $this->createQueryBuilder('a')
            //Sin ->andWhere y ->setParameter me trae todo los animales
            //->andWhere("a.raza = :raza ")
            //->setParameter('raza', 'Africana')
            ->orderBy('a.id', 'DESC')
            ->getQuery();

        $resulset = $qb->execute();

        $coleccion = array(
            'name' => 'Coleccion de animales',
            'animales' => $resulset
        );
        return $coleccion;
    }
}
