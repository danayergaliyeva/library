




<!DOCTYPE HTML>
<php lang="en">
<head>
	<meta charset="UTF-8">
	<title>SDU Library</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="libs/css/bootstrap.min.css">
	<link rel='shortcut icon' type='image/x-icon' href='img/icon.png'/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<header class="col-md-12">
				<img src="img/sdu_only.svg" class="col-md-offset-1">
				<h2> Library of SDU </h2> <br>
				<h3> Suleyman Demirel University </h3>
			</header>
			<div class="col-md-12 headermenu">
				<div class="col-md-offset-1">
					<ul>
						<li><a href="#" > Главная </a></li>
						<li><a href="#"> О библиотеке </a></li>
						<li><a href="#"> Читателям </a></li>
						<li><a href="#"> Преподавателям </a></li>
						<li><a href="#"> Библиотекарям </a></li>
					</ul>
				</div>
			</div>
			<div class="block-content col-md-2 col-md-offset-1">
				<ul>
					<li>
						<i class="fa fa-newspaper-o"></i> 
						<a href="#"> Периодические издания </a>
					</li>
					<li>
						<i class="fa fa-newspaper-o"></i> 
						<a href="#"> Вестник КазНУ </a>
					</li>
					<li>
						<i class="fa fa-newspaper-o"></i> 
						<a href="#"> Новые поступления </a>
					</li>
					<li>
						<i class="fa fa-newspaper-o"></i> 
						<a href="#"> Редкие книги </a>
					</li>
					<li>
						<i class="fa fa-newspaper-o"></i> 
						<a href="#"> Биобиблиографические указатели  </a>
					</li>
					<li>
						<i class="fa fa-newspaper-o"></i> 
						<a href="#"> Бесплатные электронные ресурсы  </a>
					</li>
					<li>
						<i class="fa fa-newspaper-o"></i> 
						<a href="#">  Бюллетени и Вестники </a>
					</li>
				</ul>
			</div>
			<div class="block-main col-md-8">
				<div class="search-block">
					<p> Поиск по всем научно-образовательным ресурсам </p>
					<form action="" method="GET">

						<select name="type">
							<option value="name" selected="selected" value="">Ключевое слово:</option>
							<option value="name">Название:</option>
							<option value="author">Автор:</option>
						</select>

						<input id="ebsco-input" name="word" size="18" 
						type="text" class="ie-no-ph col-md-7" placeholder="введите ключевое слово...">

						<input type="submit" value="Поиск">

					</form>
				</div>
			

				<div class="result col-md-offset-1">
				<?php
					include('admin/dbconnect.php');
					if ($_SERVER["REQUEST_METHOD"] == "GET") {
					  $word = $_GET["word"];
					  $type = $_GET["type"];

					  $sql = "SELECT * FROM books where ".$type." like '%".$word."%'";
					 
					  $result = $conn->query($sql);
						if ($result->num_rows > 0) {
						    
							echo "<table class='col-md-10' 	id='search-result'><tr> <th>Название </th> <th>Автор </th> <th> Язык </th> </tr>";


						    while($row = $result->fetch_assoc()) {
						        echo "<tr> <td> " . $row["name"]. " </td> <td> " . 
						        $row["author"]. " </td> <td>" . $row["language"]. "</td>";
						    }
						} else {
						    echo "0 results";
						}
						$conn->close();
					}else{

					}
				?>
				</div>
			</div>
		</div>
	</div>
</body>
</html>