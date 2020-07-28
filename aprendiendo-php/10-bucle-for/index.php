<?php
/*
    for(variable contador, condicion, incremento){
        //instrucciones
    }
*/
    $resultado = 0;

    for($i = 0; $i<=100; $i++){

        if($resultado > 500){
            echo "Supero los 500"."<br>";
            break;
        }
        $resultado = $resultado + $i;
    }

    echo "El resultado es: $resultado"."<br>";
 ?>
