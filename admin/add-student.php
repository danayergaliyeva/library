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
<div class="container">
	<div class="row">
		<div class="logo col-md-2 col-sm-2 col-xs-4" >
			<img src="img/logo.png" alt="">
		</div>
		<div class="menu"> 
			<ul>
				<li class="col-md-1 col-sm-2 col-xs-4">
						<a href="index.php">
							<i> <img src="img/book.png" alt=""> </i>
							<span> Home page  <span>
						</a>
				</li> 
				<li class="col-md-1 col-sm-1 col-xs-4"> 
						<a href="give.php">
							<i> <img src="img/give.png" alt=""> </i>
							<span> Give book </span>
						</a>
				</li>
				<li class="col-md-1 col-sm-1 col-xs-4"> 
						<a href="take.php">
							<i> <img src="img/return.png" alt=""> </i>
							<span> Take book </span>
						</a>
				</li>				
				<li class="col-md-1 col-sm-1 col-xs-4"> 
						<a href="add-student.php">
							<i> <img src="img/add.png" alt=""> </i>
							<span> Add student </span>
						</a>
				</li>
				<li class="col-md-1 col-sm-1 col-xs-4">
						<a href="add-book.php"> 
							<i> <img src="img/add-book.png" alt=""> </i>
							<span> Add book </span>
						</a>
				</li>
				<li class="col-md-1 col-sm-1 col-xs-4"> 
						<a href="search.php">
							<i> <img src="img/return_list.png" alt=""> </i>
							<span> Search book </span>
						</a>
				</li>
				<li class="col-md-1 col-sm-1 col-xs-4"> 
						<a href="stats.php">
							<i> <img src="img/stats.png" alt=""> </i>
							<span>  Statistics </span>
						</a>
				</li>
				<li class="col-md-1 col-sm-1 col-xs-4">
						<a href="cms.php"> 
							<i> <img src="img/cms.png" alt=""> </i>
							<span > Content managment </span>
						</a>
				</li>
				
			</ul>
		</div>
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