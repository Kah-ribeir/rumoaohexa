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
        <h1>⚽ Cadastrar Grupo </h1>

        <label for="nome">Nome do grupo</label>
        <input type="text" name="grupo" placeholder="ex:Brasil" required>

        
        <input type="submit" value="CADASTRAR">
    </form>

</body>
</html>


<?php

require_once "C:/Turma2/xampp/htdocs/rumoaohexa/DB/Database.php";
require_once "C:/Turma2/xampp/htdocs/rumoaohexa/Controller/GruposController.php";

$GruposController = new GruposController($pdo);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
  
    $grupo = $_POST ['grupo'];
   
  

    $GruposController->cadastrar( $grupo);

    header('Location: ../../index.php');
}


?>