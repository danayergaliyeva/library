<?php
	include('dbconnect.php');

		if(!empty($_POST['take'])){

		  $studen_id = test_input($_POST["sid"]);
		  $book_id = test_input($_POST["bid"]);
		  $book_condition = test_input($_POST["bc"]);

		  $upsql = "UPDATE givenbooks SET status = 1 WHERE studen_id = ".$studen_id." book_code=".$book_id;
		  $conn->query($upsql);
		  

		  $ssql = "SELECT numberofbooks FROM books where book_code = ".$book_id;
		  $sresult = mysqli_query($conn, $ssql);
		  if (mysqli_num_rows($sresult) > 0) {
    	  		while($row = mysqli_fetch_assoc($sresult)) {
        			$numberbooks = $row["numberofbooks"];
    	   		}
    		}

		  $upsql = "UPDATE books SET numberofbooks = ".($numberbooks+1)." WHERE book_code=".$book_id;
		  $conn->query($upsql);
		  if ($conn->query($upsql) === TRUE) {
			    echo "<script> alert('Book given'); </script>";
			} else {
			    echo "Error: " . $upsql . "<br>" . $conn->error;
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
				<h1 class="menu-title"> Take book </h1>

				<div class="main-form">
					<form action="" method="POST">
			            <input type="text" name="sid" required placeholder="STUDENT ID">
			            <input type="text" name="bid" required placeholder="BOOK ID">
			            <input type="text" name="bc" required placeholder="BOOK CONDITION">
			            <input type="submit" name="take" id="sub" value="TAKE">
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
</php>