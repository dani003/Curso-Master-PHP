<?php

    /*
    Cookies:
        Fichero que se almacena en el ordenador del usuario que visita la web,+
        con el fin de recordar datos o rastrear cierta informacion o comportamiento del
         mismo en la web
        Es de los metodos mas inseguros ya que estos datos los guarda
        el cliente. Estos ficheros son los que luego se le envian al navegadora
        para distintas funciones.
        son muy utiles para recordar inicios de session
        Se almacenan en pequeños ficheros en el computador del
        usuario y estos pueden ser manipuladoas
    */

    //Crear Cookies
    //setcookie('nombre', 'valor que solo puede ser texto', 'caducidad', 'ruta', 'dominio');
    setcookie("micookie", "valor de mi galleta");

    //cookie con expiracion
    setcookie("unanio", "valor de mi galleta de 1 anio", time()+(60*60*24*365));

 ?>

 <a href="ver_cookies">Ver las cookies</a>
