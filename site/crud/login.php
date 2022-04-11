<?php

//mecanismo de autenticação 
session_start();

include 'conn.php'; // vai chamar a variabel pdo do banco

$username = $_POST['username'];
$senha = $_POST['senha'];

/////////////////////////////READ///////////////////////////////////////////
////////////////////////SELECT//////////////////////////////////////////////
$stmt = $pdo->prepare("
	SELECT * FROM USUARIO 
	WHERE username = ? AND password = ?
	");

//pede um usuario que no projeto é user que tenha where//esse username e essa senha

$stmt->execute([$username, $senha]);

//essa variavel linhas se tornou um array de arrey
$linhas = $stmt->fetchAll();

//se nao veio senhuma linda
if (sizeof($linhas) == 0) {
	header('location:index.php');
	exit();
	//exit para parar a execessão do script
}

//caso não entre no script acima

$_SESSION['username'] = $linhas[0]['username'];
$_SESSION['user_id'] = $linhas[0]['id'];

header('location:home.php');

?>

