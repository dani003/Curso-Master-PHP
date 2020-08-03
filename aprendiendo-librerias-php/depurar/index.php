<?php
//para cargar todos los objetos de la libreria
require_once '../vendor/autoload.php';

$frutas = array('manzanas', 'naranjas', 'sandias');

\FB::log($frutas);

$nombres = array("ejecutivo"=>"Juan", "empleado"=>"martin");
\FB::log($nombres);

echo "Hola mundo".$nombres['ejecutivo'];

\FB::log("Muestrame esto en consola");
 ?>
