<?php

class ClassificacaoModel {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function buscarClassificacaoPorGrupo() {

        $sql = "
       SELECT 
    s.nome AS selecao,
    g.grupo,
    
    SUM(
        CASE 
            WHEN (j.selecao_mandante = s.id AND j.gols_mandante > j.gols_visitante)
              OR (j.selecao_visitante = s.id AND j.gols_visitante > j.gols_mandante)
            THEN 3
            WHEN j.gols_mandante = j.gols_visitante
            THEN 1
            ELSE 0
        END
    ) AS pontos,

    SUM(
        CASE 
            WHEN j.selecao_mandante = s.id THEN j.gols_mandante
            WHEN j.selecao_visitante = s.id THEN j.gols_visitante
        END
    ) AS gols_marcados,

    SUM(
        CASE 
            WHEN j.selecao_mandante = s.id THEN j.gols_visitante
            WHEN j.selecao_visitante = s.id THEN j.gols_mandante
        END
    ) AS gols_sofridos,

    SUM(
        CASE 
            WHEN j.selecao_mandante = s.id THEN (j.gols_mandante - j.gols_visitante)
            WHEN j.selecao_visitante = s.id THEN (j.gols_visitante - j.gols_mandante)
        END
    ) AS saldo_gols

FROM selecoes s

INNER JOIN grupos g 
    ON s.grupo = g.id

INNER JOIN jogos j 
    ON s.id = j.selecao_mandante 
    OR s.id = j.selecao_visitante

GROUP BY s.id, g.grupo

ORDER BY g.grupo, pontos DESC, saldo_gols DESC, gols_marcados DESC;
";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
