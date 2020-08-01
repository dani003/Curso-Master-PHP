<?php


//con la interfaz defino que metodos va a tener mi clase
//para cuando necesitamos ver claramente que tendra dentro nuestra clase 
interface Ordenador{
    public function encender();
    public function apagar();
    public function reiniciar();
    public function desfragmentar();
    public function detectarUSB();


}
//al poner implement... me sale el error de que debo tener implementados los metodos
//declarados en la clase padre
class iMac implements Ordenador{
    public $modelo;

    function getModelo(){
        return $this->modelo;
    }

    function setModelo($modelo){
        $this->modelo = $modelo;
    }

    public function encender(){

    }
    public function apagar(){

    }
    public function reiniciar(){

    }
    public function desfragmentar(){

    }
    public function detectarUSB(){

    }
}

$maquintos = new iMac();
$maquintos->setModelo('MacBook pro');
echo $maquintos->getModelo();
//var_dump($maquintos);






 ?>
