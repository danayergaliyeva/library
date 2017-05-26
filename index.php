<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SDU Library</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/media.css">
	<link rel="stylesheet" href="libs/css/bootstrap.min.css">
	<link rel='shortcut icon' type='image/x-icon' href='img/icon.png'/>
	 <script type="text/javascript" src="libs/prettydatepicker/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="libs/prettydatepicker/js/jquery.datepicker.js"></script>
    <link rel="stylesheet" type="text/css" href="libs/prettydatepicker/css/jquery.datepicker.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="menu-wrapper">
		<ul>
			<li>  
				<a href="menu/guide.php"> 
				<i class="fa fa-map" aria-hidden="true"> </i> Путеводитель </a> 
			</li>
			<li> 
				<a href="https://9c2175c03cdc42dca93ce5f8f5d280d7640134aa-www.googledrive.com/host/0Bwe4I7wCW4pdMDA4bnJhbVp1NUU/">
				<i class="fa fa-map-signs" aria-hidden="true"></i> Виртуальный тур </a> 
			</li>
			<li> 
				<a href="menu/galery.php"> <i class="fa fa-picture-o" aria-hidden="true">
				</i> Галерея  </a>
			</li>
		</ul>
</div>
	<div class="container-fluid">
		<div class="row">
			<header class="col-md-12">
				<a href="index.php"> <img src="img/sdu_only.svg" class="col-md-offset-1"> </a>
				<h2> Library of SDU </h2> <br>
				<h3> Suleyman Demirel University </h3>
			</header>
			<div class="col-md-12 headermenu">
				<div class="col-md-offset-1">
					<ul>
					    <li class="lang "><a href="#"> KZ </a></li>
					    <li class="lang"><a href="#" class="active"  > RU </a></li>
					    <li class="lang"><a href="#" > EN </a></li>
						<li><a href="#" > Главная </a></li>
						<li><a href="#"> О библиотеке </a></li>
						<li><a href="#"> Читателям </a></li>
						<li><a href="#"> Преподавателям </a></li>
						<li><a href="#"> Библиотекарям </a></li>
					</ul>
				</div>
			</div>
			<div class="block-content col-md-3 col-md-offset-1">
				<ul>
				<li>
						<i class="fa fa-info-circle"></i> 
						<a href="#"> О нас </a>
					</li>
					<li>
						<i class="fa fa-newspaper-o"></i> 
						<a href="#"> Периодические издания </a>
					</li>
					<li>
						<i class="fa fa-leanpub"></i> 
						<a href="#"> Вестник СДУ </a>
					</li>
					<li>
						<i class="fa fa-file-text-o"></i> 
						<a href="#"> Новые поступления </a>
					</li>
					<li>
						<i class="fa fa-book"></i> 
						<a href="#"> Редкие книги </a>
					</li>
					<li>
						<i class="fa fa-book"></i> 
						<a href="#"> Биобиблиографические указатели  </a>
					</li>
					<li>
						<i class="fa fa-users"></i> 
						<a href="menu/freeresources.php"> Бесплатные электронные ресурсы  </a>
					</li>
					<li>
						<i class="fa fa-globe"></i> 
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
						<input id="search-input" name="word" size="18" 
						type="text" class="ie-no-ph col-md-7 col-sm-5" placeholder="введите ключевое слово...">
						<input type="submit" value="Поиск">
					</form>
				</div>

				<div class="result">
				<?php
					include('admin/dbconnect.php');
					if ($_SERVER["REQUEST_METHOD"] == "GET") {

					  @$word = $_GET["word"];
					  @$type = $_GET["type"];

					  $sql = "SELECT * FROM books where ".$type." like '%".$word."%'";
					  	@$result = $conn->query($sql);
						if (@$result->num_rows > 0) {  
							echo "<table class='col-md-12' 	id='search-result'><tr> <th>Название </th> <th>Автор </th> <th> Язык </th> <th> Количество </th>  </tr>";
						    while($row = $result->fetch_assoc()) {
						        echo "<tr> <td> " . $row["name"]. " </td> <td> " . 
						        $row["author"]. " </td> 
						        <td>" . $row["language"]. "</td> 
						        <td>" . $row["numberofbooks"]. "</td></tr>";
						    }
							echo "</table>";
							echo '<style>';
						echo '.databaselist{display:none;} </style>';
						} else {}
						$conn->close();
					}else{}
				?>
				
				</div>
				<div class="databaselist">
					<a href="http://rmebrk.kz/" > <img src="img/springer-link.jpg"> </a>
					<a href="http://webofknowledge.com" > <img src="img/thomson.jpg"> </a>
					<a href="http://asee.org" > <img src="img/asee_logo4.png"> </a>
					<a href="http://doaj.org" > <img src="img/doaj.jpg"> </a>
					<a href="http://kazakhstanvsl.org" > <img src="img/vsl.png"> </a>
					<a href="http://zbmath.org" > <img src="img/zbMATH.gif"> </a>
					<a href="http://polpred.com" > <img src="img/polpred.png"> </a>
					<a href="http://sciverse.com" > <img src="img/elsevier.jpg"> </a>
					<a href="http://ebscohost.com" > <img src="img/ebsco.gif"> </a>
					<a href="http://doaj.org" > <img src="img/doaj.jpg"> </a>
				</div>
			</div>
			
			<div class="calendar col-md-3 col-md-offset-1">

			</div>
		</div>
</div>
	
	
<div class="footer">
	<div class="container">
		<div class="row">
				<div class="footer-block">
					<h2 > Контакты </h2>
					<i class="fa fa-map-marker"></i> 
					<h4> ул. Абылай хана 1/1
					г. Каскелен,
					Алматинская обл., Карасайский р-н </h4>
					<i class="fa fa-phone"></i> 
					<h4> Тел: +7 727 307 95 60, 65
	Факс: +7 727 307 95 58</h4>
	<i class="fa fa-envelope"></i> 
					<h4> e-mail: info@sdu.edu.kz </h4>	
				</div>

				<div class="footer-block">
					<h2 > Администрация: </h2>
					<i class="fa fa-clock-o"></i> 
					<h4> 
						Пн-Пт: 900 – 1800
						Суббота: 900 – 1400
						Воскресенье: выходной
					</h4>
				</div>	
		</div>

	</div>
	<div class="footer-bottom">

	</div>
</div>
<script>

jQueryDatepicker.day_names_short = {
  1: 'Mon',
  2: 'Tue',
  3: 'Wed',
  4: 'Thu',
  5: 'Fri',
  6: 'Sat',
  7: 'Sun'
};

jQueryDatepicker.day_names = {
  1: 'Monday',
  2: 'Tuesday',
  3: 'Wednesday',
  4: 'Thursday',
  5: 'Friday',
  6: 'Saturday',
  7: 'Sunday'
};

jQueryDatepicker.month_names = {
  1: 'January',
  2: 'February',
  3: 'March',
  4: 'April',
  5: 'May',
  6: 'June',
  7: 'July',
  8: 'Agust',
  9: 'September',
  10: 'October',
  11: 'November',
  12: 'December'
};


$(document).ready(function(){

	$my_datepicker = $('.calendar');
	$my_datepicker.datepicker({
	  next_button: '&gt;',
	  prev_button: '&lt;'
	});

	var date = new Date();
	var $some_datepicker = $('.calendar');
    $some_datepicker.datepicker();
	var datepicker = jQueryDatepicker.data($some_datepicker);
	var $selected = $('.selected');
	var $start = $('.start');
    var $toggleMode = $('.toggleMode');

    datepicker.setDate({
                year: 2017,
                // jquery.datepicker accepts first month as 1
                // (built-in Date() class accepts first month as 0)
                month: date.getMonth()+1,
                day: date.getDate()
            });
 
    $some_datepicker.on(jQueryDatepicker.event('date_selected'), function (event, date) {
        if (date.mode == 'date') {
            var year = date['details']["year"];
            var month =  date['details']["month"];
            var day = date['details']["day"];
            window.open('menu/news.php?year='+year+'&month='+month+'&day='+day,'_blank');
        } else if (date.mode == 'start_date') {
            console.log('start date selected:', date);
        }
        if (datepicker.isStartDateSelected()) {
            console.log(date.start_date.date.toString());
        }
        console.log(date.date.toString());
        
    });  
});

</script>
</body>
</html>