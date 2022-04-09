<?php
//@Aplication: ManagerBox;
//@Code->Author: AlanJS;
//@Query file;

include_once('./DbConection.php');
include_once('../Exceptions/PdoException.php');
//Todos os arquivos do crud deverão importar o arquivo DBConection;

/*
Aqui deverão haver os inputs que receberão os filtros de pesquisa;
*/

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$statement = $pdo->prepare("select * from ITENS");
$statement->execute();

function queryItens()
{
    global $statement;
    global $tuple;
    while($tuple = $statement->fetch(PDO::FETCH_ASSOC)):
        echo "<li>" . $tuple['IDCODIGO'] . $tuple['DESCRICAO'] . $tuple['QUANTIDADE'] ."</li>";
    endwhile;
}
?>