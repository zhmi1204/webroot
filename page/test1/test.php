<!DOCTYPE html>
<head>
<title>
测试页面
</title>
</head>

<body>
<?php
echo "准备连接...";
?>

<!--打开连接-->
<?php
  $con = new mysqli('127.0.0.1','zhmi1204','zm931204','web_usrinfo');
?>

<!-- 输入信息-->
<?php
$username = $_POST['username'];
$password = $_POST['password'];

?>

<!--验证数据库-->
<?php
/*
echo $username;
echo "123'$username'123";
echo $password;
*/

$query = "SELECT * FROM loginfo where name = '$username' and password = '$password'";
$result = $con->query($query);
//echo $result;

//if (!$result) die("未注册账号！".$con->error);
//else {
//  echo "登陆成功！";
//}
?>

<!--关闭连接-->
<?php
$con->close();
?>

<?php
echo "连接成功！";
?>
</body>
