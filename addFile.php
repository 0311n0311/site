<?php
$photo_name = filter_var(trim($_POST['photo_name']), FILTER_SANITIZE_STRING);
if(!empty($_FILES['file'])){
    $file =$_FILES['file'];
    $photo_name = $file['photo_name'];
    $photo_name = __DIR__.'/image/'.$name;

    if(!nove_uploaded_file($file['tmp_name'],$photo_name)){
        echo 'Файл не смог загрузиться ';
}
}
$mysql = new mysqli('localhost', 'root', '', 'users');

$mysql->query ("INSERT INTO `photos`(`photo_name`) VALUES ('$photo_name')");


header('Location:index.php')

?>