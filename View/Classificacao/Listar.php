<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    
</body>
</html>

<?php

if (empty($classificacoes)) {
    echo "<div>";
    echo "<p>Nenhuma classificação cadastrada!</p>";
    echo "</div>";
    return;
}

echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>selecao</th><th>grupo</th><th>pontos</th><th>gols marcados</th><th>gols sofridos</th><th>saldo de gols</th></tr>";


?>


<?php foreach ($classificacoes as $classificacao) { ?>
    <tr>
        <td><?= $classificacao['selecao'] ?></td>
        <td><?= $classificacao['grupo'] ?></td>
        <td><?= $classificacao['pontos'] ?></td>
        <td><?= $classificacao['gols_marcados'] ?></td>
        <td><?= $classificacao['gols_sofridos'] ?></td>
        <td><?= $classificacao['saldo_gols'] ?></td>
    </tr>
<?php } ?>

</tbody>
</table>