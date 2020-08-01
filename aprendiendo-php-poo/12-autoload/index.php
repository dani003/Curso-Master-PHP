<?php

//para no tener que cargar todas las clases..
//para que se haba automaticamente
/*
require_once 'clases/usuario.php';
require_once 'clases/categoria.php';
require_once 'clases/entrada.php';
*/
require_once 'autoload.php';
/*
$usuario = new Usuario();
echo $usuario->nombre;
echo "<br />";
echo $usuario->email;
echo "<br />";
$categoria = new Categoria();
echo $categoria->nombre;
*/

//ESPACIOS DE NOMBRE Y PAQUETES

//quedamos en cargar un espacio de nombre...
//Para no demorar tanto en escribir codigo repetitivo ?

class Principal{
    public $usuario;
    public $categoria;
    public $entrada;

    public function __construct(){
        $this->usuario = new MisClases\Usuario();
        $this->categoria = new MisClases\Categoria();
        $this->entrada = new MisClases\Entrada();
    }
}

$principal = new Principal();

var_dump($principal->usuario);












 ?>
