<?php
$n =$_POST['Name'];
$d =$_POST['Details'];

add($n,$d);

function add($n,$d)
{
	$database = mysqli_connect("localhost", "root", "")
		or die("Could not open database");
	mysqli_select_db($database,"php_connection") or
		die("Could not select database");

	$query = "SELECT * FROM table1 WHERE Name = '$n';";
	
	$result = mysqli_query($database, $query)
		or die ("Could not execute sql command.");
	
	if($row = mysqli_fetch_array($result))
	{
		mysqli_close($database);
		echo "Duplicate record";
		return "Duplicate record.";
	}
	else
	{
		$query = "INSERT INTO table1 (Name,Details)VALUES
		('$n', '$d');";
		
		if(mysqli_query($database,$query))
		{
			header("Location: view.php");
		}
		else{
			mysqli_close($databse);
			echo"fail";
			return "fail.";
		}
	}
}

?>