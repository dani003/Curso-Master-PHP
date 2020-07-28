<?php
    if ($_COOKIE['micookie']){
        // con esto no se elimina por que se guarda en el equipo
        //para borrarla hay que caducarla
        unset($_COOKIE['micookie']);

        setcookie('micookie', '', time()-100);
    }

    header('Location:ver_cookies.php');
 ?>
