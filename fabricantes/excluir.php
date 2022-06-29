<?php
require_once "../vendor/autoload.php";
use CrudPoo\Fabricante;
//obtendo o valor do parâmetro da url
    $fabricante = new Fabricante;
    $fabricante->setId($_GET['id']);
    $fabricante->excluirFabricante();
    header("location:listar.php");
  


