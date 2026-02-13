<?php


        if (empty($resultados)) {
            echo "<div>";
            echo "<p>Nenhum resultado cadastrado!</p>";
            echo "<a href='View/Resultados/cadastrarresultado.php?'>Cadastrar</a>";
             echo "</div>";
            return;
        }

        echo "<table border='1' cellpadding='5' cellspacing='0'>";
        echo "<tr><td><a href='View/Resultados/cadastrarresultado.php?'>Cadastrar</a> </td></tr>";
        echo "<tr><th>ID</th><th>gol_mandante</th><th>gol_visitante</th><th>Ações</th></tr>";
    

        foreach ($resultados as $resultado) {

            $id = $resultado['id'];
            echo "<tr>";
            echo "<td>{$id}</td>";
            echo "<td>{$resultado['gol_mandante']}</td>";
            echo "<td>{$resultado['gol_visitante']}</td>";
            echo "<td>
            <a href='View/Resultados/editarresultado.php?id={$id}'>Editar</a> |
            <a href='View/Resultados/deletarresultado.php?id={$id}' onclick=\"return confirm ('Tem certeza que deseja excluir este resultado?')\" >Deletar</a> 
            </td>";
            echo "</tr>";

        }
        echo "</table";

?>