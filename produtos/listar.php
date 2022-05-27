<?php
require_once "../src/funcoes-produtos.php";
$listaDeProdutos = lerProdutos($conexao);
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
          setlocale(LC_ALL, 'pt_BR');     
?>
            <article>
                <hr>
                <h3 class="produto-nome">Produto: <?= $produto['produto']?></h3>
                <p class="id">ID: <?= $produto['id']?></p>
                <p class="fabricante-nome">Fabricante: <?= $produto['fabricante']?></p>
                <p class="produto-preco">Preço: R$: <?= number_format($produto['preco'], 2, ',', '.',)?></p>
                <p class="produto-quantidade">Estoque: <?= $produto['quantidade']?></p>
                <details>
                    <summary> Descrição</summary>
                    <p class="produto-descricao">Descrição: <?= $produto['descricao']?></p>
                </details>
            </article>
            <div class="acoes"> Ações: 
                <a href="atualizar.php?id=<?=$produto['id']?>">Atualizar</a>
                <a href="excluir.php?id=<?=$produto['id']?>" class="exclusao" onclick() >Excluir</a>
            </div>
        <?php  
    }
?>
        </div>   
    </div>
</body>
</html>
