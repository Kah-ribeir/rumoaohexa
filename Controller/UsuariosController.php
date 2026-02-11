<?php

require_once "C:/Turma2/xampp/htdocs/rumoaohexa/Model/UsuariosModel.php";

class UsuariosController {
    private $usuariosModel;
    public function __construct($pdo) {
        $this->usuariosModel = new UsuariosModel( $pdo);
    }

    public function listar () {
        $usuarios = $this ->usuariosModel ->buscarTodos();
        include_once "C:/Turma2/xampp/htdocs/rumoaohexa/View/Usuarios/listarusuario.php";
        return;
    }


 public function listarindividual ($id) {
        $usuarios = $this ->usuariosModel ->buscarIndividual($id);
        return $usuarios;
    }


 public function cadastrar($nome, $idade, $selecao, $cargo) {
    return $this->usuariosModel-> cadastrar($nome, $idade, $selecao, $cargo);
 }


 public function editar($nome, $idade, $selecao, $cargo, $id) {
    $this->usuariosModel-> editar($nome, $idade, $selecao, $cargo, $id);
 }


public function deletar($id) {
    $usuarios = $this->usuariosModel-> deletar($id);
    return $usuarios;
 }

}

?>