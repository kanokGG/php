<?php

// Setting up connection with database Geeks
error_reporting(0);
header("Access-Control-Allow-Origin: *");
header('Content-Type:application/json; charset=UTF8'); 

include('config.ini.php');
// Check connection

if(mysqli_connect_errno()){
    echo "Database connection failed.";
}
//$word ='15';
$word = $_POST['word']; //ผู้ใช้กรอก 
 $sql = "select * from userpage where id_card like '%".$word."%'"; // เอาแค่ Id_card ที่ตรงกับ word ที่กรอกเข้ามา

 $result = mysqli_query($con,$sql);
 if($result!=true){
     header('Content-Type:application/json; charset=UTF8');
     echo json_encode(array('status' => 'notfound'));
 }
 else{
     $data = array();
     $data['status'] = "found";
     while($row = $result->fetch_assoc()){
         $data['id'][] = $row; // ส่งค่าที่ได้เป็น id
     }

     header('Content-Type:application/json; charset=UTF8');
     echo json_encode($data);
 }
 mysqli_close($con);

?>