<?php
/*Script de conehão ao servidor banco de dados */
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "vendas";

//Criando a conexão com o MySQL (API/ Driver de conexão)

$conexão = new PDO("mysql:host=$servidor; dbname=$banco; charset=utf8", $usuario, $senha);

// Habilita a  verificação de erros
$conexao->setAttribute(PDO::ATTR_ERRMODE, // constante de erros em geral 
PDO::ERRMODE_EXCEPTION) // constande de exceção de erros
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

            </tbody>
        </table>
    </div>
</body>
</html>