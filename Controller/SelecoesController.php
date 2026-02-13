<?php

require_once "C:/Turma2/xampp/htdocs/rumoaohexa/Model/selecoesModel.php";

class SelecoesController {
    private $selecoesModel;
    public function __construct($pdo) {
        $this->selecoesModel = new SelecoesModel( $pdo);
    }

    public function listar () {
        $selecoes = $this ->selecoesModel ->buscarTodos();
        include_once "C:/Turma2/xampp/htdocs/rumoaohexa/View/Selecoes/listar.php";
        return;
    }


 public function listarindividual ($id) {
        $selecoes = $this ->selecoesModel ->buscarIndividual($id);
        //include_once "C:/Turma2/xampp/htdocs/rumoaohexa/View/Selecoes/listar.php";
        return $selecoes;
    }


 public function cadastrar($nome, $grupo, $continente) {
    return $this->selecoesModel-> cadastrar($nome, $grupo, $continente);
 }


 public function editar($nome, $grupo, $continente, $id) {
    $this->selecoesModel-> editar($nome, $grupo, $continente, $id);
 }


public function deletar($id) {
    $selecoes = $this->selecoesModel-> deletar($id);
    return $selecoes;
 }

}

?>