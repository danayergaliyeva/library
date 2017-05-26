<?
	include 'layouts/header.php';
?>
		<div class="main-area col-sm-12 col-md-12">
		<div class="panel-header">
		<h1 class="menu-title"> Stats book </h1>
		</div>

<div class="booksmenu col-md-2">
	<p id="studentsbooks"> <img src="img/slide.png" alt=""> Students </p>
	<p id="givenbooks"> <img src="img/slide.png" alt=""> Given books </p>
</div>

<div class="bookresult col-md-10">
	<div class="studentsbooks">
			<?			
			include('dbconnect.php');
			$sql = "SELECT distinct g.* , s.name , s.surname from givenbook g , students s 
									where g.studentID = s.studentID  order by `date`";
			@$result = $conn->query($sql);
			if (@$result->num_rows > 0) {  
				echo "<table id='customers'>
						<tr>
							  <th>FULL NAME</th>
							  <th>ID</th>
							  <th>BOOK 		ID</th>
							  <th>GIVE DATE</th>
							  <th>TAKE DATE</th>
						</tr>";
			    while($row = $result->fetch_assoc()) {
			    	$givendate = $row["Date"];
					$takebook = date('Y-m-d H:i:s', strtotime($givendate . ' + '.$row['days'].' day'));
			    	echo "<tr> ";
			        echo "<td>".$row["name"]." ".$row["surname"]."</td>";
			        echo "<td>".$row["studentID"]."</td>";
			        echo "<td>".$row["bookID"]."</td>";
			        echo "<td>".$row["Date"]."</td>";
			        echo "<td>".$takebook."</td>";
			        echo '</tr>';
			    }
			    echo "</table>";
			
			} else {
			    echo "0 results";
			}
			$conn->close();
		?>

	</div>

	<div class="givenbooks">
		<?			
			include('dbconnect.php');
			$sql = "SELECT distinct g.* , NOW( ) , s.name , s.surname , g.date as dif
             FROM  `givenbook` g , `students` s WHERE
			  g.studentID = s.studentID and
              DATEDIFF( NOW( ) , g.date ) > 10 AND g.status = 0 ";
			@$result = $conn->query($sql);
			if (@$result->num_rows > 0) {  
				echo "<table id='customers'>
						<tr>
							  <th>FULL NAME</th>
							  <th>ID</th>
							  <th>BOOK 		ID</th>
							  <th>GIVE DATE</th>
							  <th>TAKE DATE</th>
						</tr>";
			    while($row = $result->fetch_assoc()) {
			    	$givendate = $row["Date"];
					$takebook = date('Y-m-d', strtotime($givendate . ' + '.$row['days'].' day'));

			    	echo "<tr> ";
			        echo "<td>".$row["name"]." ".$row["surname"]."</td>";
			        echo "<td>".$row["studentID"]."</td>";
			        echo "<td>".$row["bookID"]."</td>";
			        echo "<td>".$row["dif"]."</td>";
			        echo "<td>".$takebook."</td>";
			        echo '</tr>';
			    }
			
			} else {
			    echo "0 results";
			}
			$conn->close();
		?>
	</div>	
</div>


	</div>

</div>


<script type="text/javascript">

	$(document).ready(function(){
		$('#studentsbooks').click(function(){
			$('.studentsbooks').show('slow');
			$('.givenbooks').hide('slow');
		});

		$('#givenbooks').click(function(){
			$('.studentsbooks').hide('slow');
			$('.givenbooks').show('slow');
		});
	});
</script>

</body>
</html>