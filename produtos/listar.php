<?php
require_once "../vendor/autoload.php";
use CrudPoo\Produto, Diversos\Utilitarios;

$produto = new Produto;
$listaDeProdutos = $produto->lerProdutos();

Utilitarios::teste($listaDeProdutos);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <div class="container">
        <h1>Produtos | Select </h1>
        <a href="../index.php">Home</a>
        <hr>
        <h2>Lendo e carregando todos os produtos</h2>
        <p><a href="../produtos/inserir.php">Inserir um novo produto</a></p>
        <div class="produtos">
        <?php foreach($listaDeProdutos as $produto){ 
?>
            <article>
                <hr>
                <h3 class="produto-nome">Produto: <?= $produto['produto']?></h3>
                <p class="id">ID: <?= $produto['idproduto']?></p>
                <p class="fabricante-nome">Fabricante: <?= $produto['fabricante']?></p>
                <p class="produto-preco">Preço: <?= Utilitarios::formataMoeda($produto['preco'])?></p>
                <p class="produto-quantidade">Estoque: <?= $produto['quantidade']?></p>
                <details>
                    <summary> Descrição</summary>
                    <p class="produto-descricao">Descrição: <?= $produto['descricao']?></p>
                </details>
            </article>
            <div class="acoes"> Ações: 
                <a href="atualizar.php?id=<?=$produto['idproduto']?>">Atualizar</a>
                <a href="excluir.php?id=<?=$produto['idproduto']?>" class="exclusao" onclick() >Excluir</a>
            </div>
        <?php  
    }
?>
        </div>   
    </div>

    <script src="../script-listar.js"></script>
</body>
</html>

