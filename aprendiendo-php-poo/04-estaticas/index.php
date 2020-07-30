<?php

require_once 'configuracion.php';

Configuracion::setColor('blue');
Configuracion::setEntorno('localhost');
Configuracion::setNewsletter(true);

echo Configuracion::$color . '<br/>';
echo Configuracion::$entorno . '<br/>';
echo Configuracion::$newsletter . '<br/>';

$configuracion = new Configuracion();
$configuracion::$color = 'rojo';
echo Configuracion::$color . '<br/>';

var_dump($configuracion);
