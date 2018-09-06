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
    $sql = "select username from loginfo where username = '$username'";
    $result = $conn->query($sql);
    if($result->num_rows){
           echo "用户名已存在！<br/>";
           $result->close();
    }else{
        $result->close();
        $sql = "insert into loginfo(username,password) values('$username','$password')";
        $results = $conn->query($sql);
        if($result){
            echo "注册成功";
        }
    }

	$conn->close();
?>