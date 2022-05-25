<?php
require_once "../src/funcoes-fabricantes.php";
$listaDeFabricantes = lerFabricantes($conexao);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fabricantes</title>
</head>
<body>
    <div class="container">
        <h1>Fabricantes | Select </h1>
        <a href="../index.php">Home</a>
        <hr>
        <h2>Lendo e carregando todos os fabricantes</h2>
        <p><a href="../fabricantes/inserir.php">Inserir um novo fabricante</a></p>
        <?php
           /* if (isset($_GET['status'])) {
                ?>
              <p> <?= $_GET['status'] ?> ao atualizar fabricante!</p>
              <?php
            } */
            if (isset($_GET['status']) && $_GET['status'] == 'sucesso') {
                ?>
              <p> <?= $_GET['status'] ?> ao atualizar fabricante!</p>
              <?php
            }
        ?>
        <table>
            <caption>Lista de fabricantes</caption>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th colspan="2">Operações</th>
                </tr>
            </thead>
            <tbody>
<?php
   /* echo "<pre>";
    var_dump($resultado);
    echo "</pre>"; */
    foreach($listaDeFabricantes as $fabricante){    
?>
        <tr>  
            <td class="fabricantes id">
                <?= $fabricante['id']?>
            </td>
            <td class="fabricantes nome">
            <?= $fabricante['nome']?>
            </td>
            <td><a href="atualizar.php?id=<?=$fabricante['id']?>">Atualizar</a></td>
            <td><a href="excluir.php?id=<?=$fabricante['id']?>" class="exclusao" onclick() >Excluir</a></td>
        </tr>
        <?php
    }
?>    
            </tbody>
        </table>
    </div>
    <script src="script-listar.js"></script>
</body>
</html>