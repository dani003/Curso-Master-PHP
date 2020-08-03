<?php

require "../vendor/autoload.php";

use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf();

/*
$html = "<h1 style='background:red'>Hola mundo desde libreria php para hacer pdfs</h1>";
$html .="<p>Master en Php</p>";
*/
//Recoger la vista a imrpimir
//todo lo que este entre ob_start y ob_get_clean.. se puede guardar dentro de una variable
ob_start();
require_once 'pdf_para_generar.php';
$html = ob_get_clean();

$html2pdf->writeHTML($html);
$html2pdf->output('pdf_generado.pdf');
 ?>
