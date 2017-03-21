<?php
	include('dbconnect.php');
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  $book_code = test_input($_POST["book_code"]);
	  $name = test_input($_POST["name"]);
	  $author = test_input($_POST["author"]);
	  $publisher = test_input($_POST["publisher"]);
	  $year = test_input($_POST["year"]);
	  $pages = test_input($_POST["pages"]);
	  $language = test_input($_POST["language"]);
	  $sql = "INSERT INTO books VALUES (NULL,'".$book_code."','".$name."','".$author."','".$publisher."','".$year."','".$pages."','".$language."')";
		if ($conn->query($sql) === TRUE) {
		    echo "<p  style='color:green'> Book added </p>";
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
				<h1 class="menu-title"> Add book </h1>
				<div class="main-form">
					<form action="" method="POST">
			            <input type="text" name="book_code"  required placeholder="BOOK CODE">
			            <input type="text" name="name"  required placeholder="NAME">
			            <input type="text" name="author"  required placeholder="AUTHOR">
			            <input type="text" name="publisher"  required placeholder="PUBLISHER">
			            <input type="number" name="year"  required placeholder="YEAR">
			            <input type="number" name="pages"  required placeholder="PAGES">
			            <input type="text"  name="language" required placeholder="LANGUAGES">
			            <input type="submit" id="sub" value="ADD BOOK">
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
</HTML>