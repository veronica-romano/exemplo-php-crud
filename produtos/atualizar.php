<?php
require_once "../src/funcoes-produtos.php";
    $listaDeProdutos = lerProdutos($conexao);

    if (isset($_POST['atualizar'])) {
        require_once "../src/funcoes-produtos.php";
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        $preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        $quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_NUMBER_INT);
        $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS);
        $fabricante_id = filter_input(INPUT_POST, 'fabricante_id', FILTER_SANITIZE_NUMBER_INT);
        atualizarProduto($conexao, $id, $nome, $preco, $quantidade, $descricao, $fabricante_id);
        header("location:listar.php?status=sucesso");
    }
?> 


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos - Atualizar</title>
</head>
<body>
    <div class="container">
        <h1>Produtos | Update</h1>
        <hr>

        <p><a href="../produtos/listar.php">Voltar para a lista de produtos</a></p>

        <form action="" method="post">
        <p>
        <label for="nome">Produto</label>
        <input type="text" name="nome" id="nome" placeholder="Digite o nome do produto" required>
        </p>
        <p>
        <label for="preco"> Preço</label>
        <input type="number" name="preco" id="preco" max="10000" step="0.01" required>
        </p>

        <p>
        <label for="quantidade"> Quantidade</label>
        <input type="number" name="quantidade" id="quantidade" max="100" required>
        </p>

        <p>
        <label for=""> Descrição </label>
        <textarea name="descricao" id="descricao" cols="28" rows="5" required></textarea>
        </p>

        <p>
        <label for="fabricante_id">Fabricante</label>
        <select name="fabricante_id" id="fabricante_id" required>
            <option value="<?= $Produtos[':id']?>">Selecione o Fabricante</option>
            <?php 
            require_once "../src/funcoes-fabricantes.php";
            $listaDeFabricantes = lerFabricantes($conexao);
            foreach($listaDeFabricantes as $fabricante){ 
                      
            ?>
            <option value="<?= $fabricante['id']?>"> <?= $fabricante['nome']?></option>
            
            <?php  
            }
            ?>
            </select>
        </p>

        <button type="submit" name="atualizar">
            Atualizar
        </button>
        </form>


        
    </div>
</body>
</html>

<?php

?>