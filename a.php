<?php
$dsn = 'mysql:host=localhost;dbname=test';
$user = 'root';
$password = 'root';
$db = new PDO($dsn, $user, $password);
$sql = 'SELECT * from test';
$st = $db->query($sql);
$row = $st->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="b.php" method="post">
    <div>姓名：<input type="text" name="admin"/></div>
    <div>电话：<input type="text" name="tel"/></div>
    <div>邮箱：<input type="text" name="email"/></div>
    <input type="submit" value="发布"/>
    <?php foreach ($row as $r){?>
    <table>
        <li><?php echo $r['admin']?></li>
        <li><?php echo $r['tel']?></li>
        <li><?php echo $r['email']?></li>
    </table>
<?php }?>
</form>
</body>
</html>