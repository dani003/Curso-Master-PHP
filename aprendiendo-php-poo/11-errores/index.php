<?php

//excepcion para errores
//capturar excepciones en codigo sceptible a errores
try{
    if(isset($_GET['id'])){
        echo "<h1>El parametro es {$_GET['id']}</h1>";
    }else{
        throw new Exception('Faltan parametro por la url');
    }

}catch(Exception $e){
    echo "<br /> Ha habido un error <br />".$e->getMessage()."<br />";

}finally{
    echo "Todo Correcto";
}


 ?>
