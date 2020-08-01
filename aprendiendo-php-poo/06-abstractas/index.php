<?php

//las clases abstractas se definen si o si en la clase hija, por esto
//se declaran en las clases padres

abstract class Ordenador{
    public $encendido; //una propiedad nop puede ser abstracta

    abstract public function encender();

    public function apagar(){
        $this->encendido = false;
    }
}

class PcAsus extends Ordenador{
    public $softwawe;

    public function arrancarSoftware(){
        $this->softwawe = true;
    }

    public function encender(){
        $this->encendido = true;
    }
}

$ordenador = new PcAsus();
$ordenador->arrancarSoftware();
$ordenador->encender();
$ordenador->apagar();
var_dump($ordenador);


 ?>
