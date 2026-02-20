<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realizar cadastro</title>

    <link rel="stylesheet" href="../../style.css">
</head>

<body>

    <form method="post">
        <h1>⚽ Cadastrar Seleção</h1>

        <label for="nome">Nome</label>
        <input type="text" name="nome" placeholder="Brasil" required>

        <label for="grupo">Grupo</label>
        <input type="text" name="grupo" placeholder="A" required>

        <label for="continente">Continente</label>
        <input type="text" name="continente" placeholder="América do Sul" required>

        <input type="submit" value="CADASTRAR">
    </form>

</body>
</html>


<?php

require_once "C:/Turma2/xampp/htdocs/rumoaohexa/DB/Database.php";
require_once "C:/Turma2/xampp/htdocs/rumoaohexa/Controller/SelecoesController.php";

$SelecoesController = new SelecoesController($pdo);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $nome = $_POST ['nome'];
    $grupo = $_POST ['grupo'];
    $continente = $_POST ['continente'];
  

    $SelecoesController->cadastrar($nome, $grupo, $continente);

    header('Location: ../../index.php');
}


?>