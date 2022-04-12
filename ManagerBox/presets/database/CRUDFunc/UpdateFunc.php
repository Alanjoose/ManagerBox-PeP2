<?php
//@Aplication: ManagerBox;
//@Code->Author: AlanJS, Jonatas;
//@Edit Itens file;
include_once('../DbConection.php');


$inputName = $_POST['name'];
$inputEmail = $_POST['email'];
$inputPassword = $_POST['password'];
$id = $_GET['ID'];



define("dbServe", "mysql:host=localhost;dbname=MANAGERBOX");
define("dbUser", "Alan");
define("dbPassword", "qofv1424");

$pdoSec = new PDO("dbServe, dbUser, dbPassword");
$pdoSec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

function updateName()
{
    try
    {
        global $inputName, $pdoSec, $sqlName, $statementSec, $id;
        $sqlName = "update FUNCIONARIO set NOME = :n where ID = '$id'";
        $statementSec->bindValue(':n', $inputName);
        $statementSec = $pdoSec->prepare($sqlName);
        $statementSec->execute();
    }
    catch(Exception $e)
    {
        echo "Error : " . $e->getMessage();
    }
    
}

function updateEmail()
{
    try
    {
        global $inputEmail, $pdoSec, $sqlName, $statementSec, $id;
        $sqlEmail = "update FUNCIONARIO set EMAIL = :e where ID = '$id'";
        $statementSec->bindValue(':e', $$inputEmail);
        $statementSec = $pdoSec->prepare($sqlEmail);
        $statementSec->execute();
    }
    catch(Exception $e)
    {
        echo "Error : " . $e->getMessage();
    }
    
}

function updatePassword()
{
    try
    {
        global $inputPassword, $pdoSec, $sqlPassword, $statementSec, $id;
        $sqlPassword = "update FUNCIONARIO set SENHA = :s where ID = '$id'";
        $statementSec->bindValue(':s', $$inputPassword);
        $statementSec = $pdoSec->prepare($sqlEmail);
        $statementSec->execute();
    }
    catch(Exception $e)
    {
        echo "Error : " . $e->getMessage();
    }
    
}
?>