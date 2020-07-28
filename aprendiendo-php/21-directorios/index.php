<?php

    //crear carpeta
    //mkdir('mi_carpeta', 0777) or die ('No se puede crear la carpeta');
    if(!is_dir('mi_carpeta')){
        mkdir('mi_carpeta', 0777) or die ('No se puede crear la carpeta');
    }else{
        echo 'Ya existe la carpeta';
    }

    //rmdir('mi_carpeta');
    echo '<hr><h1> contenido carpeta </h1>';
    if($gestor = opendir('./mi_carpeta')){

        while(false !== ($archivo = readdir($gestor))){
            if ($archivo != '.' && $archivo != '..'){
                echo $archivo.'<br/>';
            }
        }
    }
 ?>
