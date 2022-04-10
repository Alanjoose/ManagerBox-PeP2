<?php

session_start();

include 'conn.php';

$stmt = $pdo->prepare('INSERT INTO itens (iten, tamanho, user_id) VALUES (?,?,?)');
$stmt->execute([$_POST['iten'], $_POST['tamanho'], $_SESSION['user_id']]);

header('location: index.php');


?>