<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    
</body>
</html>

<?php

require_once "C:/Turma2/xampp/htdocs/rumoaohexa/DB/Database.php";
require_once "C:/Turma2/xampp/htdocs/rumoaohexa/Controller/JogosController.php";

$JogosController = new JogosController($pdo);

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $jogos = $JogosController->listarindividual($id);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Jogo</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #8fb6d9, #6fa0c7);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        form {
            background-color: #f2f2f2;
            padding: 30px 40px;
            border-radius: 20px;
            width: 400px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            position: relative;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
            color: #333;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 10px;
            border: 1px solid #ccc;
            outline: none;
            transition: 0.3s;
        }

        input[type="text"]:focus {
            border-color: #6fa0c7;
            box-shadow: 0 0 5px rgba(111, 160, 199, 0.5);
        }

        input[type="submit"] {
            width: 100%;
            margin-top: 20px;
            padding: 12px;
            border: none;
            border-radius: 10px;
            background-color: #6fa0c7;
            color: white;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #4e85b3;
        }

        .btn-voltar {
            position: absolute;
            top: -15px;
            left: -15px;
            text-decoration: none;
            background-color: #f2f2f2;
            padding: 8px 12px;
            border-radius: 10px;
            color: #333;
            font-weight: bold;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            transition: 0.3s;
        }

        .btn-voltar:hover {
            background-color: #6fa0c7;
            color: white;
        }
    </style>
</head>

<body>

<form method="post">

    <a href="../../index.php" class="btn-voltar">←</a>

    <h2>Editar Jogo</h2>

    <label>Seleção Mandante:</label>
    <input type="text" name="selecao_mandante" value="<?=$jogos['selecao_mandante'];?>" required>

    <label>Gols Mandante:</label>
    <input type="text" name="gols_mandante" value="<?=$jogos['gols_mandante'];?>" required>

    <label>Seleção Visitante:</label>
    <input type="text" name="selecao_visitante" value="<?=$jogos['selecao_visitante'];?>" required>

    <label>Gols Visitante:</label>
    <input type="text" name="gols_visitante" value="<?=$jogos['gols_visitante'];?>" required>

    <label>Data:</label>
    <input type="text" name="data" value="<?=$jogos['data'];?>" required>

    <label>Horário:</label>
    <input type="text" name="horario" value="<?=$jogos['horario'];?>" required>

    <label>Estádio:</label>
    <input type="text" name="estadio" value="<?=$jogos['estadio'];?>" required>

    <label>Grupo:</label>
    <input type="text" name="grupo" value="<?=$jogos['grupo'];?>" required>

    <input type="submit" value="Salvar">

</form>

</body>
</html>

<?php
} else {
    header('Location: listarjogo.php');
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $selecao_mandante = $_POST['selecao_mandante'];
    $gols_mandante = $_POST['gols_mandante'];
    $selecao_visitante = $_POST['selecao_visitante'];
    $gols_visitante = $_POST['gols_visitante'];
    $data = $_POST['data'];
    $horario = $_POST['horario'];
    $estadio = $_POST['estadio'];
    $grupo = $_POST['grupo'];

    $JogosController->editar(
        $selecao_mandante,
        $gols_mandante,
        $selecao_visitante,
        $gols_visitante,
        $data,
        $horario,
        $estadio,
        $grupo,
        $id
    );

    header('Location: ../../index.php');
}
?>