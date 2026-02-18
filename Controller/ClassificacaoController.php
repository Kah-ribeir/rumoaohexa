<?php

require_once "C:/Turma2/xampp/htdocs/rumoaohexa/Model/ClassificacaoModel.php";

class ClassificacaoController {
    private $classificacaoModel;

    public function __construct($pdo) {
        $this->classificacaoModel = new ClassificacaoModel($pdo);
    }

    public function exibir() {
        $classificacoes = $this->classificacaoModel->buscarClassificacaoPorGrupo();
         include_once "C:/Turma2/xampp/htdocs/rumoaohexa/View/Classificacao/Listar.php";
        return;
    }

    
}
