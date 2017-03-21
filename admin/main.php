<!DOCTYPE php>
<php lang="en">
<head>
	<meta charset="UTF-8">
	<title>SDU Library</title>
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="libs/css/bootstrap.min.css">
	<link rel='shortcut icon' type='image/x-icon' href='img/icon.png'/>
	<link rel="stylesheet" type="text/css" href="libs/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="libs/slick/slick-theme.css"/>

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="header">
				<div class="logo">
					<img src="img/sdu_logo.png" alt="">
					<h1> PUBLIC LIBRARY </h1>
				</div>
			</div>
			<div class="primaryNav">
				<ul>
					<li>Home</li>
					<li>News & Events</li>
					<li>Catalogues</li>
					<li>eBooks & Audio</li>
					<li> Research Resources </li>
					<li>Request for book</li>
					<li>Contact US</li>
				</ul>
			</div>

			<div class="fade">
			    <div><img src="img/robin-sharma-monah.jpg" alt=""> <center> <h1> Новая книга </h1> </center> </div>
			    <div><img src="img/camehome.jpg" alt=""></div>
			    <div><img src="img/life.jpg" alt=""></div>
			    <div><img src="img/robin-sharma-monah.jpg" alt=""> <center> <h1> Новая книга </h1> </center> </div>
			    <div><img src="img/camehome.jpg" alt=""></div>
			    <div><img src="img/life.jpg" alt=""></div>
			</div>

			<div class="news">
				<div class="news-item">
					<div class="title"> CPT ships 29.01 million small- to medium-size panels in February  </div>
					<div class="content">  Panel maker Chunghwa Picture Tubes (CPT) in February shipped 29.01 million small- to medium-size panels, increasing 28.8% on month but decreasing 1.0% on year, and 112,000 large-size units, falling 28.4% on month but hiking 86.0% on year, according to the company. </div>
					<div class="date"> Mar 9, 22:32 </div>
				</div>
			</div>

			<div class="news">
				<div class="news-item">
					<div class="title"> On December 7, 2016 the National library of the Republic of Kazakhstan carries out the session  </div>
					<div class="content">  On December 7, 2016 the National library of the Republic of Kazakhstan carries out the session of the Round table on the issue of passing over  of documents’ indexing from BBK to UDK for the leaders of the regional universal scientific libraries within the framework of the carrying out of the solemn activity dedicated to the 25-th anniversary of Independence of the Republic of Kazakhstan. </div>
					<div class="date"> 22.11.2016 </div>
				</div>
			</div>

			<div class="news">
				<div class="news-item">
					<div class="title">  Academy of sciences took place the III-rd book  </div>
					<div class="content">  On September 3, 2016 there at the square before the building of the Academy of sciences took place the III-rd book festival KitapFest-2016. The activity yakes place within the framework of the celebration of the millennium of Almaty city. The organizers of KitapFest are the Charity fond “Bauyrzhan”, the Akimat of Almaty city, the Eurasian association of franchising.  </div>
					<div class="date"> Mar 9, 22:32 </div>
				</div>
			</div>

		</div>

	</div>
	<div class="footer col-sm-12 col-md-12">
			<h3> &COPY Copyright 2016 - 2017, All Rights Reserved </h3>
		</div>
	 <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    
    <script type="text/javascript" src="libs/slick/slick.js"></script>

	<script type="text/javascript">
    $(document).ready(function(){
      $('.fade').slick({
		  dots: true,
		  infinite: true,
		  speed: 300,
		  slidesToShow: 1,
		  adaptiveHeight: true
});
});
  </script>

</body>
</php>