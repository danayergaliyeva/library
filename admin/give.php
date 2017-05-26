<?php
	include('dbconnect.php');
		if(!empty($_POST['give'])){
		  $studen_id = test_input($_POST["sid"]);
		  $book_id = test_input($_POST["bid"]);
		  $date = test_input($_POST["date"]);
		  $days = test_input($_POST["days"]);
		  $phone = test_input($_POST["phone"]);
		  $email = test_input($_POST["email"]);

		  $sql = "INSERT INTO givenbook (studentID,bookID,Date,days,phoneNumber,gmail) VALUES (".$studen_id.", ".$book_id.",'".$date."',".$days.",".$phone.",'".$email."')";
		  
		  $ssql = "SELECT numberofbooks FROM books where book_code = ".$book_id;
		  $sresult = mysqli_query($conn, $ssql);
		  if (mysqli_num_rows($sresult) > 0) {
    	  		while($row = mysqli_fetch_assoc($sresult)) {
        			$numberbooks = $row["numberofbooks"];
    	   		}
    		}
		  $upsql = "UPDATE books SET numberofbooks = ".($numberbooks-1)." WHERE book_code=".$book_id;
		  $conn->query($upsql);
		  if ($conn->query($sql) === TRUE) {
			    echo "<script> alert('Book given'); </script>";
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
				<h1 class="menu-title"> Give book </h1>
				<div class="main-form">
					<form action="" method="POST">
			            <input type="number" name="sid" required placeholder="STUDENT ID">
			            <input type="number" name="bid" required placeholder="BOOK ID">
			            <input type="date" name="date" required placeholder="11/03/2017">
			            <input type="number" name="days" required placeholder="FOR HOW MANY DAYS">
			            <input type="tel"  name="phone" required placeholder="PHONE NUMBER">
			            <input type="mail" name="email" required placeholder="EMAIL">
			            <input type="submit" id="sub" name="give" value="GIVE">
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