<?php
require_once "../src/funcoes-fabricantes.php";
//obtendo o valor do parâmetro da url
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    $fabricante = lerUmFabricante($conexao, $id);

?> 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fabricantes - Atualizar</title>
</head>
<body>
    <div class="container">
        <h1>Fabricantes | SELECT/UPDATE</h1>
        <hr>
        <p><a href="../fabricantes/listar.php">Voltar para a lista de fabricantes</a></p>
        <form action="" method="post">
        <div class="little-form-container">
        <p>
        <input type="hidden" name="<?=$fabricante['nome']?>">
        <label for="nome"> Nome:</label>
        <input value="<?=$fabricante['nome']?>" type="text" name="nome" id="nome" placeholder="Digite o nome do Fabricante">
        </p>
        <button type="submit" name="atualizar">
            Atualizar
        </button>
        </div>
        </form>
    </div>
</body>
</html>

<?php

?>