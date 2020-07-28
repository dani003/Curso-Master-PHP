<?php

    /*
    Para mostrar el valor de las cookies tengo que usar
    $_COOKIE, es una varible superglobal
    Es un array asociativo
    */

    if(isset($_COOKIE['micookie'])) {
        echo "<h1>".$_COOKIE['micookie']."</h1>";
    }else{
        echo 'no existye la cookie';
    }

    if(isset($_COOKIE['unanio'])) {
        echo "<h1>".$_COOKIE['unanio']."</h1>";
    }else{
        echo 'no existye la cookie';
    }
 ?>
 <a href="crear_cookies.php">crear micookie</a>
 <a href="borrar_cookies.php">Borrar micookie</a>
