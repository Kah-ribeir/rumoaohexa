<?php

class JogosModel
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    public function buscarTodos()
    {
        $stmt = $this->pdo->query('SELECT * FROM jogos');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function buscarIndividual($id)
    {
        $sql = "SELECT * FROM jogos WHERE id = $id";

        $stmt = $this->pdo->query($sql);

        return $stmt->fetch(PDO::FETCH_ASSOC);

    }

    public function cadastrar($selecao_mandante, $gols_mandante, $selecao_visitante, $gols_visitante, $data, $horario, $estadio, $grupo)
    {

        $sql = "INSERT INTO jogos (selecao_mandante, gols_mandante, selecao_visitante, gols_visitante, data, horario, estadio, grupo) VALUES (:selecao_mandante, :gols_mandante, :selecao_visitante, :gols_visitante, :data, :horario, :estadio, :grupo)";

        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            ':selecao_mandante' => $selecao_mandante,
            ':gols_mandante' => $gols_mandante,
            ':selecao_visitante' => $selecao_visitante,
            ':gols_visitante' => $gols_visitante,
            ':data' => $data,
            ':horario' => $horario,
            ':estadio' => $estadio,
            ':grupo' => $grupo
        ]);


    }



    public function editar($selecao_mandante, $gols_mandante, $selecao_visitante, $gols_visitante, $data, $horario, $estadio, $grupo, $id)
    {
        $sql = "UPDATE jogos SET selecao_mandante=?, gols_mandante=?, selecao_visitante=?, gols_visitante=?, data=?, horario=?, estadio=?, grupo=? WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$selecao_mandante, $gols_mandante, $selecao_visitante, $gols_visitante, $data, $horario, $estadio, $grupo, $id]);
    }


    public function deletar($id)
    {

        $sql = "DELETE FROM jogos WHERE id = ?";

        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$id]);
    }


}
?>