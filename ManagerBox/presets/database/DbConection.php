<?php
//@Aplication: ManagerBox;
//@Code->Author: AlanJS;
//@DBConect file;

define("dbServe", "mysql:host=localhost;dbname=MANAGERBOX");
define("dbUser", "Alan");
define("dbPassword", "qofv1424");
/*
@TODO:
Caso não tenha aplicado a padronização em seu banco não esquecer de alterar os valores
 das constantes para utilizar o banco gerado pelo script sql;
*/

$pdo = new PDO(dbServe, dbUser, dbPassword);
?>