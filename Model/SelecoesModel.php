<?php

class SelecoesModel {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this-> pdo = $pdo;
    }
    public function buscarTodos () {
        $stmt = $this->pdo->query ('SELECT * FROM selecoes');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

     public function buscarIndividual ($id) {
        $stmt = $this->pdo->query ("SELECT * FROM selecoes where id = $id");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

public function cadastrar($nome, $grupo, $continente){

$sql = "INSERT INTO selecoes (nome, grupo, continente) VALUES (:nome,:grupo, :continente)";

$stmt = $this->pdo->prepare($sql);
return $stmt->execute( [
    ':nome' => $nome,
    ':grupo'=> $grupo,
    ':continente'=> $continente
]);


}



public function editar($nome, $grupo, $continente, $id){
    $sql = "UPDATE selecoes SET nome=?,grupo=?,continente=? WHERE id = ?";
    $stmt = $this->pdo->prepare($sql);
    return $stmt->execute([$nome, $grupo, $continente, $id]);
}


public function deletar($id){

$sql = "DELETE FROM selecoes WHERE id = ?";

$stmt = $this->pdo->prepare($sql);
return $stmt->execute( [$id]);
}


}
?>