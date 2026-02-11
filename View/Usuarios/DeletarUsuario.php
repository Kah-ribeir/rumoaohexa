<?php

require_once "C:/Turma2/xampp/htdocs/rumoaohexa/DB/Database.php";
require_once "C:/Turma2/xampp/htdocs/rumoaohexa/Controller/UsuariosController.php";


$UsuariosController = new UsuariosController($pdo);

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $usuarios = $UsuariosController->deletar($id);
    header('Location: ../../index.php');
} else {
    header('Location: ../../index.php');
}

?>