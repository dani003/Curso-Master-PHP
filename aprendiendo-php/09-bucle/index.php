<?php
/*Bucle while*/

    //ejemplo1
    $numero = 0;

    while($numero <= 100){
        echo $numero;
        $numero++;

        if($numero != 100){
            echo ', ';
        }
        $numero++;
    }

    //ejemplo2

    if (isset($_GET['numero'])) {
        $numero = (int)$_GET['numero'];
    }else{
        $numero = 1;
    }
    var_dump($numero);

    //ejemplo3

    echo"<h1>Tabla de multiplicar del numero $numero</h1>";

    $contador=1;
    while($contador <= 10){
        echo "$numero * $contador = ".($numero*$contador)."<br>";
        $contador++;
    }

    //do while
    $edad = 18;
    $contador = 1;
    do {
        echo "Tienes acceso al local privado $contador"."<br>";
        $contador++;
    } while ($edad >= 18 && $contador <=10);


?>
