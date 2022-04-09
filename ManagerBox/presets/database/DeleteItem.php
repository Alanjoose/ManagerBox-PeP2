<?php
//@Aplication: ManagerBox;
//@Code->Author: AlanJS;
//@Edit Itens file;
include_once('./DbConection.php');
include_once('../Exceptions/PdoException.php');
session_start();
$pdoException = new PdoException();
$deleteException = new PdoException();

$itemId = $_POST['IDCodigo'];
try
{
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    $statement = $pdo->prepare("delete from ITENS where id='$itemId'");
    $statement->execute();
}
catch(Exception $default)
{
    echo "Error: " . $default->getMessage();
    echo $deleteException->getDeleteErrMsg();
}
?>