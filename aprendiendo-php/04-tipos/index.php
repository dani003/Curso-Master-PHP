<?php
  /*
  TIPOS DE DATOS
  Entero int = 99
  Flotante / decimales (float = 3.13)
  cadena de cracteres (string) = "Hola"
  boolean (bool) = true/false
  null
  Array (Coleccion de datos)
  Objetos
  */

  $numero  = 100;
  $decimal  = 27.9;
  $texto = "Texto \n $numero";
  $verdadero = true;
  $null = null;

  echo gettype($numero).'<br>';
  echo gettype($decimal).'<br>';
  echo gettype($texto).'<br>';
  echo gettype($verdadero).'<br>';
  echo gettype($null).'<br>';
  echo $verdadero.'<br>';

  //con comillas dobles me muestra la variable sin tener que concatenar
  //con comillas doble es mas lento
  echo $texto.'<br>';


  $mi_nombre[] = "Daniela";
  $mi_nombre[] = "Daniela";

  //muestra el contenido, direccion y lñargo de mi variable
  var_dump($mi_nombre);

?>
