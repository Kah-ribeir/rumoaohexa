<?php

require_once "C:/Turma2/xampp/htdocs/rumoaohexa/DB/Database.php";
require_once "C:/Turma2/xampp/htdocs/rumoaohexa/Controller/ResultadosController.php";


$ResultadosController = new ResultadosController($pdo);

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $resultados = $ResultadosController->deletar($id);
    header('Location: ../../index.php');
} else {
    header('Location: ../../index.php');
}

?>