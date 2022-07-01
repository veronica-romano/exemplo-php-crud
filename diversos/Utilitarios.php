<?php
namespace Diversos;

abstract class Utilitarios{
    public static function formataMoeda(float $valor): string
    {
        return "R$ ".number_format($valor, 2, ',', '.') ;
    }
    public static function teste(array $dados)
    {
        echo "<pre>";
        var_dump($dados);
        echo "</pre>";
    }

  
}

?>