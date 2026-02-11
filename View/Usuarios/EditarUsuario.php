<?php

require_once "C:/Turma2/xampp/htdocs/rumoaohexa/DB/Database.php";
require_once "C:/Turma2/xampp/htdocs/rumoaohexa/Controller/UsuariosController.php";


$UsuariosController = new UsuariosController($pdo);

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $usuarios = $UsuariosController->listarindividual($id);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar usuários</title>
</head>
<body>
    
<form method="post">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" value="<?=$usuarios['nome'];?>" required><br>

    <label for="idade">Idade:</label>
    <input type="text" name="idade" value="<?=$usuarios['idade'];?>" required><br>

    <label for="selecao">Seleção:</label>
    <input type="text" name="selecao" value="<?=$usuarios['selecao'];?>" required><br>

    <label for="cargo">Cargo:</label>
    <input type="text" name="cargo" value="<?=$usuarios['cargo'];?>" required><br>

    <input type="submit">

</form>

</body>
</html>

<?php

} else {
    header('Location: listarusuario.php');
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $selecao = $_POST['selecao'];
    $cargo = $_POST['cargo'];

    $UsuariosController->editar($nome, $idade, $selecao, $cargo, $id);

    header('Location: ../../index.php');
}


?>