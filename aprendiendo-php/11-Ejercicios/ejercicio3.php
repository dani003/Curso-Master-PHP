<?php

/*
imprima el numero multiplicado por si mismo (los cuadrados)
los primeros 40 numeros narturales
pd: utilizar bucle while
*/
    $contador = 0;
    $resultado = 0;

    while($contador <= 40){

        $resultado = $contador*$contador;
        echo "El cuadrado de $contador es: $resultado"."<br>";
        $contador++;
    }
 ?>
