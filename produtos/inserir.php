<?php
require_once "../src/funcoes-fabricantes.php";
$listaDeFabricantes = lerFabricantes($conexao);
if (isset($_POST['inserir'])) {
    require_once "../src/funcoes-produtos.php";
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_NUMBER_FLOAT);
    $quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_NUMBER_INT);
    $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS);
    $fabricanteId = filter_input(INPUT_POST, 'fabricante_id', FILTER_SANITIZE_NUMBER_INT);
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos - Inserir</title>
</head>
<body>
    <div class="container">
        <h1>Produtos | Inserir</h1>
        <hr>
        <p><a href="../produtos/listar.php">Voltar para a lista de produtos</a></p>
        <p>
        <label for="nome"> Inserir Produto</label>
        <input type="text" name="nome" id="nome" placeholder="Digite o nome do produto" required>
        </p>
        <p>
        <label for="preco"> Preço</label>
        <input type="number" name="preco" id="preço" max="10000" step="0.01" required>
        </p>

        <p>
        <label for="quantidade"> Quantidade</label>
        <input type="number" name="preco" id="preço" max="100" required>
        </p>

        <p>
        <label for=""> Descrição </label>
        <textarea name="descricao" id="descricao" cols="28" rows="5" required></textarea>
        </p>

        <p>
        <label for="fabricante">Fabricante</label>
        <select name="fabricante" id="fabricante" required>
            <option value="">Selecione o Fabricante</option>
            <?php 
            foreach($listaDeFabricantes as $fabricante){ 
                      
            ?>
            <option value="<?= $fabricante['id']?>"> <?= $fabricante['nome']?></option>
            
            <?php  
            }
            ?>
            </select>
        </p>
        <button type="submit" name="inserir">
            Inserir
        </button>
        </div>
    </div>
</body>
</html>

<?php

?>