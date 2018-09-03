<?php

    try {
        $conn = new mysqli("localhost",'root','root','web_usrinfo');
    }
    catch (Exception $e) {
        die("数据库连接失败");
    }

    $conn->select_db('loginfo');
    $username = $_POST['username'];
    $password= $_POST['password'];
    $sql = "select ('username','password') from loginfo where ('username'=$username ,'password'=$password)";
    $result = $conn->query($sql);

	$result->close();
	$mysqli->close();
?>