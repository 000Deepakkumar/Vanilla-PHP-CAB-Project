
<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
		<?php

		$server = "localhost";
		$user = "root";
		$password= "";
		$database = "cab";
		$conn = mysqli_connect($server, $user , $password, $database);
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all values from the form data(input)
		$S_l = $_REQUEST['from'];
		$D_l = $_REQUEST['to'];
		$P_name = $_REQUEST['p_name'];
		$Date = $_REQUEST['date'];
		$From = $_REQUEST['f_time'];
		
		// Performing insert query execution
		$sql = "INSERT INTO info(Source_Location,Destination_Location,Number_of_Passenger,Date,Time) VALUES ('$S_l', 
			'$D_l','$P_name','$Date','$From')";
		
		if(mysqli_query($conn, $sql)){
			header("Location: http://localhost/cab/fetch.php");; 
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
</body>

</html>

