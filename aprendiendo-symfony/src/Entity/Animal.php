<?php

namespace AppEntity;

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Animales
 *
 * @ORM\Table(name="animales")
 * @ORM\Entity(repositoryClass="App\Repository\AnimalRepository")
 */
class Animal
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=255, nullable=false)
     * @Assert\NotBlank
     * @Assert\Regex(
     *      pattern="/[a-zA-Z]+/", 
     *      message="El id debe estar formada por letras"
     * )
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=255, nullable=false)
     * @Assert\NotBlank
     * @Assert\Regex("/[a-zA-Z]+/")
     */
    private $color;

    /**
     * @var string
     *
     * @ORM\Column(name="raza", type="string", length=255, nullable=false)
     * @Assert\NotBlank
     * @Assert\Regex(
     *      pattern="/[a-zA-Z]+/", 
     *      message="La raza debe estar formada por letras"
     * )
     */
    private $raza;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTipo(): ?string
    {
        return $this->tipo;
    }

    public function setTipo(string $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getRaza(): ?string
    {
        return $this->raza;
    }

    public function setRaza(string $raza): self
    {
        $this->raza = $raza;

        return $this;
    }
}
