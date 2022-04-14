<?php
//@Aplication: ManagerBox;
//@Code->Author: AlanJS;
//@Delete Itens file;
include_once('../DbConection.php');
session_start();
try
{
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    $statement = $pdo->prepare("delete from FUNCIONARIO where ID=:id");
    $statement->bindValue(':id', $_SESSION['ID']);
    $statement->execute();
    header('location: ../../app/index.html');
}
catch(Exception $default)
{
    echo "Error: " . $default->getMessage();
}
?>