<?php
session_start();
require "db.php"; //подключении базы данных с описанными классами
$db=new Database();//присваивание базы данных переменной 

$sql ="SELECT * FROM users WHERE id = :id";
$parm = array("id"=>$_GET["id"]);

$db-> delete($sql,$parm);
header('Location:index.php');
?>