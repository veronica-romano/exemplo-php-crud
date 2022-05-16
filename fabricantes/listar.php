<?php
/*Script de conehão ao servidor banco de dados */
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "vendas";

try{
//Criando a conexão com o MySQL (API/ Driver de conexão)
    $conexao = new PDO("mysql:host=$servidor; dbname=$banco; charset=utf8", $usuario, $senha);
// Habilita a  verificação de erros
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
} catch(Exception $erro){
    die("Erro: " .$erro->getMessage());
}

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
    //string com comando sql
    $sql = "SELECT id, nome FROM fabricantes";

    //preparação do comendo
    $consulta = $conexao->prepare($sql);

    //execução do comando
    $consulta->execute();

    //capturar os resultados
    $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

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