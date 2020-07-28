<?php
    /*
    Comprobar si una variable esta en vacio, y si esta vacio
    llenarla con texto en minuscula , pero mostrarla en mayuscula
    y en negrita
    */

    $texto = "";

    if (!empty($texto)){
        echo 'La variable no esta vacia'.'<br>';
    }else{
        echo 'La variable esta vacia'.'<br>';
        $texto = 'llenando la variable con minusculas';
        echo $texto.'<br/>';
        echo strtolower($texto).'<br/>';
        echo strtoupper($texto).'<br/>';
    }
 ?>
