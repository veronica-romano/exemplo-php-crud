<?php
    if(isset($_POST['inserir'])){
        require_once "../src/funcoes-produtos.php";
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        inserirProduto($conexao, $nome);
        header("location:listar.php");
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
        <form action="" method="post">
        <div class="little-form-container">
        <p>
        <label for="nome"> Inserir Produto</label>
        <input type="text" name="nome" id="nome" placeholder="Digite o nome do Fabricante">
        </p>
        <button type="submit" name="inserir">
            Inserir
        </button>
        </div>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>

<?php

?>