<?php
    error_reporting(0);
    header("Access-Control-Allow-Origin: *");
    header('Content-Type:application/json; charset=UTF8'); 

    include('config.ini.php');

    $score1=$_POST['score1'];
    $score2=$_POST['score2'];
    $score3=$_POST['score3'];
    $score4=$_POST['score4'];
    $score5=$_POST['score5'];
    $score6=$_POST['score6'];
    $score7=$_POST['score7'];
    $score8=$_POST['score8'];
    $score9=$_POST['score9'];
    $score10=$_POST['score10'];
    $id_card=$_POST['id_card'];
    $id=$_POST['id'];
    $sum_score=$_POST['sum_score'];


    $sql="INSERT INTO `evaluatepage` (`id_card`, `id`, `score1`, `score2`, `score3`, `score4`, `score5`, `score6`, `score7`, `score8`, `score9`, `score10`, `sum_score`) 
    VALUES ('".$id_card."', '".$id."', '".$score1."', '".$score2."', '".$score3."', '".$score4."', '".$score5."', '".$score6."', '".$score7."', '".$score8."', '".$score9."', '".$score10."', '".$sum_score."')"; 

    /*INSERT INTO `evaluatepage` (`id_card`, `id`, `score1`, `score2`, `score3`, `score4`, `score5`, 
    `score6`, `score7`, `score8`, `score9`, `score10`, `sum_score`) VALUES (33, 27, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 2)*/

    if(mysqli_query($con,$sql)){
        echo "insert success";
    }else{
        echo "insert fail";
    }
    echo($sql);
    mysqli_close($con);

   
?>