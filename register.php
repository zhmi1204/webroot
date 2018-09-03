<?php
    header ( "Content-type:text/html;charset=utf-8" );
    try {
        $conn = new mysqli("localhost",'root','root','web_usrinfo');
    }
    catch (Exception $e) {
        die("数据库连接失败");
    }
//    $conn->query("SET NAMES 'UTF8'");
    $username = $_POST['username'];
    $password= $_POST['password'];
    $sql = "INSERT INTO loginfo VALUES ('','{$username}' ,'{$password}')";
    $result = $conn->query($sql);
    // if ($result > 0) {
    //     echo "<script> alert('注册成功，返回登录页面');
    //                     window.location='index.html'; //跳转到注册页
    //          </script>";
    // } else {
    //     echo "<script> alert('注册失败，返回注册页面');
    //                     window.history.back(); //返回上一页
    //          </script>";
    // }
    echo("注册成功！！！<br/><a href='index.html'>点击登录</a>")

?>