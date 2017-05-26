<?php
include('../dbconnect.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if($_POST["operation"] == "addnews"){
  	$title = test_input($_POST["title"]);
	$context = test_input($_POST["context"]);
	$date = $_POST["date"];
    $sql = "INSERT INTO news VALUES (NULL,'".$title."','".$context."','".$date."')";
	if ($conn->query($sql) === TRUE) {
	    echo "SUCCESS";
	}else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
   $conn->close();
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>