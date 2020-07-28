<?php

    //debuggear
    $nombre = 'Daniela';
    var_dump($nombre);

    echo date('d-M-y').'<br>';
    echo time().'<br>';

    //Matematicas
    echo "Raiz cuadrada de 10:  ".sqrt(25).'<br>';
    echo "Numero aleatorio ewntre 10 y 40:  ".rand(10,40).'<br>';
    echo "Numero pi: ".pi().'<br>';
    echo "Redondeo: ".round(7.657542, 1).'<br>';

    //Mas funciones generales

    echo gettype($nombre).'<br>';

    //comprobar tipo
    if (is_string($nombre)){
        echo "Esa variable es un string".'<br>';
    }else{
        echo "Esa variable nmo es string".'<br>';
    }

    //conprobar si existe
    if (isset($edad)){
        echo "Si existe".'<br>';
    }else{
        echo "No existe esa variable".'<br>';
    }

    //limpiar espacios
    $frase = "    Mi contenido     ".'<br>';
    var_dump(trim($frase));

    //eliminar variables  / indices

    $anio = 2020;

    //Elimina variable
    unset($anio);
    var_dump($anio);

    //comprobar variable vacia

    $text = "";
    if(empty($text)){
        echo "la varibale esta vacia".'<br>';
    }else{
        echo "la varibale NO esta vacia".'<br>';
    }

    //contar caracteres de un is_string
    $cadena = '123456';

    echo strlen($cadena).'<br>';

    //encontrar caracteres
    $frase = "La vida es bella";

    echo strpos($frase, 'ida').'<br>';

    //reemplazar palabras
    echo str_replace("vida", "moto", $frase).'<br>';

    //Mayuscula y minuscula
    echo strtolower($frase).'<br>';
    echo strtoupper($frase).'<br>';















 ?>
