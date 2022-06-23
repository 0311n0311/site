
<?php 
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING); // Удаляет все лишнее и записываем значение в переменную //$login
$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

if(mb_strlen($name) < 5){
	echo "Недопустимая длина имени";
	exit();
}
else if(mb_strlen($login) < 5|| mb_strlen($login) > 90){
	echo "Недопустимая длина логина.";
	exit();
}
if(mb_strlen($password) < 5 || mb_strlen($password) > 8){
	echo "Недопустимая длина пароля(от 5 до 8 символов)";
	exit();
}
$password = md5($password."ghgddgfs");

$mysql = new mysqli('localhost', 'root', '', 'users');

$mysql->query ("INSERT INTO `users`(`name`,`login`,`password`) VALUES('$name','$login','$password')");
header('Location:index.php');




$keys = "";
$values = "";
$first = 1;
$allowed = array("name", "login","password");
foreach($_POST as $key => $array) {
$allowedKey = array_search($key,$allowed);
if($allowedKey) {
       if($first == 0) {
              $keys .= ",";
              $values .= ",";
       }
       $keys .= $allowedKey;
       $values .= "'".$value."'";
$first = 0;
}
}
 ?>