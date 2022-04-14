<?php
//@Aplication: ManagerBox;
//@Code->Author: AlanJS;
//@Create Item file;
include_once('../DbConection.php');

session_start();

$description = $_POST['description'];
$brand = $_POST['brand'];
$model = $_POST['model'];
$size = $_POST['size'];
$entryDate = date('Y:m:d');
$amount = $_POST['amount'];
$barCode = $_POST['barcode'];
$price = $_POST['price'];

try
{
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $statement = $pdo->prepare("insert into ITENS (DESCRICAO, MARCA, MODELO, TAMANHO,
    DATAENTRADA, QUANTIDADE, FUNREGISTRADOR, CODIGOBARRAS, PRECO) values (?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $statement->bindParam(1, $description);
    $statement->bindParam(2, $brand);
    $statement->bindParam(3, $model);
    $statement->bindParam(4, $size);
    $statement->bindParam(5, $entryDate);
    $statement->bindParam(6, $amount);
    $statement->bindParam(7, $_SESSION['ID']);
    $statement->bindParam(8, $barCode);
    $statement->bindParam(9, $price);

    $statement->execute();
    echo $statement->rowCount();
    header('location: ../../app/CadastrarItem.html?msg=Item cadastrado com sucesso');
} 
catch(Exception $default)
{
    echo "Error:" . $default->getMessage();
}

?>