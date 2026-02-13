<?php
require_once "../../Controller/ClassificacaoController.php";
require_once "../../config/database.php";

$grupo = $_GET['grupo'];

$controller = new ClassificacaoController($pdo);
$classificacao = $controller->exibir($grupo);
?>

<h2>Classificação - Grupo <?php echo $grupo; ?></h2>

<table border="1">
    <tr>
        <th>Seleção</th>
        <th>Pontos</th>
        <th>Saldo</th>
        <th>Gols Marcados</th>
    </tr>

    <?php foreach ($classificacao as $time): ?>
    <tr>
        <td><?= $time['nome'] ?></td>
        <td><?= $time['pontos'] ?? 0 ?></td>
        <td><?= ($time['gols_marcados'] - $time['gols_sofridos']) ?></td>
        <td><?= $time['gols_marcados'] ?? 0 ?></td>
    </tr>
    <?php endforeach; ?>
</table>
