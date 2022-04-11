<?php

include 'conn.php';

$stmt = $pdo->prepare("
	SELECT * FROM itens
	WHERE id =  ? ");
$stmt->execute([$_GET['id']]);
$iten = $stmt->fetch();


?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="./styles/style.css">
</head>

<body>
	<main class="box">
		<form action="update.php" method="POST">
			<h2> </h2>
			<input type="text" name="iten" value="<?= $iten['iten'] ?>" placeholder="iten">
			<input type="text" name="tamanho" value="<?= $iten['tamanho'] ?>" placeholder=" tamanho">
			<input type="Submit" Value="Salvar">
			<input type="hidden" name="id" value="<?= $iten['id'] ?>">
		</form>
	</main>
</body>

</html>