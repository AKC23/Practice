<!DOCTYPE html>
<html>
<head>
	<title>
	</title>
</head>
<body>
	<?php 
		$servername = "localhost"; 
		$username = "root"; 
		$password = "";
		$dbname = "myDB"; 
		// Create connection 
		$conn = mysqli_connect($servername, $username, $password, $dbname); 
		// Check connection 
		if (!$conn) 
		{ 
			die("Connection failed: " . mysqli_connect_error()); 
		} 
		$sql = "INSERT INTO person (FirstName, LastName, Age) VALUES ('Kaneki', 'Ken', '18')"; 
		if (mysqli_query($conn, $sql)) 
		{ 
			echo "New record created successfully"; 
		} 
		else 
		{ 
			echo "Error: " . $sql . "<br>" . mysqli_error($conn); 
		} 
		mysqli_close($conn); 
	?>
</body>
</html>