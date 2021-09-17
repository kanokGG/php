<?php 
    $host = "localhost";
    $username = "id17544265_gaew";
    $password = "wtpOMeT2rs(u*Xm1";
    $DBname = "id17544265_save";

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