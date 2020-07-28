<?php
    /*
    Crear un array con el contenido de la siguiente tabla:
        Accion          Aventura            Deportes
        gta             Assasin creed       fifa
        call of duty    Crash               pes 19
        pug             Prince of persia    moto 19

    cada columna debe ir en un fichero por separado
    */

    $tabla = [
        'Accion' => [
            'GTA',
            'Call of Duty',
            'PUG',
        ],
        'Aventura' => [
            'Assasin Creed',
            'Crash',
            'Prince of persia'
        ],
        'Deportes' => [
            'FIFA 20',
            'PES 20',
            'Moto 20'
        ]
    ];

    var_dump($tabla);
    $categorias = array_keys($tabla);
    var_dump($categorias);
 ?>

 <table border="1">
        <?php require 'ejercicio5/encabezados.php'?>
        <?php require 'ejercicio5/primera.php'?>
        <?php require 'ejercicio5/segunda.php'?>
        <?php require 'ejercicio5/tercera.php'?>
</table>
