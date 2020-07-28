<?php
    /*
    Array:
        Es una coleccion de datos a las que puedo acceder cuando y como quiera
        para acceder a esos valores podemos usar un indice numero o alfanumerico
    */

    $pelicula = 'Batman';
    $peliculas = array('Batman', 'Spiderman', 'Superman');
    $personas = [
        'nombre' => 'Daniela',
        'apellido' => 'Ramirez',
        'web' => 'DanielaRamirez.com'
    ];


    var_dump($_GET);

    var_dump($peliculas); //var dump del array completo
    var_dump($peliculas[1]); // solo del Spiderman

    $cantantes = ['tupac', 'Drake', 'Jennifer Lopez'];
    var_dump($cantantes);

    echo $peliculas[0].'<br>';
    echo $peliculas[2].'<br>';

    echo '<h1> Listado de Peliculas</h1>';
    echo '<ul>';
    for ($i=0 ; $i < count($peliculas) ; $i++){
        echo '<li>'.$peliculas[$i].'</li>';
    }
    echo '</ul>';

    echo '<h1> Listado de cantantes</h1>';
    echo '<ul>';
    foreach ($cantantes as $cantante) { //bucle para recorrer arrays
        echo '<li>'.$cantante.'</li>';
    }
    echo '</ul>';

    var_dump($personas);

    $contactos = [
        array(
            'nombre' => 'daniela',
            'email' => 'dani_15@gmail.com'
        ),
        array(
            'nombre' => 'ernesto',
            'email' => 'ernesto_15@gmail.com'
        ),
        array(
            'nombre' => 'Jose',
            'email' => 'Jose_15@gmail.com'
        )
    ];

    echo $contactos[1]['nombre'];
    var_dump($contactos);

    foreach ($contactos as $key => $contacto) { //bucle para recorrer arrays
        echo '<li>'.$contacto.'</li>';
    }
 ?>
