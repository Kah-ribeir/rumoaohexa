<?php

require_once "C:/Turma2/xampp/htdocs/rumoaohexa/Model/GruposModel.php";
require_once "C:/Turma2/xampp/htdocs/rumoaohexa/Model/GruposModel.php";

class GruposController {

    private $grupoModel;
   

    public function __construct($pdo) {
        $this->grupoModel = new GrupoModel($pdo);
        $this->gruposModel = new GrupoModel($pdo);
    }

    
    public function listar() {
        $grupos = $this->grupoModel->buscarTodos();
        include_once "C:/Turma2/xampp/htdocs/rumoaohexa/View/Grupos/listar.php";
        return;
    }

 
    public function listarindividual($id) {
        return $grupo = $this->grupoModel->buscarIndividual($id);
        
    }

    
    public function cadastrar($grupo) {
        return $this->grupoModel->cadastrar($grupo);
    }

    
    public function editar($nome, $id) {
        $this->grupoModel->editar($nome, $id);
    }

   
    public function deletar($id) {
        return $this->grupoModel->deletar($id);
    }

}
?>
