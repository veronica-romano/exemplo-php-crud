<?php
require_once "../vendor/autoload.php";
use CrudPoo\Fabricante;

require_once "../src/funcoes-fabricantes.php";
//obtendo o valor do parâmetro da url
    $fabricante = new Fabricante;
    $fabricante->setId(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT));
    $delFabricante = $fabricante->excluirFabricante();
    header("location:listar.php");
  


