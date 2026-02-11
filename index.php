<?php

require_once "DB/Database.php";
require_once "Controller/SelecoesController.php";



$selecoesController = new SelecoesController($pdo);





?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Copa do Mundo</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            height: 100vh;
            background: radial-gradient(circle at top, #0f3d2e, #061a14);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: #fff;
        }

        .card {
            width: 900px;
            height: 500px;
            background: linear-gradient(
                135deg,
                rgba(255, 255, 255, 0.15),
                rgba(255, 255, 255, 0.05)
            );
            border-radius: 20px;
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 0 60px rgba(0, 255, 150, 0.2);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .trofeu {
            font-size: 90px;
            margin-bottom: 20px;
        }

        h1 {
            font-size: 42px;
            letter-spacing: 3px;
            margin: 0;
        }

        h2 {
            font-size: 16px;
            font-weight: normal;
            letter-spacing: 2px;
            margin-top: 10px;
            color: #8fffd2;
        }

        .anel {
            position: absolute;
            width: 420px;
            height: 420px;
            border: 2px solid rgba(0, 255, 170, 0.3);
            border-radius: 50%;
            animation: girar 20s linear infinite;
        }

        @keyframes girar {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="anel"></div>

        <div class="trofeu">🏆</div>
        <h1>COPA DO MUNDO</h1>
        <h2>SISTEMA DE GERENCIAMENTO</h2>
    </div>
    <?php
    $selecoes = $selecoesController->listar();
    ?>
</body>
</html>




