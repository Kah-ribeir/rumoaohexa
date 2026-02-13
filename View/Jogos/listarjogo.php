<?php


        if (empty($jogos)) {
            echo "<div>";
            echo "<p>Nenhum jogo cadastrado!</p>";
            echo "<a href='View/Jogos/cadastrarjogo.php?'>Cadastrar</a>";
             echo "</div>";
            return;
        }

        echo "<table border='1' cellpadding='5' cellspacing='0'>";
        echo "<tr><td><a href='View/Jogos/cadastrarjogo.php?'>Cadastrar</a> </td></tr>";
        echo "<tr><th>ID</th><th>selecao_mandante</th><th>gols_mandante</th><th>selecao_visitante</th><th>gols_visitante</th><th>data</th><th>horario</th><th>estadio</th><th>grupo</th><th>Ações</th></tr>";
    

        foreach ($jogos as $jogo) {

            $id = $jogo['id'];
            echo "<tr>";
            echo "<td>{$id}</td>";
            echo "<td>{$jogo['selecao_mandante']}</td>";
            echo "<td>{$jogo['gols_mandante']}</td>";
            echo "<td>{$jogo['selecao_visitante']}</td>";
            echo "<td>{$jogo['gols_visitante']}</td>";
            echo "<td>{$jogo['data']}</td>";
            echo "<td>{$jogo['horario']}</td>";
            echo "<td>{$jogo['estadio']}</td>";
            echo "<td>{$jogo['grupo']}</td>";
            echo "<td>
            <a href='View/Jogos/editarjogo.php?id={$id}'>Editar</a> |
            <a href='View/Jogos/deletarjogo.php?id={$id}' onclick=\"return confirm ('Tem certeza que deseja excluir este jogo?')\" >Deletar</a> 
            </td>";
            echo "</tr>";

        }
        echo "</table";

?>