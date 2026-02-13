<?php

require_once "DB/Database.php";
require_once "Controller/SelecoesController.php";
require_once "Controller/UsuariosController.php";
require_once "C:/Turma2/xampp/htdocs/rumoaohexa/Controller/GruposController.php";
require_once "Controller/JogosController.php";
require_once "Controller/ResultadosController.php";
require_once "Controller/ClassificacaoController.php";


$selecoesController = new SelecoesController($pdo);
$usuariosController = new UsuariosController($pdo);
$gruposController  = new GruposController($pdo);
$jogosController = new JogosController($pdo);
$resultadosController = new ResultadosController($pdo);
$classificacaoController = new ClassificacaoController($pdo);






?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Copa do Mundo</title>

    
</head>
<body>
    <div class="card">
        <div class="anel"></div>

        <div class="trofeu">🏆</div>
        <h1>COPA DO MUNDO</h1>
        <h2>SISTEMA DE GERENCIAMENTO</h2>
    </div>
    <?php
    // $selecoes = $selecoesController->listar();
    // $usuarios = $usuariosController->listar();
    // $grupos  = $gruposController->listar();

    // $jogos = $jogosController->listar();
    // $resultados = $resultadosController->listar();
    $classificacaoController->exibir(1);
    ?>
</body>
</html>




