<?php

    //Programa cion orientada a objetos

    //Definir una clase molde para crear mas objetos de tipo coche con
    //caracteristicas parecidas

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

    //crear un objeto / instanciar calse
    $coche = new Coche();
    //var_dump($coche);

    //Usar los Metodos
    //echo $coche->getVelocidad();

    $coche->setColor('Amarillo');
    echo "El color del coche es: ".$coche->getColor().'</br>';

    $coche->acelerar();
    $coche->acelerar();
    $coche->acelerar();
    $coche->acelerar();
    $coche->frenar();

    echo "La velocidad del coche es: ".$coche->getVelocidad().'</br>';

    $coche2 = new Coche();
    $coche2->setColor('Rosado');
    $coche->setModelo('Gallardo');
    $coche2->setMarca('Ford');

    echo "La marca del coche 2 es: ".$coche2->getMarca().'</br>';

    var_dump($coche);
    var_dump($coche2);





?>
