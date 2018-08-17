<?php
    $mysqli = new mysqli("localhost",'root','root','web_usrinfo');
    if($mysqli->connect_error){
        echo "Failed to connect to mysql:(".$msyqli->connect_error.")".$mysqli->connect_error;
    }
    $result = $mysqli->query("select * from loginfo");
	if(!$result){
		echo "Falied to select!";
	}else{
		$row = $result->fetch_assoc();
		echo "Sucess to select!"."</br>"."username: ".$row['username']."</br>"."password: ".$row['password'];
	}

	$result->close();
	$mysqli->close();
?>
