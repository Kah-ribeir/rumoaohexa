<?php

require_once "DB/Database.php";
require_once "Controller/SelecoesController.php";



$selecoesController = new SelecoesController($pdo);



$selecoes = $selecoesController->listar();



?>