<?php

    /*
    */

    $cantantes = ['tupac', 'Drake', 'Jennifer Lopez', 'Albredo'];
    $numeros = [1,5,3,8,4];

    //Ordenar array por orden alfabetico
    asort($cantantes);
    var_dump($cantantes);
    asort($numeros);
    var_dump($numeros);

    $cantantes[] = 'Natos'; //se agrega al final del array
    var_dump($cantantes);

    array_push($cantantes, 'Waor'); //agrega al array
    var_dump($cantantes);

    echo 'Quita el ultimo elemento'.'<br>';
    array_pop($cantantes); //quita el ultimo elemento
    var_dump($cantantes);

    echo 'Quita uno de un puesto indicado'.'<br>';
    unset($cantantes[2]); //quita el del puesto indicado, en este caso jennifer lopez del puesto 2
    var_dump($cantantes);

    //Aleatorio
    echo 'Muestra cantante al azar'.'<br>';
    $indice = array_rand($cantantes); //indice al azar
    echo $cantantes[$indice].'<br>'; //muestra cantante al azar

    //Dar vuelta
    echo 'Dar la vuelta'.'<br>';
    var_dump(array_reverse($cantantes));
    var_dump($cantantes);

    echo 'Numeros normales'.'<br>';
    var_dump($numeros);
    echo 'Dar la vuelta Numeros'.'<br>';
    var_dump(array_reverse($numeros));

    //buscar
    echo 'Buscar en que puesto esta'.'<br>';
    $resultado = array_search('Drake', $cantantes);
    var_dump($resultado);

    //contar numero de elementos
    echo 'Numero de elementos en cantantes (count)'.'<br>';
    echo count($cantantes).'<br>';
    echo 'Numero de elementos en cantantes (sizeof)'.'<br>';
    echo sizeof($cantantes).'<br>';

 ?>
