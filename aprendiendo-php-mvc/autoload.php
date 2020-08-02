<?php

function autocargar($classname){
    include 'controllers/' . $classname . '.php';
}

spl_autoload_register('autocargar');
 ?>
