<?php
    error_reporting(0);
    header("Access-Control-Allow-Origin: *");
    header('Content-Type:application/json; charset=UTF8'); 

    include('config.ini.php');

    $id=$_POST['id'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $id_card=$_POST['id_card'];
    $phone=$_POST['phone'];
    $disease=$_POST['disease'];
    $sex=$_POST['sex'];
    $age=$_POST['age'];
    $address=$_POST['address'];
    
   

    
     /* INSERT INTO `userpage`(`firstname`, `lastname`, `id_card`, `phone`, `disease`, `sex`, `age`, `address`)
     VALUES ("gaew","chant",123456781,12347890,"covid","หญิง",21,"สกลนคร")
      */
    $sql="INSERT INTO `userpage`(`firstname`, `lastname`, `id_card`, `phone`, `disease`, `sex`, `age`, `address`)
    VALUES ('".$firstname."', '".$lastname."','".$id_card."', '".$phone."','".$disease."','".$sex."','".$age."','".$address."')"; 
    
    if(mysqli_query($con,$sql)){
        echo "insert success";
    }else{
        echo "insert fail";
    }
    mysqli_close($con); 

   
?>