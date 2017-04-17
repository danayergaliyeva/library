<?
	include 'layouts/header.php';
?>
		<div class="main-area col-sm-12 col-md-12">
			<div class="panel-header">
	
<?			
	include('dbconnect.php');
	$sql = "SELECT g.studentID, g.bookID, NOW( ) , g.date
			FROM  `givenbook` AS g WHERE DATEDIFF( NOW( ) , g.date ) >10 AND 
			g.status = 0 ";
	@$result = $conn->query($sql);

	if (@$result->num_rows > 0) {  
		echo "<div id='penaltybooks'>";
	    while($row = $result->fetch_assoc()) {

	        echo $row["studentID"]."----".
	        $row["bookID"]."----". $row["date"];
	        echo '<br>';
	    }
	    echo "</div>";
	} else {
	    echo "0 results";
	}
	$conn->close();
?>				


<p id="b"> Books </p>
<p id="s"> Students </p>
<p id="t"> Teachers </p>


<p id="asd"> HIDE/SHOW </p>
			</div>
		</div>
		<div class="footer col-sm-12 col-md-12">
			<h3> &COPY Copyright 2016 - 2017, All Rights Reserved </h3>
		</div>
	</div>
</div>


<script type="text/javascript">
	$(document).ready(function(){
		$('#b').click(function(){
			$('#penaltybooks').toggle('slow');
		});

		$('#s').click(function(){
			$('#asd').toggle('slow');
		});
	});
</script>

</body>
</php>