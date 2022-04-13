<?php
//@Aplication: ManagerBox;
//@Code->Author: AlanJS;
//@Delete Itens file;
include_once('../CRUDFunc/DeleteFunc.php');

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
}
?>