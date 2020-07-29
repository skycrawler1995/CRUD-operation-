<?php
extract($_GET);

$servername = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "php_connection";

// Procedural
$dbcon = mysqli_connect($servername, $dbuser, $dbpass, $dbname);
if(!$dbcon) {
	die("fail 3");
} 

$sql = "SELECT * FROM `table1` WHERE `id`='$id'";

$result = mysqli_query($dbcon, $sql);

if (mysqli_num_rows($result) > 0) {
	$row = mysqli_fetch_assoc($result);
} else {
	echo "Error: no record";
}

mysqli_close($dbcon);

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
	<div class="container">
		<div class="col-lg-8">
  <h2>Task List php application</h2>
  <form action="" name="form1" method="post">
    <div class="form-group">
      <label for="Name">Task Name:</label>
      <input type="text" class="form-control" required="" name="Name" id="Name" value="<?php echo $row["Name"]; ?>" readonly>
    </div>
    <div class="form-group">
      <label for="Details">Task Details:</label>
      <input type="text" class="form-control" required="" name="Details" id="Details" value="<?php echo $row["Details"]; ?>">
    </div>
		<button type="submit" formaction="update2.php">Update</button>
	<button type="submit" formaction="view.php">Back</button>	
  </form>
</div>
</div>
	
</body>

</html>

