<?php
    /*
    muestre los numero entre dos numero que nos den por la url
     */


     $contador = 0;

     if(isset($_GET['numero1']) && isset($_GET['numero2'])){
         $numero1 = $_GET['numero1'];
         $numero2 = $_GET['numero2'];

         $contador = $numero1 +1 ;
         while ($contador >= $numero1 && $contador < $numero2){
             echo $contador."<br>";
             $contador++;
         }
     }else{
         echo "FAVOR INGRESAR CORRECTAMENTE"."<br>";
     }


 ?>
