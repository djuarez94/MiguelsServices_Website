<!doctype html>
<html lang="en">
	<head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Miguel's Painting Services</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<nav class="navbar navbar-inverse">
			 <div class="container-fluid">
			   <div class="navbar-header">
				 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				   <span class="icon-bar"></span>
				   <span class="icon-bar"></span>
				   <span class="icon-bar"></span>
				 </button>
				 <a class="navbar-brand" href="index.php">
				 	<img src="img/miguelsLogo.png" width="50px">
				 </a>
			   </div>
			   <div class="collapse navbar-collapse" id="myNavbar">
				 <ul class="nav navbar-nav">
				   <li><a href="#myCarousel">Home</a></li>
				   <li><a href="#about">About</a></li>
				   <li><a href="#services">Services</a></li>
				   <li><a href="#contact">Contact</a></li>
				 </ul>
			   </div>
			 </div>
		</nav>
		<div id="myCarousel" class="carousel slide" data-ride="carousel" style="height: 500px;">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
			<h1>Miguel's Painting Services</h1>
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active">
					<div class="carousel-caption">
						<img src="img/gpsIcon.png">
						<p>"Miguel's Carpet Cleaning covers up to 40 miles in the Long Beach, Los Angeles area."</p>
					</div>
				</div>

				<div class="item">
					<div class="carousel-caption">
						<h3>Chicago</h3>
						<p>Thank you, Chicago!</p>
					</div>
				</div>

				<div class="item">
					<div class="carousel-caption">
						<h3>New York</h3>
						<p>We love the Big Apple!</p>
					</div>
				</div>
			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		<div class="about">
			<h2>Who Am I?</h2>
			<p>Hello! My name is Miguel Prieto and I provide professional carpet cleaning and painting services. I am located in the city of Long Beach, and have been running this business for 10 years. I began this business in hopes to give my clients the best painting and carpet cleaning services that any home or business owner would be happy to receive. I love to see the smiles on my clients faces when they see the new look to their house or business. So if you are looking to have a new paint job or a fresh carpet cleaned up and ready for any event you have came to the right place!</p>
		</div>
		<div class="services">
			<div class="subTitle">
				<h2>Services</h2>
				<p>Click on image to see before and after.</p>
			</div>
			<div class="gallery">
				<img src="img/miguelwebsitephotos/painting_before_1.jpg">
				<img src="img/miguelwebsitephotos/painting_before_2.jpg">
			</div>
		</div>
		<div class="contact" id="contactMe">
			<h1>Contact me</h1>
			<form method="post" action="visualDesign.php#alert" id="contact" class="form-horizontal  text-left">
				<div class="form-group text-left">
					<label for="name">Name:</label>
					<input name="name" type="name" class="form-control" id="name" placeholder= "Who will I be communicating with?">
				</div>
				<div class="form-group text-left">
					<label for="email">Email:</label>
					<input name="email" type="email" class="form-control" id="email" placeholder= "What is your email?">
				</div>
				<div class="form-group text-left">
					<label for="subject">Service:</label>
					<input name="subject" type="text" class="form-control" id="subject" placeholder= "Which service would you like to know more about?">
				</div>
				<div class="form-group text-left">
					<label for="message">Message:</label>
					<textarea class="form-control" rows="4" cols="50" id="message" name="message" style="width:100%" placeholder= "Type message here..." ></textarea>
				</div>
				<input id="submitButton" type="submit" value="Send" name="submit">
			</form>
		</div>
		<footer>
			<img src="img/miguelsLogo.png">
			<div class="email">
				<i class="fa fa-envelope" aria-hidden="true" style="font-size: 2em;"></i>
				<a href="#"><p>prietomiguel714@gmail.com</p></a>
			</div>
			<div class="number">
				<i class="fa fa-mobile" aria-hidden="true" style="font-size: 2.5em;"></i>
				<a href="tel:1-714-576-3294"><p>Primary Number: 714-576-3294</p></a>

				<i class="fa fa-mobile" aria-hidden="true" style="font-size: 2.5em;"></i>
				<a href="tel:1-562-528-2770"><p>Secondary Number: 562-528-2770</p></a>
				<p class="copyright">&copy; <?php echo date('Y'); ?> Miguel's Painting Services.<br>All rights reserved.</p>
			</div>
		</footer>
	</body>
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
</html>