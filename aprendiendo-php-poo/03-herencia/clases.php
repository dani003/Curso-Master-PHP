<?php

//HERENCIA: Es la posibilidad de compartir atributos y metodos entre clases


class Persona{

    public $nombre;
    public $apellidos;
    public $altura;
    public $edad;

    public function getNombre(){
        return $this->nombre;
    }
    public function getApellidos(){
        return $this->apellidos;
    }
    public function getAltura(){
        return $this->altura;
    }
    public function getEdad(){
        return $this->edad;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function setApellidos($apellidos){
        $this->apellidos = $apellidos;
    }
    public function setAltura($altura){
        $this->altura = $altura;
    }
    public function setEdad($edad){
        $this->edad = $edad;
    }

    public function hablar(){
        return "Estoy hablando";
    }

    public function caminar(){
        return "Estoy caminando";
    }
}

//con extends esta heredando
class Informatico extends Persona{

    public $lenguajes;
    public $experienciaProgramandor;

    public function __construct(){
        $this->lenguajes = "HTML, CSS y js";
        $this->experienciaProgramandor = 10;
    }

    public function sabeLenguajes($lenguajes){
        $this->lenguajes = $lenguajes;

        return $this->lenguajes;
    }
    public function programar(){
        return "Soy Porgramador";
    }

    public function repararOrdenador(){
        return "Reparar Ordenador";
    }

    public function HacerOfimatica(){
        return "Estoy escribiendo en Word";
    }
}

class TecnicoRedes extends Informatico{
    public $auditarRedes;
    public $experienciaRedes;

    public function __construct(){
        //con esto heredo los datos del constructor de la clase padre
        parent::__construct();

        $this->auditarRedes = "experto";
        $this->experienciaRedes = 5;
    }
    public function auditoria(){
        return "Estoy auditando una red";
    }
}
