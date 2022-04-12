<?php
//@Aplication: ManagerBox;
//@Code->Author: Jonatas;
//@Edit Home file;
include_once '../presets/database/DbConection.php';
?>

<!DOCTYPE html>
<html>

<head>
	<title>Bem Vindo!</title>
	<link rel="stylesheet" href="./styles/style.css">
	<link rel="stylesheet" href="./styles/home.css">
</head>

<body>
	<div id="box">
		<h1>SEJA BEM VINDO! <?= $_SESSION['username'] ?> </h1>
		<a href="logout.php">Sair</a>
		<a href="delete.php?id=<?= $_SESSION['user_id'] ?>"> Excluir Conta</a>
		
	</div>
	
	
	<table>
		<?php foreach ($itens as $iten) : ?>
			<tr>
				<td><?= $iten['iten'] ?></td>
				<td><?= $iten['tamanho'] ?></td>
				<td><a href="delete2.php?id=<?= $iten['id'] ?>"> Apagar </a></td>
				<td><a href="edit.php?id=<?= $iten['id'] ?>"> Editar </a></td>

			</tr>
		<?php endforeach ?>
	</table>
	<main class="box">
		<form action="save.php" method="POST">
			<h2> </h2>
			<input type="text" name="iten" placeholder="Iten">
			<input type="number" name="tamanho" placeholder="Tamanho">
			<input type="Submit" Value="Salvar">
		</form>
	</main>
</body>

</html>