<?php 
    $host = "localhost";
    $username = "root";
    $password = "";
    $DBname = "covid";

    $con = mysqli_connect($host,$username,$password,$DBname);
    mysqli_set_charset($con,'utf8');

    if(!$con){
        echo "Database connection failed.";
        exit;
    }

   /*  if($con){
        echo "work";
    }else{
        echo " No";
    }  */
?>
