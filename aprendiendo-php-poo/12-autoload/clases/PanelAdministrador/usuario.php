<?php
namespace PanelAdministrador;

class Usuario{
    public $nombre;
    public $email;

    public function __construct(){
        $this->nombre = 'Martin';
        $this->email = 'Martin@gmail.com';
    }
    function informacion(){
        //NOMBRE DE LA CLASE
        //echo __CLASS__;
        //nombre del metodo
        //echo __METHOD__;
        //muestra la ruta del archivo
        //echo __FILE__;
        echo __NAMESPACE__;
    }

}

 ?>
