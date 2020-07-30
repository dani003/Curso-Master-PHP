<?php
require_once 'coche.php';

$coche = new Coche("Amarillo", "Renault", "Clio","150","200","5");
$coche1 = new Coche("Verde", "Sealt", "Panda","150","200","5");
$coche2 = new Coche("Azul", "Citroen", "Xara","200","200","4");
$coche3 = new Coche("Rojo", "Mercedes", "Clase A","180","200","4");

//Si el objeto es publico se puede cambiar desde cualquier parte (No es recomendable)
$coche->color = "Lila";
$coche->setMarca("Audi");

echo $coche->mostrarInformacion($coche2);

/*
var_dump($coche->getModelo());
var_dump($coche);

var_dump($coche->getColor());
var_dump($coche1);
var_dump($coche2);
var_dump($coche3);*/
