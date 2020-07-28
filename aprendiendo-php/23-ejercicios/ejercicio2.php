<?php
    /*
    1. Una funcion
    2. Validar un email
    3. recoger una variable por get y validarla
    4. Mostrar el resultado
    */

    function validarEmail($email){
        $status = 'No valido';
        if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
            $status = 'valido';
        }
        return $status;
    }

    if(isset($_GET['email'])){
        echo validarEmail($_GET['email']);
    }else{
        echo 'Pasa por get un email';
    }
 ?>
