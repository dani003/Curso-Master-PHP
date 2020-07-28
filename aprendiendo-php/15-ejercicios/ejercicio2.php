<?php
    /*
    añadir valores a un array mientras
    que su longitud sea menor a 20
    */
    $coleccion = [];

    for ($i=0; $i<20 ;$i++){
        $coleccion[$i]= rand(0 , 100);
    }

    function mostrar($arreglos){
        $resultado = '';

        foreach ($arreglos as $arreglo) {
            $resultado = $resultado.$arreglo.'<br/>';
        }
        return $resultado;
    }

    echo mostrar($coleccion);

 ?>
