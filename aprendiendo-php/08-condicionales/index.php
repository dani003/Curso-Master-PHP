<?php

//Condicionales
/*
    if(condicion) {
        instrucciones;
     }else{
        otras instrucciones;
     }

//Operadores de comparacion
    == igual
    === identico
    != diferente
    <> diferente
    !== no identico
    < menor que
    > mayor que
    <= menor o igual
    >= mayor o igual

//Operadores logicos

    && and
    || or
    ! not no

*/

    $color = 'verde';

    if($color == 'rojo'){
        echo "El color es rojo".'<br>';
    }else{
        echo "El color NO es rojo".'<br>';
    }

    $anio = 2020;

    if($anio == 2020){
        echo "Estamos en el 2020".'<br>';
    }else{
        echo "NO Estamos en el 2020".'<br>';
    }

    //Ejemplo 3

    $dia = 3;

    if ($dia == 1){
        echo 'Es lunes'.'<br>';
    }else{
        if($dia == 2){
            echo 'Es lunes'.'<br>';
        }else{
            if($dia == 3){
                echo 'Es miercoles'.'<br>';
            }
        }
    }

    $dia2 = 3;

    if ($dia2 == 1){
        echo 'Es lunes'.'<br>';
    }elseif($dia2 == 2){
        echo 'Es martes'.'<br>';
    }elseif($dia2 == 3){
        echo 'Es miercoles'.'<br>';
    }

    //switch
    $dia3 = 4;
    switch ($dia3) {
        case '1':
            echo 'Es lunes'.'<br>';
            break;
        case '2':
            echo 'Es martes'.'<br>';
            break;
        case '3':
            echo 'Es miercoles'.'<br>';
            break;
        default:
            echo 'no es ninguno'.'<br>';
            break;
    }

    //goto

    goto marca;
    echo "<h3> Instruccion 1 </h3>".'<br>';
    echo "<h3> Instruccion 2 </h3>".'<br>';
    echo "<h3> Instruccion 3 </h3>".'<br>';
    echo "<h3> Instruccion 4 </h3>".'<br>';
    echo "<h3> Instruccion 5 </h3>".'<br>';

    marca:
    echo "Me he saltado 4 echos".'<br>'


?>
