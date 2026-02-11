<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realizar cadastro</title>

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