<?php
//@Aplication: ManagerBox;
//@Code->Author: Jonatas;
//@Edit Home file;
include_once '../presets/database/DbConection.php';
session_start();
if(!isset($_SESSION['login']) || $_SESSION['login'] !== true)
{
	header('location: ./login.html');
	exit();
}
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
		<h1>SEJA BEM VINDO <?= $_SESSION['NOME']?> !</h1>
		<a href="../presets/database/CRUDFunc/logout.php">Sair</a>
		<a href="../database/CRUDFunc/DeleteFunc.php"> Excluir Conta</a>
		<a href="./CadastrarItem.html">Cadastrar item</a>
		
	</div>

	<ul>
		<?php
		$listagem = $pdo->prepare("select * from ITENS");
		$listagem->execute();
		while($lista = $listagem->fetch(PDO::FETCH_ASSOC)):
		?>
		<li><?php echo $list['ID']?> - <?php echo $list['DESCRICAO']?> - <?php echo $list['MARCA']?>
		- <?php echo $list['MODELO']?> - <?php echo $list['TAMANHO']?> - <?php echo $list['DATAENTRADA']?>
		- <?php echo $list['QUANTIDADE']?> - <?php echo $list['FUNREGISTRADOR']?> - <?php echo $list['CODIGOBARRAS']?>
		- <?php echo $list['PRECO']?></li>
		<?php
		endwhile;
		?>
	</ul>

	<main class="box">
		<form action="save.php" method="POST">
			<h2> </h2>
			<input type="text" name="iten" placeholder="Iten">
			<input type="number" name="tamanho" placeholder="Tamanho">
			<input type="Submit" Value="Salvar">
		</form>
		<form action="../presets/database/CRUDItens/CreateItem.php" method="POST">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastrar Item</h1>
                    </div>
                    <div class="voltar-button">
                        <button><a href="../index.html">Voltar</a></button>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="modelo">DESCRIÇÃO</label>
                        <input id="email" type="text" name="description" placeholder="Descreva o produto" required>
                    </div>

                    <div class="input-box">
                        <label for="brand">MARCA</label>
                        <input id="brand" type="text" name="brand" placeholder="Digite a marca do item">
                    </div>
                    <div class="input-box">
                        <label for="model">MODELO</label>
                        <input id="model" type="text" name="model" placeholder="Ex: esportivo/casual..." required>
                    </div>   

                    <div class="input-box">
                        <label for="size">TAMANHO</label>
                        <input id="size" type="number" name="size" placeholder="Ex: 38" required>
                    </div>

                    <div class="input-box">
                        <label for="amount">QUANTIDADE</label>
                        <input id="amount" type="number" name="amount" placeholder="Quantidade de caixas" min="1" max="999">
                        <label for="null">NULO:</label>
                        <input type="checkbox" name="null" id="null" title="Caso a quantidade seja nula, marque aqui." value="0">
                    </div>

                    <div class="input-box">
                        <label for="barcode">CÓDIGO DE BARRAS</label>
                        <input id="barcode" type="number" name="barcode" placeholder="Somente números" size="13" required>
                    </div>

                    <div class="input-box">
                        <label for="price">PREÇO</label>
                        <input id="price" type="number" name="price" placeholder="Ex: 70.90" required>
                    </div>
                </div>
                <div class="continue-button">
                    <input type="submit" name="cadastrar" value="Cadastrar">
                </div>
            </form>
	</main>
</body>

</html>