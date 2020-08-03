<?php

require_once '../vendor/autoload.php';
    //conexion bdd
    $conexion = new mysqli("localhost","root","","notas_master");
    $conexion->query("SET NAMES 'utf8'");

    //consultar a paginar
    $consulta = $conexion->query("SELECT * FROM notas");
    $numero_elementos = $consulta->num_rows;
    $numero_elementos_paginas=2;

    //var_dump($numero_elementos);

    $pagination = new Zebra_Pagination();
    $pagination->records($numero_elementos);

    //Numero de elementos por pagina
    $pagination->records_per_page($numero_elementos_paginas);

    //para sacar la pagina actual
    $page = $pagination->get_page();

    $empieza_aqui = (($page-1)*$numero_elementos_paginas);
    $sql = "SELECT * FROM notas Limit $empieza_aqui,$numero_elementos_paginas;";
    $notas = $conexion->query($sql);

    //echo $sql; die();
    //para mostrar las paginacion con estilo
    echo '<link rel="stylesheet" href="../vendor/stefangabos/zebra_pagination/public/css/zebra_pagination.css" type="text/css">';
    //Para mostrar esta informacion
    while($nota = $notas->fetch_object()){
        echo "<h1>{$nota->titulo}</h1>";
        echo "<h3>{$nota->descripcion}</h3></hr>";
    }

    //Para hacer lols link de las paginas
    $pagination->render();









 ?>
