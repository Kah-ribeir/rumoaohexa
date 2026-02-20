<?php

require_once "C:/Turma2/xampp/htdocs/rumoaohexa/DB/Database.php";
require_once "C:/Turma2/xampp/htdocs/rumoaohexa/Controller/UsuariosController.php";

$UsuariosController = new UsuariosController($pdo);

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $usuarios = $UsuariosController->listarindividual($id);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar usuário</title>
<a href="../../index.php" class="btn-voltar">← Voltar</a>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #8fb6d9, #6fa0c7);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #f2f2f2;
            padding: 30px 40px;
            border-radius: 20px;
            width: 350px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
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
    top: 30px;
    left: 30px;
    text-decoration: none;
    background-color: #f2f2f2;
    padding: 10px 15px;
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
    <h2>Editar Usuário</h2>

    <label>Nome:</label>
    <input type="text" name="nome" value="<?=$usuarios['nome'];?>" required>

    <label>Idade:</label>
    <input type="text" name="idade" value="<?=$usuarios['idade'];?>" required>

    <label>Seleção:</label>
    <input type="text" name="selecao" value="<?=$usuarios['selecao'];?>" required>

    <label>Cargo:</label>
    <input type="text" name="cargo" value="<?=$usuarios['cargo'];?>" required>

    <input type="submit" value="Salvar">
</form>

</body>
</html>

<?php
} else {
    header('Location: listarusuario.php');
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $selecao = $_POST['selecao'];
    $cargo = $_POST['cargo'];

    $UsuariosController->editar($nome, $idade, $selecao, $cargo, $id);

    header('Location: ../../index.php');
}
?>