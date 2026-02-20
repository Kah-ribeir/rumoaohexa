<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realizar cadastro de jogo</title>

    <link rel="stylesheet" href="../../style.css">
</head>

<body>

    <form method="post">
        <h1>⚽ Cadastrar Jogo 🏟️</h1>

        <label for="selecao_mandante">Seleção Mandante</label>
        <input type="text" name="selecao_mandante" placeholder="seleção mandante" required>

        <label for="gols_mandante">Gols Seleção Mandante</label>
        <input type="text" name="gols_mandante" placeholder="gols seleção mandante" required>

        <label for="selecao_visitante">Seleção Visitante</label>
        <input type="text" name="selecao_visitante" placeholder="seleção visitante" required>

        <label for="gols_visitante">Gols Seleção Visitante</label>
        <input type="text" name="gols_visitante" placeholder="gols seleção visitante" required>

        <label for="data">Data</label>
        <input type="text" name="data" placeholder="00/00/0000" required>

        <label for="horario">Horário</label>
        <input type="text" name="horario" placeholder="00:00" required>

        <label for="estadio">Estádio</label>
        <input type="text" name="estadio" placeholder="estádio" required>

        <label for="grupo">Grupo</label>
        <input type="text" name="grupo" placeholder="grupo" required>

        <input type="submit" value="CADASTRAR">
    </form>

</body>
</html>


<?php

require_once "C:/Turma2/xampp/htdocs/rumoaohexa/DB/Database.php";
require_once "C:/Turma2/xampp/htdocs/rumoaohexa/Controller/JogosController.php";

$JogosController = new JogosController($pdo);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $selecao_mandante = $_POST ['selecao_mandante'];
    $gols_mandante = $_POST ['gols_mandante'];
    $selecao_visitante = $_POST ['selecao_visitante'];
    $gols_visitante = $_POST ['gols_visitante'];
    $data = $_POST ['data'];
    $horario = $_POST ['horario'];
    $estadio = $_POST ['estadio'];
    $grupo = $_POST ['grupo'];
  

    $JogosController->cadastrar($selecao_mandante, $gols_mandante, $selecao_visitante, $gols_visitante, $data, $horario, $estadio, $grupo);

    header('Location: ../../index.php');
}


?>