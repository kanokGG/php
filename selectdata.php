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
	//$id_card = '11';
	$id_card = $_POST['id_card'];
	// query to fetch Username and Password from

	$status = $_POST['status'];
	// the table geek
	$sql = "SELECT date_do,sum_score FROM `evaluatepage` WHERE id_card='".$id_card."' "; 


	// Execute the query and store the result set
	$result = mysqli_query($con, $sql);
  //$dataJ = [];

  if($result!=true){
	header('Content-Type: application/json');
	echo json_encode(array('status'=>'notfound'));
  }
  else{
	  $data = array();
	  //$data['status']= "found";
	  while($row = $result->fetch_assoc()){
		$data[] = $row;
		
	  }
	  
	header('Content-Type: application/json');
	echo json_encode($data);
  }

	// Connection close
	mysqli_close($con);
?>