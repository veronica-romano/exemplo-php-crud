<?php
require_once "vendor/autoload.php";
use Dompdf\Dompdf;
use Dompdf\Options;

session_start();


//.= é um operador de concatenação e atribuição
$paragrafo = "";
foreach ($_SESSION['dados'] as $fabricante) {
    $paragrafo .= "<p>".$fabricante['nome']."</p><br>" ;
}

// sintaxe heredoc php
$data = date("d/m/Y");
$conteudo = <<<HTML
    <div style="border: solid 2px; padding: 10px; width:70%; margin: 0 auto; text-align: center">
        <h2>Resumo de fabricantes - $data</h2>
        $paragrafo
    </div>

HTML;
$options = new Options();
$options->set('defaultFont','Courier');

$dompdf = new Dompdf($options);
$dompdf->loadHtml($conteudo);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$dompdf->stream("resumo-de-fabricantes-".date("d-m-Y").".pdf");

echo $conteudo;

?>


