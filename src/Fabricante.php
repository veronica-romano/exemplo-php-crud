<?php

namespace CrudPoo;
use PDO, Exception;

class Fabricante{

    private int $id;
    private string $nome;
    private PDO $conexao;

    public function __construct()
    {
        $this->conexao = Banco::conecta();
    }

    public function lerFabricantes():array{
        //string com comando sql
        $sql = "SELECT id, nome FROM fabricantes";
    try{
            //preparação do comando
            $consulta = $this->conexao->prepare($sql);
            //execução do comando
            $consulta->execute();   
            //capturar os resultados
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);       
    } catch (Exception $erro){
        die("Erro: ".$erro->getMessage());
    }
    return $resultado;
    } 
    
    public function inserirFabricante():void{ //:void para a função não retornar
        $sql = "INSERT INTO fabricantes(nome) VALUES (:nome)";
        try {
            $consulta = $this->conexao->prepare($sql);
            /*bindParam(':nomedoparametro', $variavelcomvalor, constantedeverificacao) */
            $consulta->bindParam(':nome', $this->nome, PDO::PARAM_STR);
            $consulta->execute();
        } catch (Exception $erro) {
            die("Erro: ".$erro->getMessage());
        }
    }

 
    public function getId(): int
    {
        return $this->id;
    }
    public function setId(int $id)
    {
        $this->id = $id;

        return $this;
    }

    public function getNome(): string
    {
        return $this->nome;
    }
    public function setNome(string $nome)
    {
        $this->nome = filter_var($nome, FILTER_SANITIZE_SPECIAL_CHARS);

        return $this;
    }
}




?>