<?php
//@Aplication: ManagerBox;
//@Code->Author: AlanJS;
//@Create Auth file;

include_once('../DbConection.php'); // /database/DbConection.php;
//Todos os arquivos do crud deverão importar o arquivo DBConection;

$inputEmail = $_POST['email'];
$inputPassword = $_POST['password'];

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "select * from FUNCIONARIO where EMAIL = '$inputEmail' and SENHA = '$inputPassword'";
$statement = $pdo->query($sql);
$user = $statement->fetch();

if($user === false)
{
    header('location: ../../../app/login.html?msg=Dados incorretos');
    exit();
}

else
{
    header('location: ../../app/home.php');
}

session_start();
$_SESSION['login'] = true;
$_SESSION['ID'] = $user['ID'];
$_SESSION['NOME'] = $user['NOME'];
$_SESSION['VENDAS'] = $user['VENDAS'];
?>