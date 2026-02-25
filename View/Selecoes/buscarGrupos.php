<?php
require_once "C:/Turma2/xampp/htdocs/rumoaohexa/DB/Database.php";
require_once "C:/Turma2/xampp/htdocs/rumoaohexa/Model/GruposModel.php";

function buscarGrupos($pdo) {
    $grupoModel = new GrupoModel($pdo);
    return $grupoModel->buscarTodos();
}
