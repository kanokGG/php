<?php
	// Setting up connection with database Geeks
	error_reporting(0);
    header("Access-Control-Allow-Origin: *");
    header('Content-Type:application/json; charset=UTF8'); 

    include('config.ini.php');
	// Check connection
	if (mysqli_connect_errno())
	{
		echo "Database connection failed.";
	}

	$id_card = $_POST['id_card'];
	// query to fetch Username and Password from
	// the table geek
	$sql = "SELECT  `evaluatepage` WHERE id_card = '".$id_card."'";
	//$sql = "SELECT COUNT(id_score) AS scum, COUNT(IF(sum_score<6,1,NULL)) AS safe,COUNT(IF(sum_score>=6,1,NULL)) AS unsafe  FROM `evaluatepage` WHERE id_card = '".$id_card."' && date_do LIKE '".$date_do."%' ";

	// Execute the query and store the result set
	$result = mysqli_query($con, $sql);
  $dataJ = [];
	if (mysqli_num_rows($result)>0){


		while ($data = mysqli_fetch_assoc($result)){
			$dataJ[] = $data;
		}

		header('Content-Type: application/json');
		echo json_encode($dataJ);
  }

	// Connection close
	mysqli_close($con);
?>