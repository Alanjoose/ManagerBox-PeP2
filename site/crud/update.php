s<?php

session_start();

include 'conn.php';

$stmt = $pdo->prepare('update itens set iten =?, tamanho =? where id =?');
$stmt->execute([$_POST['iten'], $_POST['tamanho'], $_POST['id']]);

header('location: home.php');


?>