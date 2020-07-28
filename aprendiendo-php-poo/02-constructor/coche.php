<?php
class Coche{
    //Atributos o propiedades (variables)
    public $color = 'rojo';
    public $marca = 'ferrari';
    public $modelo =  "Aventador";
    public $velocidad = 300;
    public $caballaje = 500;
    public $plazas = 2;

    //Metodos, antes serian funciones
    public function getColor(){
        return $this->color;
    }

    public function getMarca(){
        return $this->marca;
    }

    public function setColor($color){
        $this->color = $color;
    }

    public function setMarca($marca){
        $this->marca = $marca;
    }

    public function setModelo($modelo){
        $this->modelo = $modelo;
    }

    public function acelerar(){
        $this->velocidad++;
    }

    public function frenar(){
        $this->velocidad--;
    }

    public function getVelocidad(){
        return $this->velocidad;
    }
} //Fin definicion de clase
 ?>
