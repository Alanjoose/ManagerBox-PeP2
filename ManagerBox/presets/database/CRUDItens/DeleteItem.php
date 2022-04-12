<?php
//@Aplication: ManagerBox;
//@Code->Author: AlanJS;
//@Edit Itens file;
include_once('./DbConection.php');

$itemId = $_GET['ID'];
try
{
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    $statement = $pdo->prepare("delete from ITENS where id ='$ietmId'");
    $statement->execute();
}
catch(Exception $default)
{
    echo "Error: " . $default->getMessage();
    echo $deleteException->getDeleteErrMsg();
}
?>