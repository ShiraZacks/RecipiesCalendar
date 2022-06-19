<?php
    $serverName = "localhost";  
    $userName = "root";  //default user name
    $password = "";
    $DBName = "recipies";  //name of database in mysql
    $conn = mysqli_connect($serverName,$userName,$password,$DBName)or die("Sorry, the database is not connected."); //the name we used in the ajaxWDB is $conn
    if(mysqli_connect_errno()){
        echo "failed to connct to MySQL" . mysqli_connect_error();
        exit();
    }
?>