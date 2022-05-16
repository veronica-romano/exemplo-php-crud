<?php

require_once "../src/conecta.php";



// carregar os dados dos fabricantes

function lerFabricantes($conexao){

        //string com comando sql
        $sql = "SELECT id, nome FROM fabricantes";

        //preparação do comendo
        $consulta = $conexao->prepare($sql);
    
        //execução do comando
        $consulta->execute();
    
        //capturar os resultados
        $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
 ?>



 <?php
}