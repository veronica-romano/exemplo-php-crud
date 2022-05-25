<?php
require_once "conecta.php";

function lerProdutos(PDO $conexao):array{
    $sql = "SELECT produtos.id, produtos.nome AS produto, produtos.preco, produtos.quantidade, produtos.descricao, fabricantes.id, fabricantes.nome AS fabricante FROM produtos INNER JOIN fabricantes ON produtos.fabricante_id = fabricantes.id";

    try {
        setlocale(LC_ALL, 'pt_BR');
        $consulta = $conexao->prepare($sql);
        $consulta->execute();
        $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $erro) {
       die("Erro: ".$erro->getMessage());
    }
    return $resultado;
}




function dump($dados){
    echo "<pre>";
    var_dump($dados);
    echo "<pre>";
}


