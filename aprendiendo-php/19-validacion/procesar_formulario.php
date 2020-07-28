<?php
    $error=true;
    if(!empty($_POST['Nombre']) && !empty($_POST['Apellidos']) &&
    !empty($_POST['Edad']) && !empty($_POST['Email']) && !empty($_POST['pass'])){
        $error = "ok";

        $nombre = $_POST['Nombre'];
        $apellido = $_POST['Apellidos'];
        $edad = (int)$_POST['Edad'];
        $email = $_POST['Email'];
        $pass = $_POST['pass'];

        //validar el nombre
        if(!is_string($nombre) || preg_match("/[0-9]+/", $nombre)){
            $error = 'nombre';
        }
        if(!is_string($apellido) || preg_match("/[0-9]+/", $apellido)){
            $error = 'apellido';
        }
        if(!is_int($edad) || !filter_var($edad, FILTER_VALIDATE_INT)){
            $error = 'edad';
        }
        if(!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
            $error = 'email';
        }
        if(!is_string($pass) || strlen($pass) < 5){
            $error = 'password';
        }
        /*
        var_dump($_POST);
        var_dump($error);
        die();
        */
    }else{
        $error = 'faltan_datos';
    }
    if ($error != 'ok'){
        header("Location:index.php?error=?".$error);
    }
 ?>
 <!DOCTYPE html>
<html>
    <head>
        <title>FORMULARIO</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php if($error == 'ok'):?>
            <h1>Datos Validados Correctamente</h1>
            <p><?=$nombre?></p>
            <p><?=$apellido?></p>
            <p><?=$edad?></p>
            <p><?=$email?></p>
        <?php endif; ?>
    </body>
</html>
