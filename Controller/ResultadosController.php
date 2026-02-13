<?php

require_once "C:/Turma2/xampp/htdocs/rumoaohexa/Model/ResultadosModel.php";

class ResultadosController {
    private $resultadosModel;
    public function __construct($pdo) {
        $this->resultadosModel = new ResultadosModel( $pdo);
    }

    public function listar () {
        $resultados = $this ->resultadosModel ->buscarTodos();
        include_once "C:/Turma2/xampp/htdocs/rumoaohexa/View/Resultados/listarresultado.php";
        return;
    }


 public function listarindividual ($id) {
        $resultados = $this ->resultadosModel ->buscarIndividual($id);
        return $resultados;
    }


 public function cadastrar($gol_mandante, $gol_visitante) {
    return $this->resultadosModel-> cadastrar($gol_mandante, $gol_visitante);
 }


 public function editar($gol_mandante, $gol_visitante, $id) {
    $this->resultadosModel-> editar($gol_mandante, $gol_visitante, $id);
 }


public function deletar($id) {
    $resultados = $this->resultadosModel-> deletar($id);
    return $resultados;
 }

}

?>