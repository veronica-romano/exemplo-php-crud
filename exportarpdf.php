<?php

use Diversos\Utilitarios;

require_once "vendor/autoload.php";

session_start();

Utilitarios::teste($_SESSION['dados']);

?>