<?php
    /*
    crear una sesion que aumente su valor en uno o disminuya en uno
    en funcion de si el parametro get counter esta a uno o cero
    */

    session_start();
    if(!isset($_SESSION['numero'])){
        $_SESSION['counter'] = 0;
    }
    if(isset($_GET['counter']) && $_GET['counter'] == 1){
        $_SESSION['numero']++;
    }
    if(isset($_GET['counter']) && $_GET['counter'] == 0){
        $_SESSION['numero']--;
    }
 ?>
 <h1>El valor de la sesion numero es: <?= $_SESSION['numero']?></h1>
 <a href="ejercicio1.php?counter=1">Aumentar el valor</a>
 <a href="ejercicio1.php?counter=0">Disminuir el valor</a>
