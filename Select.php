<?php
	// Setting up connection with database Geeks
	error_reporting(0);
    header("Access-Control-Allow-Origin: *");
    header('Content-Type:application/json; charset=UTF8'); 

    include('config.ini.php');
    // Check connection
    
	$res = array();
    if (mysqli_connect_errno())
    {
    $res['state'] = "Database connection failed.";
    }
    else{
        
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $id_card = $_POST['id_card'];
    $sql = "SELECT *
            FROM covid
            WHERE firstname = '".$firstname."' and lastname = '".$lastname."' && id_card = '".$id_card."'";
    $result = mysqli_query($con, $sql);
     
     if (mysqli_num_rows($result)>0){
       
            $res[] = mysqli_fetch_assoc($result);
        
        $res['state'] = 'found';
    }
    else{
        $res['state'] = 'not found';
    } 
}


echo json_encode($res); 
mysqli_close($con); 
?>
