<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=test','root','root');
}catch(PDOException $e){
    echo '1111';
}
$POST = $_POST;
//var_dump($POST);
$admin = $POST['admin'];
$tel = $POST['tel'];
$email = $POST['email'];
//var_dump($admin,$tel,$email);
$sql = "insert into test (admin,tel,email) values ('$admin','$tel','$email')";
//$sql = "insert into test(admin,tel,email)values('8','8','8')";
//var_dump($sql);die();
$row = $db->exec($sql);
var_dump($row);
header("location:a.php");
//


//   var_dump($row);