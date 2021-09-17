<?php
	// Setting up connection with database Geeks
	error_reporting(0);
    header("Access-Control-Allow-Origin: *");
    header('Content-Type:application/json; charset=UTF8'); 

    include('config.ini.php');
    // Check connection
    if (!$con) {
    echo " Database Connection Fail";
    exit;
    }
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $id_card = $_POST['id_card'];

    $sql = "UPDATE userpage SET 
    firstname = '".$firstname."',
    lastname = '".$lastname."'
    WHERE id_card = '".$id_card."'";

$response = array();

if (mysqli_query($con, $sql)) {
    $response['status'] = 'success';
    } else {
        $response['status'] = 'fail';
        $response['err'] = mysqli_error($con);
        }

        mysqli_close($con);
        echo json_encode($response);

        //echo($sql);
?>