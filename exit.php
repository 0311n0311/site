<?php 

setcookie('user', $users['name'], time() - 3600, "/");
header('Location: index.php');

 ?>