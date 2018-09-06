<?php
    header ( "Content-type:text/html;charset=utf-8" );
    try {
        $conn = new mysqli("localhost",'root','root','web_usrinfo');
    }
    catch (Exception $e) {
        die("数据库连接失败<br/>");
    }
    $username = $_POST['username'];
    $password= $_POST['password'];

    //注意：单引可以解释$而双引不行
    $sql = "select * from loginfo where username = '$username'";
    $result = $conn->query($sql);
    if($result->num_rows){
        while ($row = mysqli_fetch_assoc($result)){
            if (strcmp($row['password'] , $password) == 0){
                echo "登陆成功!<br/>";
            }else{
                echo "密码错误";
            }
        }
    }else{
        echo "用户名不存在！<br/>";
    }
    $result->close();
	$conn->close();
?>