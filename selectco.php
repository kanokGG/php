<?php
	// Setting up connection with database Geeks
	error_reporting(0);
    header("Access-Control-Allow-Origin: *");
    header('Content-Type:application/json; charset=UTF8'); 

    include('config.ini.php');

	if (mysqli_connect_errno())
	{
		$res['state'] = "Database connection failed.";
	}
	else{
		$firstname = $_GET['firstname'];
		$lastname = $_GET['lastname'];
		$id_card = $_GET['id_card'];
		
		$sql = "SELECT * FROM userpage WHERE id_card = '".$id_card."'  ";

		$result = mysqli_query($con, $sql);
		$dataJ = [];
		if (mysqli_num_rows($result)>0){
			while ($data = mysqli_fetch_assoc($result)){
				$dataJ[] = $data;
			}
			header('Content-Type: application/json');
			echo json_encode($dataJ);
	  } 
	}
		// Connection close 
		mysqli_close($con); 
	?> 