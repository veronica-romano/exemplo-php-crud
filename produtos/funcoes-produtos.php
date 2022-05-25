<?php
require_once "conecta.php";

function lerProdutos(PDO $conexao){
    $sql = "SELECT id, fabricamte_id, nome, preco, quantidade, descricao  FROM produtos ORDER BY nome";

    try {
        //code...
    } catch (Exception $erro) {
       die("Erro: ".$erro->getMessage());
    }
}