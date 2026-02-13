<?php

require_once "C:/Turma2/xampp/htdocs/rumoaohexa/Model/GruposModel.php";
require_once "C:/Turma2/xampp/htdocs/rumoaohexa/Model/selecoesModel.php";

class GruposController {

    private $grupoModel;
    private $selecoesModel;

    public function __construct($pdo) {
        $this->grupoModel = new GrupoModel($pdo);
        $this->selecoesModel = new SelecoesModel($pdo);
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

    public function listarSelecoesGrupo($grupo_id) {
        $selecoes = $this->selecoesModel->listarPorGrupo($grupo_id);
        include_once "C:/Turma2/xampp/htdocs/rumoaohexa/View/Grupos/selecoesGrupo.php";
        return;
    }
}
?>
