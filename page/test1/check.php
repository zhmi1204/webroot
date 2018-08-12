<?php
    $mysqli = new mysqli("localhost",'root','root','web_userinfo');

    if($mysqli->connect_error){
        echo "Failed to connect to mysql:(".$msyqli->connect_error.")".$mysqli->connect_error;
    }
	if(!$mysqli->query("select * from userinfo")){
		echo "Falied to select!";
	}else{
		echo "Success to select: ".$mysqli->query("select * from userinfo");
	}
?>
