<?php
	// Setting up connection with database Geeks
	error_reporting(0);
    header("Access-Control-Allow-Origin: *");
    header('Content-Type:application/json; charset=UTF8'); 

    include('config.ini.php');
    // Check connection
    
    $id_card = $_POST['id_card'];
   
    $sql = "SELECT * FROM userpage WHERE id_card = '".$id_card."'"; 
	
	$result = mysqli_query($con, $sql); 
	$dataJ = [];
	#echo(mysqli_num_rows($result));
	if (mysqli_num_rows($result)>0){ 

        $data = array();
		$data['status'] = "found";
		while ($row = $result->fetch_assoc()){
            
			$data['firstname'] = $row['firstname'];
            $data['lastname'] = $row['lastname'];
            $data['id_card'] = $row['id_card'];
            $data['disease'] = $row['disease'];
            $data['phone'] = $row['phone'];
            $data['sex'] = $row['sex'];
            $data['age'] = $row['age'];
            $data['address'] = $row['address'];

    }
		header('Content-Type: application/json');
		echo json_encode($data);
        //echo($sql);
		#echo "$dataJ";
}
		mysqli_close($con); 

?>
