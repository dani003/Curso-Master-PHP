<?php

require_once '../vendor/autoload.php';

$foto_original = 'mifoto.jpg';
$guardar_en = 'fotomodificada.php';

$thumb = new PHPThumb\GD($foto_original);
ob_clean();

//Redimencionar
$thumb->resize(250,250);

//Recortarc (a partir del pixel 50 en x, y asi..)
//$thumb->crop(50,50,120,120);
//Recorta a partir del centro (150) y por lo alto (100)
$thumb->cropFromCenter(150, 100);

$thumb->show();
$thumb->save($guardar_en);
 ?>
