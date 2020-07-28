
<?php
    /*
    variables locales
        se declaran dentro de una funcion y
        no pueden ser usadas fuera de esta funcion
    variables globales
        se declaran fuera de una funcion y pueden usarse
        fuera y dentro de las funciones
    */

    $frase = "ni los genios son tan genios, ni los mediocres son tan mediocres"."<br>";

    echo $frase;

    function holaMundo(){
        global $frase;
        echo "<h1>$frase</h1>"."<br>";

        $year = 2020;
        echo $year;
    }

    holaMundo();
 ?>
