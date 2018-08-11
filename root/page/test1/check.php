<?php
    $connect = mysqli_connect("localhost",'root','root');

    if($connect){
        echo "success!";
    }else{
        echo "failed!";
    }
?>