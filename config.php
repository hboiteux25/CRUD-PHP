<!--Conexão com base de dados-->
<?php
$db_name = 'db_crud';
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$pdo = new PDO("mysql:dbname=".$db_name.";host=".$db_host, $db_user, $db_pass);
