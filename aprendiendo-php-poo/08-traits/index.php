<?php
//Nos permite definir una serie de metodos para compartir
//en distintas clases que no tienen una clase padre en comun
//por que son completamente distintas

//Es muy util cuando no queremos usar herencia

trait Utilidades{
    public function mostrarNombre(){
        echo '<h1>El nombre es: '.$this->nombre.'</h1>';
    }
}

class Coche{
    public $nombre;
    public $marca;

    use Utilidades; // Para acceder al trat utilidades
}

class Persona{
    public $nombre;

    use Utilidades;
}

class VideoJuego{
    public $nombre;
    public $anio;

    use Utilidades;
}

$coche = new Coche();
$coche->nombre = 'Ferrari';
$coche->mostrarNombre();

$persona = new Persona();
$persona->nombre = 'Antonio';
$persona->mostrarNombre();

$videoJuego = new VideoJuego();
$videoJuego->nombre = 'GTA 5';
$videoJuego->mostrarNombre();

//var_dump($coche);



 ?>
