<?php

require_once "Model/ClassificacaoModel.php";

class ClassificacaoController {
    private $classificacaoModel;

    public function __construct($pdo) {
        $this->classificacaoModel = new ClassificacaoModel($pdo);
    }

    public function exibir($grupo) {
        return $this->classificacaoModel->buscarClassificacaoPorGrupo($grupo);
    }

    
}
