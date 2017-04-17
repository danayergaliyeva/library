<?php
	include('dbconnect.php');
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  $name = test_input($_POST["name"]);
	  $surname = test_input($_POST["surname"]);
	  $faculty = test_input($_POST["faculty"]);
	  $course = test_input($_POST["course"]);
	  $email = test_input($_POST["email"]);
	  $sql = "INSERT INTO students VALUES (NULL,'".$name."','".$surname."','".$course."','".$faculty."','".$email."')";
		if ($conn->query($sql) === TRUE) {
		    echo "<script> alert('Student added'); <script>";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
	   $conn->close();
	}

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
?>
<?
	include 'layouts/header.php';
?>

		<div class="main-area col-sm-12 col-md-12">
			<div class="panel-header">
				<h1 class="menu-title"> Add student </h1>

				<div class="main-form">
					<form action="" method="POST">
			            <input type="text" required placeholder="STUDENT ID">
			            <input type="text" name="name" required placeholder="NAME">
			            <input type="text" name="surname" required placeholder="SURNAME">
			            <input type="text" name="faculty" required placeholder="FACULTY">
			            <input type="text" name="course" required placeholder="COURSE">
			            <input type="email" name="email" required placeholder="EMAIL">
			            <input type="submit" id="sub" name="addstudent" value="ADD STUDENT">
			         </form>
				</div>

			</div>
		</div>
		<div class="footer col-sm-12 col-md-12">
			<h3> &COPY Copyright 2016 - 2017, All Rights Reserved </h3>
		</div>
	</div>
</div>
</body>
</html>