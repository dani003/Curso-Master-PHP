<?php
    /*
    Funciones:
        Conjunto de instrucciones agrupadas bajo un nombre en
        un nombre concreto que pueden reutilizarse solamente invocandolas

    function nombre_de_de_funcion($parametro){
        //instrucciones
    }

    nombre_de_de_funcion($mi_parametro)
    */

    //ejemplo1

    function muestranombres(){
        echo "Daniela"."<br>";
        echo "martin"."<br>";
        echo "johnny"."<br>";
        echo "Chris"."<br>";
    }

    muestranombres();
    muestranombres();

    //ejemplo2

    function tabla($numero){

        echo "Tabla de multiplicar del numero $numero"."<br>";
        for($i =0; $i <= 10; $i++){
            $operacion = $numero * $i;
            echo "$numero x $i = ".($operacion)."<br>";
        }
    }
    $envio=5;
    tabla($envio);

    //ejemplo 3

    function calculadora($numero1, $numero2){
        echo "La suma es ".($numero1+$numero2)."<br>";
        echo "La multiplicacion es ".($numero1*$numero2)."<br>";
        echo "La resta es ".($numero1-$numero2)."<br>";
        echo "La division es ".($numero1/$numero2)."<br>";
        echo "<hr>";
    }

    calculadora('5', '6');
    calculadora('15', '2');
    calculadora('8', '22');

    //ejemplo4

    function getapellido($apellido){
        $texto = "Los apellidos son: $apellido";
        return $texto;
    }

    function devuelvenombre($nombre, $apellido){
        $texto = "El nombre es: $nombre"
            ."<br>".
            getapellido($apellido);
        return $texto;
    }

    $nombre = 'Daniela';
    $apellido = 'ramirez';
    echo devuelvenombre($nombre, $apellido);











 ?>
