<?php
	include('dbconnect.php');
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  $name = $_POST["name"];
	  $type = $_POST["type"];
	  if(empty($_POST["type"])){
	  	$type = 'name';
	  }
	  $sql = "SELECT * FROM students where ".$type." like '%".$name."%'";
	 
	  $result = $conn->query($sql);
		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["email"]. "<br>";
		    }
		} else {
		    echo "0 results";
		}
		$conn->close();
	}
?>
<!DOCTYPE HTML>
<php lang="en">
<head>
	<meta charset="UTF-8">
	<title>SDU Library</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="libs/css/bootstrap.min.css">
	<link rel='shortcut icon' type='image/x-icon' href='img/icon.png'/>
</head>
<body>

	<form action="" method="post">
		<input type="text" placeholder="search" name="name">
		<input type="text" placeholder="search" name="type">
		<input type="submit" value="ok">
	</form>


</body>
</html>
