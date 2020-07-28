<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Formulario PHP y HTML</title>
    </head>
    <body>
        <h1>Formulario</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="nombre">Nombre: </label>
            <p><input type="text" name="nombre"/></p>

            <label for="apellido">Apellido: </label>
            <p><input type="text" name="apellido" pattern="[A-Z ]+"
                required="required" placeholder="Ingresa Apellido"
                value="Ramirez"/></p>

            <label for="boton">Boton: </label>
            <p><input type="button" name="boton" value="click"/></p>

            <label for="sexo">Sexo: </label>
            <p>
                Hombre: <input type="checkbox" name="sexo" value="hombre"/>
                Mujer: <input type="checkbox" name="sexo" value="mujer" checked="checked"/>
            </p>

            <label for="color">color: </label>
            <p><input type="color" name="color"/></p>

            <label for="fecha">fecha: </label>
            <p><input type="date" name="fecha"/></p>

            <label for="correo">correo: </label>
            <p><input type="email" name="correo"/></p>

            <label for="Archivo">Archivo: </label>
            <p><input type="file" name="Archivo" multiple="multiple"/></p>

            <label for="numero">numero: </label>
            <p><input type="Number" name="numero"/></p>

            <label for="pass">Contraseña: </label>
            <p><input type="password" name="pass"/></p>

            <label for="continente">continente: </label>
            <p>
                Sudamerica: <input type="radio" name="continente" value="Sudamericar"/>
                Asia: <input type="radio" name="continente" value="Asia"/>
                Europa: <input type="radio" name="continente" value="Europa"/>
            </p>

            <label for="web">Pagina web: </label>
            <p><input type="url" name="web"/></p>

            <p>textarea</p>
            <textarea></textarea><br/>

            <p>select</p>
            <select name="Peliculas">
                <option value="spiderman">Spiderman</option>
                <option value="superman">Superman</option>
                <option value="batman">Batman</option>
            </select><br/>

            <input type="submit" value="Enviar"/>
        </form>
    </body>
</html>
<?php
    /*

    */
 ?>
