<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realizar cadastro de jogo</title>

    <style>
        body {
            margin: 0;
            height: 100vh;
            font-family: Arial, Helvetica, sans-serif;
            background: radial-gradient(circle at top, #0f3d2e, #061a14);
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
        }

        form {
            width: 420px;
            padding: 30px 40px;
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(12px);
            border-radius: 16px;
            border: 1px solid rgba(0, 255, 170, 0.4);
            box-shadow: 0 0 40px rgba(0, 255, 150, 0.25);
        }

        h1 {
            text-align: center;
            margin-bottom: 25px;
            letter-spacing: 2px;
        }

        label {
            display: block;
            margin-top: 15px;
            font-size: 14px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            border-radius: 6px;
            border: none;
            outline: none;
            font-size: 14px;
            background-color: rgba(255, 255, 255, 0.15);
            color: #fff;
        }

        input::placeholder {
            color: #ddd;
        }

        input[type="submit"] {
            width: 100%;
            margin-top: 25px;
            padding: 12px;
            background: linear-gradient(135deg, #ffd369, #e6a800);
            border: none;
            border-radius: 8px;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
            color: #000;
        }

        input[type="submit"]:hover {
            opacity: 0.9;
        }
    </style>
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