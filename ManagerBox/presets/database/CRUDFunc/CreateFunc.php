<?php
//@Aplication: ManagerBox;
//@Code->Author: AlanJS;
//@Create Func file;
include_once('../DbConection.php'); // /database/DbConection.php;
//Todos os arquivos do crud deverão importar o arquivo DBConection;

/*
@TODO: Inserir nesse bloco as variáveis que serão captadas
pelos inputs no html devidamente filtrados;
*/

$inputCpf = $_POST['cpf'];
$inputName = $_POST['name'];
$inputEmail = $_POST['email'];
$inputSenha = $_POST['password'];
$date = date("Y-m-d");

try
{
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION,);
    $statement = $pdo->prepare("insert into FUNCIONARIO(CPF, NOME, EMAIL, SENHA, DATACRIACAO)
     values(?, ?, ?, ?, ?)");
    $statement->bindParam(1, $inputCpf);
    $statement->bindParam(2, $inputName);
    $statement->bindParam(3, $inputEmail);
    $statement->bindParam(4, $inputSenha);
    $statement->bindParam(5, $date);
    $statement->execute();
    echo $statement->rowCount();
    header('location: ../../../app/cadastrar.html?msg=Funcionario cadastrado com sucesso');
}
catch(Exception $default)
{
    echo "Error : " . $default->getMessage();
}
?>