<?php

require_once "C:/Turma2/xampp/htdocs/rumoaohexa/DB/Database.php";
require_once "C:/Turma2/xampp/htdocs/rumoaohexa/Controller/SelecoesController.php";


$SelecoesController = new SelecoesController($pdo);

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $selecoes = $SelecoesController->listarindividual($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar seleções</title>
</head>
<body>
    
<form method="post">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" value="<?=$selecoes['nome'];?>" required><br>

    <label for="grupo">Grupo:</label>
    <input type="text" name="grupo" value="<?=$selecoes['grupo'];?>" required><br>

    <label for="continente">Continente:</label>
    <input type="text" name="continente" value="<?=$selecoes['continente'];?>" required><br>

    <input type="submit">

</form>

</body>
</html>

<?php

} else {
    header('Location: listar.php');
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = $_POST['nome'];
    $grupo = $_POST['grupo'];
    $continente = $_POST['continente'];

    $SelecoesController->editar($nome, $grupo, $continente, $id);

    header('Location: ../../index.php');
}


?>