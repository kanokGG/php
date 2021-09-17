<?php
	// Setting up connection with database Geeks
	error_reporting(0);
    header("Access-Control-Allow-Origin: *");
    header('Content-Type:application/json; charset=UTF8'); 

    include('config.ini.php');
    // Check connection
    
	$res = array();
    
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
    $id_card = $_POST['id_card'];

    $sql = "SELECT * FROM userpage WHERE id_card = '".$id_card."' and firstname = '".$firstname."' and lastname = '".$lastname."'"; 
	
	// Execute the query and store the result set 
	$result = mysqli_query($con, $sql); 
	
	$dataJ = [];
	#echo(mysqli_num_rows($result));
	if (mysqli_num_rows($result)>0){ 
		$res[] = 'found';
		while ($data = mysqli_fetch_array($result)){
				$res[] = $data;
			} 
		} 
	else{
				$res[] = 'not found';
		}
		header('Content-Type: application/json');
		echo json_encode($res);
		#echo "$dataJ";
		mysqli_close($con); 
?>
