<?php
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

$password = md5($password."ghgddgfs");

$mysql = new mysqli('localhost', 'root', '', 'users');

$result = $mysql-> query("SELECT * FROM `users` WHERE `login`='$login' AND `password`='$password'");
$users=$result->fetch_assoc();
if (mb_strlen($users)=='0')
{
	echo "Такой пользователь не найден";
	exit();
}

setcookie ('user', $users['name'], time() + 3600,"/");

header('Location:Личный кабинет.html');
 ?>
