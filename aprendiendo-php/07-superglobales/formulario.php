<!DOCTYPE HTML>

<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Formulario PHP</title>
    </head>
    <body>
        <h1>Formulario en php</h1>
        <form method="POST" action="recibir.php">
            <p>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre"/>
            </p>
            <p>
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido"/>
            </p>
            <input type="submit" value="enviar"/>
        </form>
    </body>
</html>
