	<?
	include ('../layouts/header.php');
?>
<div>
	<span class="col-md-8 main-title"> Activities calendar</span>
	<div class="newslist col-md-8">
	<?

	include('admin/dbconnect.php');
	@$year = $_GET["year"];
	@$month = $_GET["month"];
	@$day =  $_GET["day"];
	$sql = "SELECT * FROM news where `date` = '".$year."-".$month."-".$day."'";
	@$result = $conn->query($sql);
	if (@$result->num_rows > 0) {  
		while($row = $result->fetch_assoc()) {
				echo "<div class='news-item'>";
		        echo $row["title"]; 
		        echo $row["content"];
		        echo $row["date"];
		        echo "</div>";
		    }
		} else {
		    echo "0 results";
		}
		$conn->close();
	}else{}

	?>
	</div>
</div>
<?
	include ('../layouts/footer.php');
?>