<?php

use Masterminds\HTML5;

require_once "vendor/autoload.php";
session_start();
foreach ($_SESSION['dados'] as $fabricante) {
    echo $fabricante['nome']."<br>";
}
// sintaxe heredoc php
$data = date("d/m/Y");
$conteudo = <<<HTML
    <div style="border: solid 2px; padding: 10px; width:70%; margin: 0 auto; text-align: center">
        <h2>Resumo de fabricantes - $data</h2>
    </div>

HTML;

echo $conteudo;
?>


