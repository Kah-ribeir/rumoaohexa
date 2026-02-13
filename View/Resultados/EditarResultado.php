<?php

require_once "C:/Turma2/xampp/htdocs/rumoaohexa/DB/Database.php";
require_once "C:/Turma2/xampp/htdocs/rumoaohexa/Controller/ResultadosController.php";


$ResultadosController = new ResultadosController($pdo);

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $resultados = $ResultadosController->listarindividual($id);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar resultados</title>
</head>
<body>
    
<form method="post">
    <label for="gol_mandante">Gol Seleção Mandante:</label>
    <input type="text" name="gol_mandante" value="<?=$resultados['gol_mandante'];?>" required><br>

    <label for="gol_visitante">Gol Seleção Visitante:</label>
    <input type="text" name="gol_visitante" value="<?=$resultados['gol_visitante'];?>" required><br>

    <input type="submit">

</form>

</body>
</html>

<?php

} else {
    header('Location: listarresultado.php');
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $gol_mandante = $_POST['gol_mandante'];
    $gol_visitante = $_POST['gol_visitante'];
    

    $ResultadosController->editar($gol_mandante, $gol_visitante, $id);

    header('Location: ../../index.php');
}


?>