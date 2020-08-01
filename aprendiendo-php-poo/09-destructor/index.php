<?php

class usuario{
    public $nombre;
    public $email;

    public function __construct(){ //no se debe imprimir por el constructor xd
        $this->nombre = 'Daniela Ramirez';
        $this->email = 'daniela@gmail.com';
        echo 'Instancia del objeto creada <br/>';
    }

    public function __toString(){
        return "Hola, {$this->nombre}, estas registrado con {$this->email}";
    }

    public function __destruct(){
        //destruye el objeto una vez que ya no
        //se use mas. cuando ya no haya mas codigo
        echo '<br/> Instancia del objeto destruida <br/>';
    }
}

$usuario = new Usuario();
//Al intentar imprimir $usuario... se llama a la funcion toString
//de esta forma no sale el error por defecto
echo $usuario;
//echo $usuario->email;
/*
for ($i =0; $i<=200;  $i++){
    echo $i.'<br />';
}
*/


 ?>
