<?php
require "Database.php";
$host = 'localhost';
$database = 'users';
$charset = 'utf8';
$user = 'root';
$password = '';

$link = mysqli_connect($host, $user, $password, "users");

if($link)
echo 'Соединение установлено.';
else
die('Ошибка подключения к серверу баз данных.');
?>