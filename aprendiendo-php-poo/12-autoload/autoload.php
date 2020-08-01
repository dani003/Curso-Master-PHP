<?php

function app_autoloader($class){
    require_once 'clases/'.$class.'.php';
}

//carga lo que indique la funcion app_autoloader
//que en este caso busca todas las clases
spl_autoload_register('app_autoloader');

 ?>
