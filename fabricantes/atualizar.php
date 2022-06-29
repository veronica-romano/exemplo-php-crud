<?php
use CrudPoo\Fabricante;
require_once "../vendor/autoload.php";
$fabricante = new Fabricante;
//obtendo o valor do parâmetro da url
    
   
    $fabricante->setId($_GET['id']);
    $arrFabricante = $fabricante->lerUmFabricante();
    if (isset($_POST['atualizar'])) {
        $fabricante->setNome($_POST['nome']);
        $fabricante->atualizarFabricante();
        header("location:listar.php?status=sucesso");
    }

    var_dump($arrFabricante);
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
        <input type="hidden" name="<?=$arrFabricante['nome']?>">
        <label for="nome"> Nome:</label>
        <input value="<?=$arrFabricante['nome']?>" type="text" name="nome" id="nome" placeholder="Digite o nome do Fabricante">
        </p>
        <button type="submit" name="atualizar">
            Atualizar
        </button>
        </div>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>

<?php

?>