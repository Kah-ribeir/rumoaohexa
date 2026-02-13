<?php

class ResultadosModel
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    public function buscarTodos()
    {
        $stmt = $this->pdo->query('SELECT * FROM resultados');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function buscarIndividual($id)
    {
        $sql = "SELECT * FROM resultados WHERE id = $id";

        $stmt = $this->pdo->query($sql);

        return $stmt->fetch(PDO::FETCH_ASSOC);

    }

    public function cadastrar($gol_mandante, $gol_visitante)
    {

        $sql = "INSERT INTO resultados (gol_mandante, gol_visitante) VALUES (:gol_mandante, :gol_visitante)";

        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            ':gol_mandante' => $gol_mandante,
            ':gol_visitante' => $gol_visitante
        ]);


    }



    public function editar($gol_mandante, $gol_visitante, $id)
    {
        $sql = "UPDATE resultados SET gol_mandante=?,gol_visitante=? WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$gol_mandante, $gol_visitante, $id]);
    }


    public function deletar($id)
    {

        $sql = "DELETE FROM resultados WHERE id = ?";

        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$id]);
    }


}
?>