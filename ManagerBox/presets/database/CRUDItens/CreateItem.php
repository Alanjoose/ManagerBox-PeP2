<?php
//@Aplication: ManagerBox;
//@Code->Author: AlanJS;
//@Create Item file;
include_once('./DbConection.php');
include_once('../../Exceptions/PdoException.php');
//Todos os arquivos do crud deverão importar o arquivo DBConection;

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
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::CASE_UPPER, PDO::ERRMODE_EXCEPTION);

    $statement = $pdo->prepare("insert into ITENS (DESCRICAO, MARCA, MODELO, TAMANHO,
    DATAENTRADA, QUANTIDADE, CODIGOBARRAS, PRECO) values ('$description', '$brand', 
    '$model', '$size', '$entryDate', '$amount', '$barCode', '$price'");
    
    $statement->execute();
    echo $statement->rowCount();
    header('location: CreateItem.html?msg=Item adicionado com sucesso');
} 
catch(Exception $default)
{
    echo $pdoException->getErrorMsg();
    echo $insertException->getInsertErrMsg();
    echo "Error:" . $default->getMessage();
}

?>