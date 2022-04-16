<?php
//@Aplication: ManagerBox;
//@Code->Author: AlanJS;
//@Query file;

include_once('../DbConection.php');
//Todos os arquivos do crud deverão importar o arquivo DBConection;

function tableShow()
{
    echo "<table>";
    echo "<thead>";
    echo "<th>Código interno";
    echo "<th>Descrição";
    echo "<th>Marca";
    echo "<th>Modelo";
    echo "<th>Tamanho";
    echo "<th>Data de entrada";
    echo "<th>Quantidade";
    echo "<th>Código do funcionário";
    echo "<th>Código de barras";
    echo "<th>Preço";
    echo "<th>Ações";
    echo "</thead>";
    showItens();
    echo "</table>";
}

$sqlStatement = "select * from ITENS order by id asc";
$result = $pdo->prepare($sqlStatement);
$result->execute();

function showItens()
{
    global $result;
    while($item = $result->fetch(PDO::FETCH_ASSOC))
    {
        echo "<tbody>";
        echo "<tr>";
        echo "<td>" . $item['ID'] . "</td>";
        echo "<td>" . $item['DESCRICAO'] . "</td>";
        echo "<td>" . $item['MARCA'] . "</td>";
        echo "<td>" . $item['MODELO'] . "</td>";
        echo "<td>" . $item['TAMANHO'] . "</td>";
        echo "<td>" . $item['DATAENTRADA'] . "</td>";
        echo "<td>" . $item['QUANTIDADE'] . " Caixas" . "</td>";
        echo "<td>" . $item['FUNREGISTRADOR'] . "</td>";
        echo "<td>" . $item['CODIGOBARRAS'] . "</td>";
        echo "<td>" . $item['PRECO'] ."</td>";
        echo "<td>" . '<a href="' . "../../app/EditarItem.php?" . $item['ID'] . 
        '"' . ">Editar</a>" . '<a href="' . "../../app/RemoverItem.php?" . " " . $item['ID'] . 
        '"' . ">Remover</a>";
        echo "</tr>";
        echo "</tbody>";
    }
}
?>