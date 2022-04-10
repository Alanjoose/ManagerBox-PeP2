<?php
//@Aplication: ManagerBox;
//@Code->Author: AlanJS;
//@Create Item file;
include_once('./DbConection.php');
include_once('../../Exceptions/PdoException.php');
//Todos os arquivos do crud deverão importar o arquivo DBConection;


/*
@TODO: Inserir nesse bloco as variáveis que serão captadas
pelos inputs no html devidamente filtrados;
*/
$pdoException = new PdoException();
$insertException = new PdoException();

try
{
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::CASE_UPPER, PDO::ERRMODE_EXCEPTION);
    $statement = $pdo->prepare("//Inserir sql statement aqui;");
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