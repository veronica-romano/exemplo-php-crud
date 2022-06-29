<?php

namespace CrudPoo;
use PDO, Exception;

final class Produto{
    private int $id;
    private string $nome;
    private float $preco;
    private int $quantidade;
    private string $descricao;
    private int $fabricanteId;
    private PDO $conexao;

    public function __construct()
    {
        $this->conexao = Banco::conecta();
    }

    public function lerProdutos():array{
        $sql = "SELECT produtos.id AS idproduto, produtos.nome AS produto, produtos.preco, produtos.quantidade, produtos.descricao, fabricantes.id, fabricantes.nome AS fabricante FROM produtos INNER JOIN fabricantes ON produtos.fabricante_id = fabricantes.id ORDER BY produto";
    
        try {
            setlocale(LC_ALL, 'pt_BR');
            $consulta = $this->conexao->prepare($sql);
            $consulta->execute();
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $erro) {
           die("Erro: ".$erro->getMessage());
        }
        return $resultado;
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
        $this->nome = $nome;

        return $this;
    }

    public function getPreco(): float
    {
        return $this->preco;
    }
    public function setPreco(float $preco): self
    {
        $this->preco = $preco;

        return $this;
    }


    public function getQuantidade(): int
    {
        return $this->quantidade;
    }
    public function setQuantidade(int $quantidade): self
    {
        $this->quantidade = $quantidade;

        return $this;
    }


    public function getDescricao(): string
    {
        return $this->descricao;
    }
    public function setDescricao(string $descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

 
    public function getFabricanteId(): int
    {
        return $this->fabricanteId;
    }
    public function setFabricanteId(int $fabricanteId): self
    {
        $this->fabricanteId = $fabricanteId;

        return $this;
    }
}


?>