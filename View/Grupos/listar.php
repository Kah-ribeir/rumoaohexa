<?php


        if (empty($grupos)) {
            echo "<div>";
            echo "<p>Nenhum grupo cadastrado!</p>";
            echo "<a href='View/Grupos/cadastrar.php?'>Cadastrar</a>";
             echo "</div>";
            return;
        }

        echo "<table border='1' cellpadding='5' cellspacing='0'>";
        echo "<tr><td><a href='View/Grupos/cadastrar.php?'>Cadastrar</a> </td></tr>";
        echo "<tr><th>ID</th><th>Grupo</th><th>Ações</th></tr>";
    

        foreach ($grupos as $grupo) {

            $id = $grupo['id'];
            echo "<tr>";
            echo "<td>{$id}</td>";
          
            echo "<td>{$grupo['grupo']}</td>";
          
            echo "<td>
            <a href='View/Grupos/editar.php?id={$id}'>Editar</a> |
            <a href='View/Grupos/deletar.php?id={$id}' onclick=\"return confirm ('Tem certeza que deseja excluir este grupo?')\" >Deletar</a> 
            </td>";
            echo "</tr>";

        }
        echo "</table";

?>