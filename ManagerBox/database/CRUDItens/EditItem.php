<?php
//@Aplication: ManagerBox;
//@Code->Author: AlanJS;
//@Edit Itens file;
include_once('./DbConection.php');
session_start();
$pdoException = new PdoException();
$updateException = new PdoException();


try
{
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::CASE_UPPER, PDO::ERRMODE_EXCEPTION);
    $statement = $pdo->prepare("//Inserir sql statement aqui;");

    //@TODO: Inserir bind values nos campos que equivalem aos novos valores
    //dos campos referidos na tabela dentro do sql statement;
    
    $statement->bindValue(":ID", //Id da sessão);
    $statement->bindValue(":p", $);
    $statement->execute();
    header('location: EditItens.html?msg=Registro atualizado com sucesso');
}
catch(Exception $default)
{
    echo "Error: " . $default->getMessage();
    echo $updateException->getUpdateErrMsg();
}
?>