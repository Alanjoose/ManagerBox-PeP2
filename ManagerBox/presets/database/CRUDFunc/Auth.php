<?php
//@Aplication: ManagerBox;
//@Code->Author: AlanJS;
//@Create Auth file;

include_once('../DbConection.php'); // /database/DbConection.php;
//Todos os arquivos do crud deverão importar o arquivo DBConection;

session_start();
if(!isset($_SESSION['login']) || $_SESSION['login'] !== true)
{
    session_destroy();
    header('location: ../../../app/login.html?msg=Inicie uma sessao primeiro');
    exit();
}

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$statement = $pdo->prepare("select * from FUNCIONARIO where EMAIL = '$inputEmail' and SENHA = '$inputPassword'");
$query = $pdo->query($statement);
$user = $query->fetch();

if($user === false)
{
    header('location: ../../../app/login.html?msg=Dados incorretos');
    exit();
}

else
{
    header('location: ../../../app/home.php');
}

session_start();
$_SESSION['login'] = true;
$_SESSION['ID'] = $user['ID'];
$_SESSION['NOME'] = $user['NOME'];
$_SESSION['VENDAS'] = $user['VENDAS'];
?>