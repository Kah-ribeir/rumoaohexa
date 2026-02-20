<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realizar cadastro de usuário</title>

    <link rel="stylesheet" href="../../style.css">
</head>

<body>

    <form method="post">
        <h1>⚽ 👥 Cadastrar Usuário</h1>

        <label for="nome">Nome</label>
        <input type="text" name="nome" placeholder="nome" required>

        <label for="idade">Idade</label>
        <input type="text" name="idade" placeholder="idade" required>

        <label for="selecao">Seleção</label>
        <input type="text" name="selecao" placeholder="seleção" required>

        <label for="cargo">Cargo</label>
        <input type="text" name="cargo" placeholder="cargo" required>

        <input type="submit" value="CADASTRAR">
    </form>

</body>
</html>


<?php

require_once "C:/Turma2/xampp/htdocs/rumoaohexa/DB/Database.php";
require_once "C:/Turma2/xampp/htdocs/rumoaohexa/Controller/UsuariosController.php";

$UsuariosController = new UsuariosController($pdo);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $nome = $_POST ['nome'];
    $idade = $_POST ['idade'];
    $selecao = $_POST ['selecao'];
    $cargo = $_POST ['cargo'];
  

    $UsuariosController->cadastrar($nome, $idade, $selecao, $cargo);

    header('Location: ../../index.php');
}


?>