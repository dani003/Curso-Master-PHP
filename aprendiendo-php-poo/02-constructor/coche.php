<?php
class Coche{
    //Atributos o propiedades (variables)

    //PUBLIC:  podemos accedes desde cualquier lugar, dentro de la Clase actual,
    //dentro de clases que hereden esta clase o fuera de la clase
    public $color;

    //PROTECTED: podemos acceder desde qla clase que los define y desde get_declared_classes
    // que hereden esta clase
    protected $marca;

    //PRIVATE: unucamente se puede acceder desde la clase que los define
    private $modelo;

    public $velocidad;
    public $caballaje;
    public $plazas;

    public function __construct($color, $marca, $modelo, $velocidad, $caballaje, $plazas){
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
        $this->caballaje = $caballaje;
        $this->plazas = $plazas;
    }

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

    public function getModelo(){
        return $this->modelo;
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

    public function mostrarInformacion(coche $MiObjeto){

        if(is_object($MiObjeto)){
            $informacion = "<h1>Informacion del Coche</h1>";
            $informacion .="<br />Color: ".$MiObjeto->color;
            $informacion .="<br />Modelo: ".$MiObjeto->modelo;
            $informacion .="<br />Velocidad: ".$MiObjeto->velocidad;
        }else{
            $informacion = "Tu dato es: $MiObjeto";
        }
        return $informacion;
    }
} //Fin definicion de clase
















 ?>
