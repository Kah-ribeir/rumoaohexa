<?php

require_once "C:/Turma2/xampp/htdocs/rumoaohexa/DB/Database.php";
require_once "C:/Turma2/xampp/htdocs/rumoaohexa/Controller/GruposController.php";


$GruposController = new GruposController($pdo);

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $grupo = $GruposController->deletar($id);
    header('Location: ../../index.php');
} else {
    header('Location: ../../index.php');
}

?>