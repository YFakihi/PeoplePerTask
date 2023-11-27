<?php

    //CONNECT TO MYSQL DATABASE USING MYSQLI
    $SERVER ='localhost';
    $Root ='root';
    $Password='';
    $DataBase ='peoplepertask';

    //database connection 
    $con = mysqli_connect($SERVER,$Root,$Password,$DataBase);
    if(!$con)
    {
        die("NOT connecte" . mysqli_connect_error());
    }
    else
    {
        echo 'connection successfully';
    }
?>