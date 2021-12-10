<?php
  // First method - just stream the pdf to the browser
ob_start();
$rid = $_GET['rid'];
require_once("pdf-template/template.php");

$template = ob_get_clean();

require_once("vendor/autoload.php");

use Dompdf\Dompdf;
$dompdf = new Dompdf();
$dompdf->loadHtml($template);
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
/*SAVE THE PDF TO THE SERVER */
file_put_contents("pdfs/invoice-" . mt_rand(0,99999) . ".pdf",  $dompdf->output());
/* DISPLAY THE PDF TO USERS */

$dompdf->stream("invoice");
 ?>
