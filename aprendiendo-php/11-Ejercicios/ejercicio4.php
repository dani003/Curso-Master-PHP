<?php
    /*
    recoger 2 num,ero por la url con GET.
    Hacer calculadora basica
    */

    if(isset($_GET['numero1']) && isset($_GET['numero2'])){

        $numero1 = $_GET['numero1'];
        $numero2 = $_GET['numero2'];

        echo "La suma es ".($numero1+$numero2)."<br>";
        echo "La multiplicacion es ".($numero1*$numero2)."<br>";
        echo "La resta es ".($numero1-$numero2)."<br>";
        echo "La division es ".($numero1/$numero2)."<br>";
    }else{
        echo "FAVOR INGRESAR CORRECTAMENTE"."<br>";
    }
?>
