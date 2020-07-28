<?php

    define('nombre', 'daniela ramirez');
    define('web', 'daniela ramirez');

    echo '<h1>'.nombre.'</h1>';
    echo '<h1>'.web.'</h1>';

    $web = 'danielaramirez.es/academy';
    echo '<h1>'.$web.'<h1>';
    //miestra el sistema operativo
    echo PHP_OS.'<br>';
    echo PHP_EXTENSION_DIR.'<br>';
    echo __file__.'<br>';

    function holamundo() {
        echo __FUNCTION__;
    }
    holamundo();


    ?>
