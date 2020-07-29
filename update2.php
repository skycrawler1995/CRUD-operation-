<?php

$N = $_POST['Name'];
$D = $_POST['Details'];


editCatalogEntry($N,$D);
	
function editCatalogEntry($N,$D)
{
	
	$database = mysqli_connect("localhost", "root","") or die("Could not open database");
	mysqli_select_db($database,"php_connection") or die("Could not select database");
	
	$query = "SELECT * FROM table1 WHERE Name='$N';";
	$result= mysqli_query($database,$query)or die("Could not execute sql command.");
	
	if($row=mysqli_fetch_array($result))
		{
			$query="UPDATE table1 SET Details = '$D' WHERE Name = '$N';";
		
		if(mysqli_query($database,$query))
		{
		header("Location: view.php");
		}
		
		else
		{
			mysqli_close($database);
		echo "Fail";
		return "Fail";
		}
	}
		else
		{
			mysqli_close($database);
			echo "Record not found";
			return "Record not found";
				
		}

		
	
}

?>