

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabelas</title>

      <link rel="stylesheet" href="style.css">
</head>
<body>
    
<nav>

<li><a href="index.php">INICIO</a></li>

</nav>

</body>
</html>

<?php
require_once "DB/Database.php";
require_once "Controller/SelecoesController.php";
require_once "Controller/UsuariosController.php";
require_once "C:/Turma2/xampp/htdocs/rumoaohexa/Controller/GruposController.php";
require_once "Controller/JogosController.php";
require_once "Controller/ResultadosController.php";
require_once "Controller/ClassificacaoController.php";


$selecoesController = new SelecoesController($pdo);
$usuariosController = new UsuariosController($pdo);
$gruposController  = new GruposController($pdo);
$jogosController = new JogosController($pdo);
$resultadosController = new ResultadosController($pdo);
$classificacaoController = new ClassificacaoController($pdo);

?>

    <?php
     $usuarios = $usuariosController->listar();
     $selecoes = $selecoesController->listar();
     $grupos  = $gruposController->listar();

    $jogos = $jogosController->listar();
     $resultados = $resultadosController->listar();
    $classificacoes = $classificacaoController->exibir(); ?>

    

</body>
</html>




