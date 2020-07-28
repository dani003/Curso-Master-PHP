<?php
    /*
    Sesion:
        Periodo de tiempo durante el cual un usuario
        esta en una pagina. En la sesion se almacena y persisten datos del usuario
        hasta que cierra sesion o se cierra el navegador.
        Pueden almacenar mucha informacion. los datos se almacenan
        en el servidor web, por lo que estos datos estan seguros.
        una desventaja es que cuando se cierra, ya no se pueden usar esos datos
    */

    session_start();
    $variable_normal = "soy una cadena de texto";

    $_SESSION['variable_persistente'] = "Hola, soy una sesion activa";

    echo $variable_normal.'<br/>';
    echo $_SESSION['variable_persistente'];
 ?>
