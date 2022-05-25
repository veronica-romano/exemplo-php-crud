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
        <h1>Produtos | Select</h1>
        <hr>
        <h2>Lendo e carregando todos os produtos</h2>
        <p><a src="/produtos/listar.php">Inserir um novo produto</a></p>
        <div class="produtos">
        <?php foreach($listaDeProdutos as $produto){    
?>
            <article>
                <hr>
                <h3 class="produto-nome">Produto: <?= $produto['nome']?></h3>
                <p class="fabricante-id">Fabricante: <?= $produto['fabricante_id']?></p>
                <p class="produto-preco">Preço: <?= $produto['preco']?></p>
                <p class="produto-quantidade">Estoque: <?= $produto['quantidade']?></p>
                <details>
                <summary> Descrição</summary>
                <p class="produto-descricao">Descrição: <?= $produto['descricao']?></p>
            </details>
            </article>
            <label for="acoes">Ações:</label>
            <select name="acoes" id="acoes">
                <option value="selecione">Selecione</option>
                <option value="atualizar"> Atualizar
                    <a href="atualizar.php?id=<?=$produto['id']?>"></a>
                </option>
                <option value="excluir"> Excluir
                    <a href="excluir.php?id=<?=$produto['id']?>" class="exclusao" onclick() ></a>
                </option>
            </select>
        <?php  
    }
?>
    </div>   






    </div>
</body>
</html>

 