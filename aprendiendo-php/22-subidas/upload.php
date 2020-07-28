<?php

    $archivo = $_FILES['archivo'];
    $nombre = $archivo['name'];
    $tipo = $archivo['type'];
    /*
    var_dump($archivo);
    die();
    */
    if($tipo == 'image/jpg' || $tipo == 'image/jpeg' ||
    $tipo == 'image/png' || $tipo == 'image/git'){
        if(!is_dir('images')){
            mkdir('images', 0777);
        }
        move_uploaded_file($archivo['tmp_name'], 'images/'.$nombre);

        header("refresh: 5; URL=index.php");
        echo "<h1>Imagen subida correctamente</h1>";
    }else{
        header("refresh: 5; URL=index.php");
        echo '<h1>Subir archivo correcto</h1>';
    }
 ?>
