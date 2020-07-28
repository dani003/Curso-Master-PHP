<?php
//INICIAR SESSION Y LA CONEXION A LA BASE DE DATOS
require_once 'includes/conexion.php';

//RECOGER LOS DATOS DEL FORMULARIO

if(isset($_POST)){

    //Borrar error antiguo
    if(isset($_SESSION['error_login'])){
        session_unset($_SESSION['error_login']);
    }
    //Recoger datos del formulario
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    //CONSULTA PARA COMPROBAR LAS CREDENCIALES DEL USUARIO
    $sql = "SELECT * FROM usuarios WHERE email = '$email';";
    $login = mysqli_query($db, $sql);

    if($login && mysqli_num_rows($login) == 1){
        $usuario = mysqli_fetch_assoc($login);
        //COMPROBAR LA CONTRASEÑA / cifrar
        $verify = password_verify($password, $usuario['password']);
        if($verify){
            //utilizar una session para guardar los datos del usuario
            $_SESSION['usuario'] = $usuario;

        }else{
            //mensaje error
            $_SESSION['error_login'] = 'Login incorrecto';
        }
    }else{
        //mensaje error
        $_SESSION['error_login'] = 'Login incorrecto';
    }
}

//redirigir al index.php
header('Location: index.php');


 ?>
