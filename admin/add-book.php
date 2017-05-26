<?php
	include('dbconnect.php');
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  $book_code = test_input($_POST["book_code"]);
	  $name = test_input($_POST["name"]);
	  $author = test_input($_POST["author"]);
	  $publisher = test_input($_POST["publisher"]);
	  $year = test_input($_POST["year"]);
	  $pages = test_input($_POST["pages"]);
	  $numberofbooks = test_input($_POST["numberofbooks"]);
	  $language = test_input($_POST["language"]);
	  $sql = "INSERT INTO books VALUES (NULL,'".$book_code."','".$name."','".$author."','".$publisher."','".$year."','".$pages."','".$numberofbooks."','".$language."')";
		if ($conn->query($sql) === TRUE) {
		    echo "<script> alert('Book added'); </script>";
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
	include 'layouts/header.php';
?>
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
			            <input type="number" name="numberofbooks" required placeholder="NUMBER OF BOOKS">
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