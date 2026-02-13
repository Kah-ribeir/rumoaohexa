<?php

require_once "C:/Turma2/xampp/htdocs/rumoaohexa/DB/Database.php";
require_once "C:/Turma2/xampp/htdocs/rumoaohexa/Controller/JogosController.php";


$JogosController = new JogosController($pdo);

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $jogos = $JogosController->deletar($id);
    header('Location: ../../index.php');
} else {
    header('Location: ../../index.php');
}

?>