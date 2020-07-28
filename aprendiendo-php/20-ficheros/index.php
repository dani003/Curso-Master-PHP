<?php
/*
    //Abrir archivo
    $archivo = fopen("fichero_texto.txt", "a+");

    //leer archivo
    while(!feof($archivo)){
        $contenido = fgets($archivo);
        echo $contenido.'<br />';
    }

    //Escribir
    fwrite($archivo, "****soy un archivo****");
    //cerrar archivo
    fclose($archivo);
    */
    //copiar
    //copy('fichero_texto.txt', 'fichero_copiado.txt') or die('Error copiar');

    //renombrar
    //rename('fichero_copiado.txt', 'archivito_recopiadito.txt');

    //eliminar
    //unlink('archivito_recopiadito.txt') or die('Error al borrar');

    //comprobar si existe

    if(file_exists("fichero_texto.txt")){
        echo 'El archivo existe !!';
    }else{
        echo 'El NO archivo existe';
    }

    
 ?>
