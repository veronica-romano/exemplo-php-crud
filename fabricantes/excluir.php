<?php
require_once "../src/funcoes-fabricantes.php";
//obtendo o valor do parâmetro da url
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    $fabricante = lerUmFabricante($conexao, $id);
    if (isset($_POST['excluir'])) {
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        atualizarFabricante($conexao, $id, $nome);
        header("location:listar.php?status=sucesso");
    }


