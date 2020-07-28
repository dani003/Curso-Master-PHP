<?php

    /*
    Hacer una interfaz de usuario con 4 botones
    uno para sumar, restar, dividir y multiplicar. Mostrar
    el resultado por pantalla
    */
    $resultado = false;

    if(isset($_POST['numero1']) && isset($_POST['numero2'])){

        if(isset($_POST['sumar'])){
            $resultado = "El resultadio es:".($_POST['numero1'] + $_POST['numero2']);
        }
        if(isset($_POST['restar'])){
            $resultado = "El resultadio es:".($_POST['numero1'] - $_POST['numero2']);
        }
        if(isset($_POST['multiplicar'])){
            $resultado = "El resultadio es:".($_POST['numero1'] * $_POST['numero2']);
        }
        if(isset($_POST['dividir'])){
            $resultado = "El resultadio es:".($_POST['numero1'] / $_POST['numero2']);
        }
    }
 ?>

 <!DOCTYPE html>
 <html lang="es">
     <head>
         <meta charset="utf-8">
         <title>Calculadora</title>
     </head>
     <body>
         <h1>Calculadora php</h1>
         <form action="" method="POST">
             <label for="numero1"> Numero1: </label><br/>
             <input type="number" name="numero1" ><br/>

             <label for="numero2"> Numero2: </label><br/>
             <input type="number" name="numero2" ><br/>

             <input type="submit" name="sumar" value="sumar">
             <input type="submit" name="restar" value="restar">
             <input type="submit" name="multiplicar" value="multiplicar">
             <input type="submit" name="dividir" value="dividir">
         </form>
         <?php
             if($resultado != false){
                 echo "<h2>".$resultado."</h2>";
             }
          ?>
     </body>
 </html>
