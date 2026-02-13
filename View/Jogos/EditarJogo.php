<?php

require_once "C:/Turma2/xampp/htdocs/rumoaohexa/DB/Database.php";
require_once "C:/Turma2/xampp/htdocs/rumoaohexa/Controller/JogosController.php";


$JogosController = new JogosController($pdo);

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $jogos = $JogosController->listarindividual($id);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar jogos</title>
</head>
<body>
    
<form method="post">
    <label for="selecao_mandante">Seleção Mandante:</label>
    <input type="text" name="selecao_mandante" value="<?=$jogos['selecao_mandante'];?>" required><br>

    <label for="gols_mandante">Gols Seleção Mandante:</label>
    <input type="text" name="gols_mandante" value="<?=$jogos['gols_mandante'];?>" required><br>

    <label for="selecao_visitante">Seleção Visitante:</label>
    <input type="text" name="selecao_visitante" value="<?=$jogos['selecao_visitante'];?>" required><br>

    <label for="gols_visitante">Gols Seleção Visitante:</label>
    <input type="text" name="gols_visitante" value="<?=$jogos['gols_visitante'];?>" required><br>

    <input type="submit">

</form>

</body>
</html>

<?php

} else {
    header('Location: listarjogo.php');
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $selecao_mandante = $_POST ['selecao_mandante'];
    $gols_mandante = $_POST ['gols_mandante'];
    $selecao_visitante = $_POST ['selecao_visitante'];
    $gols_visitante = $_POST ['gols_visitante'];
    $data = $_POST ['data'];
    $horario = $_POST ['horario'];
    $estadio = $_POST ['estadio'];
    $grupo = $_POST ['grupo'];

    $JogosController->editar($selecao_mandante, $gols_mandante, $selecao_visitante, $gols_visitante, $data, $horario, $estadio, $grupo, $id);

    header('Location: ../../index.php');
}


?>