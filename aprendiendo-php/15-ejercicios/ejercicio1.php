<?php
    /*
    Array con 8 numeros.
        Recorrerlo y mostrar
        Ordernarlo y mostrar
        Mostrar longitud
        Buscar algun elemento
        Buscar por el parametro que me llegue por la url
    */

    $arreglos = [1,8,6,7,3,2];

    function mostrar($arreglos){
        $resultado = '';

        foreach ($arreglos as $arreglo) {
            $resultado = $resultado.$arreglo.'<br/>';
        }
        return $resultado;
    }

    echo '<h3>'.'Mostrar Array'.'<h3>';
    echo mostrar($arreglos);

    echo '<h3>'.'Ordenar Array'.'<h3>';
    asort($arreglos);
    echo mostrar($arreglos);

    echo '<h3>'.'Longitud Array'.'<h3>';
    echo count($arreglos);

    echo '<h3>'.'Buscar elemento en Array'.'<h3>';
    echo array_search('8' ,$arreglos).'<br>';
    $indice = array_search('8' ,$arreglos);
    echo $arreglos[$indice].'<br>';

    if (isset($_GET['numero'])){
        $busqueda = $_GET['numero'];
        $search = array_search($busqueda ,$arreglos);

         if(!empty($search)){
             echo "El numero buscado existe en el indice $search ".'<br>';
         }else{
             echo "El numero buscado no existe en el arreglo".'<br>';
         }
    }else{
        echo 'No ingreso numero'.'<br>';
    }



 ?>
