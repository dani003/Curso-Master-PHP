<?php

class Persona{
    private $nombre;
    private $edad;
    private $ciudad;

    public function __construct($nombre, $edad, $ciudad){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->ciudad = $ciudad;
    }
//cuando se llama a un metodo que no existem, se ejecuta la fuincion call
//y devuelve lo que este metodo haga
    public function __call($name, $argument){
        $prefix_metodo = substr($name, 0, 3);
        //return $prefix_metodo;
        //return "No existe el metodo";

        if($prefix_metodo == 'get'){
            //nombre de la propiedad a la que quiero acceder
            $nombre_metodo = substr(strtolower($name), 3);
            if(!isset($this->$nombre_metodo)){
                return 'La propiedad que estas buscando no existe';
            }
            //return $this->nombre;
            return $this->$nombre_metodo.'<br/>';
        }else{
            return 'El metodo no existe';
        }
        return $nombre_metodo;
    }
}

$persona = new Persona("daniela", 27,"Chile");

echo $persona->getNombre();
echo $persona->getEdad();
echo $persona->getCiudad();
//Esta propiedad no existe
echo $persona->getHola();

 ?>
