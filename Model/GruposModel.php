<?php

class GrupoModel {
    private $pdo;

    public function __construct( $pdo) {
        $this->pdo = $pdo;
    }

  
    public function buscarTodos() {
        $stmt = $this->pdo->query("SELECT * FROM grupos");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function buscarIndividual($id) {
        $stmt = $this->pdo->query("SELECT * FROM grupos WHERE id = $id");
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

   
    public function cadastrar($grupo) {
        $sql = "INSERT INTO grupos (grupo) VALUES (:grupo)";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            ':grupo' => $grupo
        ]);
    }


    public function editar($grupo, $id) {
        $sql = "UPDATE grupos SET grupo=? WHERE id=?";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$grupo, $id]);
    }

   
    public function deletar($id) {
        $sql = "DELETE FROM grupos WHERE id=?";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$id]);
    }
}
?>
