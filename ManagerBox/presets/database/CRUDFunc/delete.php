<?php

include_once '../database/DbConection.php'; 

$id = $_SESSION['ID'];

try{

	$smt = $pdo->prepare("DELETE FROM FUNCIONARIO WHERE id = ?");
	$smt->bindParam(1,$id);
	$del=$smt->execute();
	header('location: ../../../app/index.html?msg=usuario excluido com sucesso');

} catch (Exception $th){

	echo $th->getMessage();
}


?>