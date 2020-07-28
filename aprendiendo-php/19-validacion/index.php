<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Validacion de Formulario</title>
    </head>
    <body>
        <h1>Validar formulario en PHP</h1>

        <?php
            if(isset($_GET['error'])){
                $error =$_GET['error'];
                if($error == 'faltan_datos'){
                    echo '<strong style="color:red">Introduce todos los datos del formulario</strong>';
                }
                if($error == 'nombre'){
                    echo '<strong style="color:red">Introduce el nombre correctamente</strong>';
                }
                if($error == 'apellido'){
                    echo '<strong style="color:red">Introduce el apellido correctamente</strong>';
                }
                if($error == 'edad'){
                    echo '<strong style="color:red">Introduce la edad correctamente</strong>';
                }
                if($error == 'email'){
                    echo '<strong style="color:red">Introduce el email correctamente</strong>';
                }
                if($error == 'password'){
                    echo '<strong style="color:red">Introduce la password correctamente</strong>';
                }
            }
         ?>
        <form action="procesar_formulario.php" method="POST">
            <label for="Nombre">Nombre: </label><br/>
            <input type="text" name="Nombre" required="required" /><br/>

            <label for="Apellidos">Apellidos: </label><br/>
            <input type="text" name="Apellidos" required="required" pattern="[A-Za-z]+"/><br/>

            <label for="Edad">Edad: </label><br/>
            <input type="number" name="Edad" pattern="[0-9]" required="required"/><br/>

            <label for="Email">Email: </label><br/>
            <input type="email" name="Email" required="required"/><br/>

            <label for="pass">contraseña: </label><br/>
            <input type="password" minlenght="5" name="pass" required="required"/><br/>

            <input type="submit" value="Enviar"><br/>
        </form>
    </body>
</html>
