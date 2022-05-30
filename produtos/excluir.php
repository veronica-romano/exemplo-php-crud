<?php
require_once "../src/funcoes-produtos.php";
//obtendo o valor do parâmetro da url
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    excluirProduto($conexao, $id);
    header("location:listar.php");
  


