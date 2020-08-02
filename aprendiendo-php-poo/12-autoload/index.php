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

//use MisClases\Usuario, MisClases\Categoria, MisClases\Entrada;
use MisClases\Usuario;
use MisClases\Categoria;
use MisClases\Entrada;
//como hay dos clases llamadas igual, se usa as para renombrar esta clases
//de esta forma luego se llama por ese nombre ($usuario = new UsuarioAdmin();)
use PanelAdministrador\Usuario as UsuarioAdmin;

class Principal{
    public $usuario;
    public $categoria;
    public $entrada;

    public function __construct(){
        $this->usuario = new Usuario();
        $this->categoria = new Categoria();
        $this->entrada = new Entrada();
    }

    /**
     * Get the value of Usuario
     *
     * @return mixed
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set the value of Usuario
     *
     * @param mixed $usuario
     *
     * @return self
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get the value of Categoria
     *
     * @return mixed
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set the value of Categoria
     *
     * @param mixed $categoria
     *
     * @return self
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get the value of Entrada
     *
     * @return mixed
     */
    public function getEntrada()
    {
        return $this->entrada;
    }

    /**
     * Set the value of Entrada
     *
     * @param mixed $entrada
     *
     * @return self
     */
    public function setEntrada($entrada)
    {
        $this->entrada = $entrada;

        return $this;
    }

    function informacion(){
        //NOMBRE DE LA CLASE
        //echo __CLASS__;
        //nombre del metodo
        //echo __METHOD__;
        //muestra la ruta del archivo
        echo __FILE__;
    }
}



$principal = new Principal();
var_dump($principal->usuario);
$principal->informacion();

//para ver los metodos q tiene $principal
$metodos = get_class_methods($principal);
var_dump($metodos);

//
$busqueda = array_search('setEntrada', $metodos);
var_dump($busqueda);

$usuario = new UsuarioAdmin();
var_dump($usuario);
$usuario->informacion();

// Comprobar si existe una clases
//Con el @ no muestra los warning
$clase = @class_exists('PanelAdministrador\Usuario');

if($clase){
    echo "<h1>La clase SI existe</h1>";
}else{
    echo "<h1>La clase NO existe</h1>";



}










 ?>
