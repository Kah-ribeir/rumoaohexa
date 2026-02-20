<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realizar cadastro de resultado</title>

    <link rel="stylesheet" href="../../style.css">
</head>

<body>

    <form method="post">
        <h1>⚽Cadastrar Resultados🥅</h1>

        <label for="gol_mandante">Gols da Seleção Mandante</label>
        <input type="text" name="gol_mandante" placeholder=" * gols" required>

       <label for="gol_visitante">Gols da Seleção Visitante</label>
        <input type="text" name="gol_visitante" placeholder=" * gols" required>


        <input type="submit" value="CADASTRAR">
    </form>

</body>
</html>


<?php

require_once "C:/Turma2/xampp/htdocs/rumoaohexa/DB/Database.php";
require_once "C:/Turma2/xampp/htdocs/rumoaohexa/Controller/ResultadosController.php";

$ResultadosController = new ResultadosController($pdo);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $gol_mandante = $_POST ['gol_mandante'];
    $gol_visitante = $_POST ['gol_visitante'];
  

    $ResultadosController->cadastrar($gol_mandante, $gol_visitante);

    header('Location: ../../index.php');
}


?>