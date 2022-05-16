<?php
require_once "../src/conecta.php";
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
        <h1>Fabricantes | Select</h1>
        <hr>
        <h2>Lendo e carregando todos os fabricantes</h2>

        <table>
            <caption>Lista de fabricantes</caption>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                </tr>
            </thead>
            <tbody>
<?php


   /* echo "<pre>";
    var_dump($resultado);
    echo "</pre>"; */

    foreach($resultado as $fabricante){
       
?>
        <tr>
        
            <td>
                <?= $fabricante['id']?>
            </td>

            <td>
            <?= $fabricante['nome']?>
            </td>
        </tr>
        <?php
    }

?>
                  
            </tbody>
        </table>
    </div>
</body>
</html>