<?php
//require the Composer autoloader
require 'vendor/autoload.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class (objeto)
$dompdf = new Dompdf();
$conteudoHtml = "<div style='text-align:center' ><h2>PHP para PDF</h2><p>Testando lib domPDF</p></div>" ;
//método loadhtml passando string
//$dompdf->loadHtml('hello world');

//método loadhtml passando variável
$dompdf->loadHtml($conteudoHtml);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF (método)
$dompdf->render();

// Output the generated PDF to Browser (método)
$dompdf->stream();



?>