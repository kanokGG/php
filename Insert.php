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
    
   

    /* $sql="INSERT INTO `covid`(`firstname`, `lastname`, `id_card`, `phone`, `disease`, `sex`, `age`, `address`, `date`, `time`)
     VALUES ("gaew","chant",123456789101,1234567890,"covid","หญิง",21,"สกลนคร",15,10); */
     
    $sql="INSERT INTO covid (`id`, `firstname`, `lastname`, `id_card`, `phone`, `disease`, `sex`, `age`, `address`)
    VALUES ('".$id."','".$firstname."','".$lastname."','".$id_card."','".$phone."','".$disease."','".$sex."','".$age."','".$address."')"; 
    
    if(mysqli_query($con,$sql)){
        echo "insert success";
    }else{
        echo "insert fail";
    }
    mysqli_close($con); 

   
?>
