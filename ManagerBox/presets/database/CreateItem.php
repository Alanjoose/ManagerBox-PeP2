<?php
//@Aplication: ManagerBox;
//@Code->Author: AlanJS;
//@Create Item file;
include_once('DbConection.php');
include_once('../Exceptions/PdoException.php');
//Todos os arquivos do crud deverão importar o arquivo DBConection;

$pdoException = new PdoException();
try
{
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::CASE_UPPER, PDO::ERRMODE_EXCEPTION);
    $statement = $pdo->prepare("");
    $statement->execute();
    echo $statement->rowCount();
    header('location: CreateItem.html?msg=Item adicionado com sucesso');
} catch(Exception $default)
{
    echo $pdoException->getErrorMsg();
    echo "Error:" . $default->getMessage();
}

?>