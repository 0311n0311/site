<?php 
$phone = filter_var(trim($_POST['phone']), FILTER_SANITIZE_STRING); 
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$text = filter_var(trim($_POST['text']), FILTER_SANITIZE_STRING);

if(mb_strlen($name) < 5){
	echo "Недопустимая длина имени";
	exit();
}
else if(mb_strlen($phone) < 5|| mb_strlen($phone) > 32){
	echo "Недопустимая длина номера телефона.";
	exit();
}if(mb_strlen($email) < 5 || mb_strlen($email) > 32){
	echo "Недопустимая длина эл.почты";
	exit();
}
if(mb_strlen($text) ==0){
	echo "Заполните пустое поле";
	exit();
}

$mysql = new mysqli('localhost', 'root', '', 'users');

$mysql->query ("INSERT INTO `feedback`(`name`,`phone`,`email`,`text`) VALUES('$name','$phone','$email',`text`)");

header('Location: /');
 ?>