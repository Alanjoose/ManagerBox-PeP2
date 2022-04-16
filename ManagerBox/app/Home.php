<?php
//@Aplication: ManagerBox;
//@Code->Author: Jonatas;
//@Edit Home file;
include_once '../database/DbConection.php';
include '../database/CRUDFunc/ValidateSession.php';
include '../database/CRUDItens/Functions.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css" 
    integrity="sha384-/frq1SRXYH/bSyou/HUp/hib7RVN1TawQYja658FEOodR/FQBKVqT9Ol+Oz3Olq5"
    crossorigin="anonymous" />
    <title>Páinel de controle de <?=$_SESSION['NOME']?></title>
    <link rel="icon" href="./box.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="./styles/global.css">
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="stylesheet" href="./styles/Home.css">
</head>
<body>
<header>
        <div class="logo">
            <i class="fa fa-solid fa-box"></i>
            <h1>ManagerBox</h1>
        </div>

        <div class="functions">
            <a href="../app/CadastrarItem.html">
                <button class="button function-btn" title="Adicionar ao estoque">
                <i class="fa fa-solid fa-plus"></i>
                </button>
                </a>
                

            <button class="button function-btn" title="Caixa">
            <i class="fa fa-solid fa-cash-register"></i>
            </button>

            <button class="button function-btn">
            <i class="fa fa-solid fa-chart-column"></i>
            </button>
        </div>

        <div class="user-box">
        <i class="fa fa-solid fa-gear" title="Configurações gerais"></i>
        <i class="fa fa-solid fa-user-gear" title="Configurações do perfil"></i>
        </div>
    </header>

    <nav class="nav">
    <h2>Olá <?=$_SESSION['NOME']?></h2>

    <div class="btns">
    <button class="rapid-button" title="Adicionar ao estoque">
            <i class="fa fa-solid fa-plus"></i>
            </button>
    </div>
    </nav>
    <?=tableShow()?>
</body>
</html>