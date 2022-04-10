<?php

include 'conn.php'; 

$id = $_GET['id'];
var_dump($id);

try{

	$smt = $pdo->prepare("DELETE FROM USUARIO WHERE id =?");
	$smt->bindParam(1,$id);
	$del=$smt->execute();

} catch (Exception $th){

	echo $th;
}

header('location: cadastrar.php');

?>