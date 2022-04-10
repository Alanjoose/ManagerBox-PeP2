<?php

include 'conn.php'; // vai chamar a variavel pdo do banco

$username = $_POST['username'];
$senha = $_POST['senha'];

///////////////////////////////CREATE///////////////////////////////////////                 inserção de dados no banco de dados
$stmt = $pdo->prepare("
	INSERT INTO usuario (username, password) 

	VALUES (?,?)");
//não colocar aspas nessas interrogações

//array com os valores da interrogação
$stmt->execute([$username, $senha]);
////////////////////////////////////////////////////////////////////////////
header('location:index.php')
?>


