<?php

require_once "C:/Turma2/xampp/htdocs/rumoaohexa/DB/Database.php";
require_once "C:/Turma2/xampp/htdocs/rumoaohexa/Controller/SelecoesController.php";
require_once "C:/Turma2/xampp/htdocs/rumoaohexa/Controller/GruposController.php";


$GruposController = new GruposController($pdo);

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $grupo = $GruposController->listarindividual($id);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Grupo</title>
</head>
<body>
    


    <label for="grupo">Grupo:</label>
    <input type="text" name="grupo" value="<?=$grupo['grupo'];?>" required><br>

    

    <input type="submit">

</form>

</body>
</html>

<?php

} else {
    header('Location: listar.php');
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $grupo = $_POST['grupo'];
   

    $GruposController->editar($grupo);

    header('Location: ../../index.php');
}


?>