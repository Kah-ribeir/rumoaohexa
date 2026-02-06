<?php

require_once "C:/Turma1/xampp/htdocs/rumoaohexa/DB/Database.php";
require_once "C:/Turma1/xampp/htdocs/rumoaohexa/Controller/SelecoesController.php";


$SelecoesController = new SelecoesController($pdo);

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $selecoes = $SelecoesController->deletar($id);
    header('Location: ../../index.php');
} else {
    header('Location: ../../index.php');
}

?>