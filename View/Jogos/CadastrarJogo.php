<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Jogo</title>

    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(to right, #6b8fb3, #7da2c2);
            font-family: Arial, Helvetica, sans-serif;
        }

        .card {
            background-color: #e5e7eb;
            padding: 30px;
            border-radius: 20px;
            width: 380px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            position: relative;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }

        input {
            width: 100%;
            padding: 10px;
            border-radius: 10px;
            border: 1px solid #ccc;
            margin-top: 5px;
        }

        input[type="submit"] {
            background-color: #6b8fb3;
            color: white;
            border: none;
            margin-top: 20px;
            font-weight: bold;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #5a7c9a;
        }

        .voltar {
            position: absolute;
            top: -15px;
            left: -15px;
            background-color: #f1f5f9;
            border-radius: 10px;
            padding: 8px 10px;
            text-decoration: none;
            color: black;
            box-shadow: 0 5px 10px rgba(0,0,0,0.2);
        }
    </style>
</head>

<body>

<div class="card">

    <a href="../../index.php" class="voltar">⬅</a>

    <form method="post">
        <h1>⚽ Cadastrar Jogo 🏟️</h1>

        <label>Seleção Mandante</label>
        <input type="text" name="selecao_mandante" placeholder="Seleção mandante" required>

        <label>Gols Seleção Mandante</label>
        <input type="text" name="gols_mandante" placeholder="Gols" required>

        <label>Seleção Visitante</label>
        <input type="text" name="selecao_visitante" placeholder="Seleção visitante" required>

        <label>Gols Seleção Visitante</label>
        <input type="text" name="gols_visitante" placeholder="Gols" required>

        <label>Data</label>
        <input type="text" name="data" placeholder="00/00/0000" required>

        <label>Horário</label>
        <input type="text" name="horario" placeholder="00:00" required>

        <label>Estádio</label>
        <input type="text" name="estadio" placeholder="Estádio" required>

        <label>Grupo</label>
        <input type="text" name="grupo" placeholder="Grupo" required>

        <input type="submit" value="CADASTRAR">
    </form>

</div>

</body>
</html>

<?php

require_once "C:/Turma2/xampp/htdocs/rumoaohexa/DB/Database.php";
require_once "C:/Turma2/xampp/htdocs/rumoaohexa/Controller/JogosController.php";

$JogosController = new JogosController($pdo);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $selecao_mandante = $_POST['selecao_mandante'];
    $gols_mandante = $_POST['gols_mandante'];
    $selecao_visitante = $_POST['selecao_visitante'];
    $gols_visitante = $_POST['gols_visitante'];
    $data = $_POST['data'];
    $horario = $_POST['horario'];
    $estadio = $_POST['estadio'];
    $grupo = $_POST['grupo'];

    $JogosController->cadastrar(
        $selecao_mandante, 
        $gols_mandante, 
        $selecao_visitante, 
        $gols_visitante, 
        $data, 
        $horario, 
        $estadio, 
        $grupo
    );

    header('Location: ../../index.php');
}
?>