<?php

class ClassificacaoModel {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function buscarClassificacaoPorGrupo($grupo) {

        $sql = "
        SELECT 
            s.id,
            s.nome,
            s.grupo,

            SUM(
                CASE 
                    WHEN j.gols_mandante > j.gols_visitante AND j.selecao_mandante = s.id THEN 3
                    WHEN j.gols_visitante > j.gols_mandante AND j.selecao_visitante = s.id THEN 3
                    WHEN j.gols_mandante = j.gols_visitante AND 
                         (j.selecao_mandante = s.id OR j.selecao_visitante = s.id) THEN 1
                    ELSE 0
                END
            ) as pontos,

            SUM(
                CASE 
                    WHEN j.selecao_mandante = s.id THEN j.gols_mandante
                    WHEN j.selecao_visitante = s.id THEN j.gols_visitante
                    ELSE 0
                END
            ) as gols_marcados,

            SUM(
                CASE 
                    WHEN j.selecao_mandante = s.id THEN j.gols_visitante
                    WHEN j.selecao_visitante = s.id THEN j.gols_mandante
                    ELSE 0
                END
            ) as gols_sofridos

        FROM selecoes s
        LEFT JOIN jogos j 
            ON s.id = j.selecao_mandante 
            OR s.id = j.selecao_visitante

        WHERE s.grupo = :grupo
        GROUP BY s.id
        ORDER BY pontos DESC, 
                 (gols_marcados - gols_sofridos) DESC, 
                 gols_marcados DESC
        ";

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':grupo', $grupo);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
