<?php
require_once "conecta.php";

function lerProdutos(PDO $conexao){
    $sql = "SELECT id, fabricamte_id, nome, preco, quantidade, descricao  FROM produtos";
}