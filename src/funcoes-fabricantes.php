<?php

require_once "../src/conecta.php";
// carregar os dados dos fabricantes

function lerFabricantes(PDO $conexao):array{

        //string com comando sql
        $sql = "SELECT id, nome FROM fabricantes";

    try{
            //preparação do comendo
            $consulta = $conexao->prepare($sql);
    
            //execução do comando
            $consulta->execute();
        
            //capturar os resultados
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
            
    } catch (Exception $erro){
        die("Erro: ".$erro->getMessage());
    }
    return $resultado;
}

function inserirFabricante(PDO $conexao, string $nome){
    $sql = "INSERT INTO fabricantes(nome) VALUES ('$nome')";
    try {
        
    } catch (Exception $erro) {
        die("Erro: ".$erro->getMessage());
    }
}