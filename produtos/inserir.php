<?php

use CrudPoo\Fabricante;
use CrudPoo\Produto;

require_once "../vendor/autoload.php";
$fabricante = new Fabricante;
$produto = new Produto;
$listaDeFabricantes = $fabricante->lerFabricantes();
if (isset($_POST['inserir'])) {
    $produto->setNome($_POST['nome']);
    $produto->setPreco($_POST['preco']);
    $produto->setQuantidade($_POST['quantidade']);
    $produto->setDescricao($_POST['descricao']);
    $produto->setFabricanteId($_POST['fabricante_id']);

    $produto->inserirProduto();

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
        <p>
        <label for="nome"> Inserir Produto</label>
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
        </form>


        </div>
    </div>
</body>
</html>

<?php

?>