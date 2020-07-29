<?php
	include"connection.php";
?>

<!doctype html>
<html>
<head>
  <title>Exercise</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
		<div class="col-lg-12">
		<h2>Task Details</h2>
			<form action="" name="form1" method="post">
		<table class="table table-bordered">
    <thead>
      <tr>

        <th>Task Name</th>
        <th>Task Deatils</th>
		  <th>Edit</th>
		  <th>Delete</th>
      </tr>
    </thead>
    <tbody>
		
		<?php
		$res=mysqli_query($link,"select *from table1");
		while($row=mysqli_fetch_array($res))
		{
			echo "<tr>";
			echo "<td>"; echo $row["Name"]; echo "</td>";
			echo "<td>"; echo $row["Details"]; echo "</td>";
			echo "<td>"; ?> <a href="update.php?id=<?php echo $row["id"]; ?>"><button type="button" class="btn btn-success">Edit</button></a> <?php echo"</td>";
			echo "<td>"; ?> <a href="delete.php?id=<?php echo $row["id"]; ?>"><button type="button" class="btn btn-danger">Delete</button></a> <?php echo"</td>";
			
			
			echo "</tr>";
		}
		?>
    </tbody>
  </table>

	<button type="submit" formaction="Main.html">Back</button>
		</form>
	</div>	

</body>
</html>