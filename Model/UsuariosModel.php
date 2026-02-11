<?php

class UsuariosModel
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    public function buscarTodos()
    {
        $stmt = $this->pdo->query('SELECT * FROM usuarios');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function buscarIndividual($id)
    {
        $sql = "SELECT * FROM usuarios WHERE id = $id";

        $stmt = $this->pdo->query($sql);

        return $stmt->fetch(PDO::FETCH_ASSOC);

    }

    public function cadastrar($nome, $idade, $selecao, $cargo)
    {

        $sql = "INSERT INTO usuarios (nome, idade, selecao, cargo) VALUES (:nome, :idade, :selecao, :cargo)";

        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            ':nome' => $nome,
            ':idade' => $idade,
            ':selecao' => $selecao,
            ':cargo' => $cargo
        ]);


    }



    public function editar($nome, $idade, $selecao, $cargo, $id)
    {
        $sql = "UPDATE usuarios SET nome=?,idade=?,selecao=?, cargo=? WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$nome, $idade, $selecao, $cargo, $id]);
    }


    public function deletar($id)
    {

        $sql = "DELETE FROM usuarios WHERE id = ?";

        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$id]);
    }


}
?>