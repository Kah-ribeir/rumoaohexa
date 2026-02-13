<?php

require_once "C:/Turma2/xampp/htdocs/rumoaohexa/Model/JogosModel.php";

class JogosController {
    private $jogosModel;
    public function __construct($pdo) {
        $this->jogosModel = new JogosModel( $pdo);
    }

    public function listar () {
        $jogos = $this ->jogosModel ->buscarTodos();
        include_once "C:/Turma2/xampp/htdocs/rumoaohexa/View/Jogos/listarjogo.php";
        return;
    }


 public function listarindividual ($id) {
        $jogos = $this ->jogosModel ->buscarIndividual($id);
        return $jogos;
    }


 public function cadastrar($selecao_mandante, $gols_mandante, $selecao_visitante, $gols_visitante, $data, $horario, $estadio, $grupo) {
    return $this->jogosModel-> cadastrar($selecao_mandante, $gols_mandante, $selecao_visitante, $gols_visitante, $data, $horario, $estadio, $grupo);
 }


 public function editar($selecao_mandante, $gols_mandante, $selecao_visitante, $gols_visitante, $data, $horario, $estadio, $grupo, $id) {
    $this->jogosModel-> editar($selecao_mandante, $gols_mandante, $selecao_visitante, $gols_visitante, $data, $horario, $estadio, $grupo, $id);
 }


public function deletar($id) {
    $jogos = $this->jogosModel-> deletar($id);
    return $jogos;
 }

}

?>