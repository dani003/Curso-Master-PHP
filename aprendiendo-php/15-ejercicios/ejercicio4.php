<?php
    /*
    Crear un scrip que tenga 4 variables (array, string, int y bool)
    y que imprima un mensaje dependiendo del tipo de variable q sea
    */

    $array =['hola', 'mundo'];
    $string = 'hola mundo';
    $int = 15;
    $bool = true;

    $tipo= gettype($string);
    echo $tipo.'<br>';

    if ($tipo == "array"){
        foreach ($array as $arr) {
            echo $arr;
        }
    }elseif($tipo == "string"){
        echo $string;
    }elseif($tipo == "int"){
        echo $int;
    }elseif($tipo == 'boolean'){
        echo $bool;
    }
 ?>
