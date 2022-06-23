<?php
session_start();
require "db.php"; //подключении базы данных с описанными классами
$db=new Database();//присваивание базы данных переменной 

$sql ="SELECT * FROM employees WHERE ID_employees = :id";
$parm = array("id"=>$_GET["id"]);
$masret = $db->get_all($sql,$parm);
?>