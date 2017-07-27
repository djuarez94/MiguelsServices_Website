<?php

$feedback =''; //empty until there is feedback.

if (isset($_POST['name']))
{
	/*-------------------------------------
	| Initialize Variables
	-------------------------------------*/
	$to = "davidjuarez1411@gmail.com";
	$subject = "Website Contact";

	$name = $_POST['name'];
	$email = $_POST['email'];
	$service = $_POST['service'];
	$message = $_POST['message'];

	/*-------------------------------------
	| Validation
	-------------------------------------*/
	if ($name == '' || $email == '' || $subject == '' || $message == '')
	{
		$feedback = 'Fill out all the fields';
	}
	else
	{
		/*-------------------------------------
		| Compose
		-------------------------------------*/
		$body = '
			Hi! My name is ' . $name . ' I am sending you this email in reference your  ' . $service . ' services. <br><br>x

			' . $message . '<br>

			Sincerely,<br>
			' . $name . '<br>
			P.S. Oh yeah, my email is ' . $email . '.
		';

		/*-------------------------------------
		| Make it look like a real eamil
		-------------------------------------*/
		$headers = "From: davidjuarez1411@gmail.com" . "\r\n";
		$headers .= "Reply-To: ". strip_tags($_POST['req-email']) . "\r\n";
		// $headers .= "CC: susan@example.com\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


		/*-------------------------------------
		| Send the email
		-------------------------------------*/
		if (!mail($to, $subject, $body, $headers))
		{
			$feedback = 'I apologize! We were unable to send from our hosted server. Please contact me directly <a href="mailto:davidjuarez1411@gmail.com">here</a>.';
		}
		else
		{
			$feedback = 'Message Sent from our servers. Let\'s hope it gets through the mail servers!';
		}
	}
}
?>
<!doctype html>
<html lang="en">
	<head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Miguel's Janitorial & Painting Services</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
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
				 	<img id="logo" src="img/miguelsLogo.png" width="40px">
				 </a>
			   </div>
			   <div class="collapse navbar-collapse" id="myNavbar">
				 <ul class="nav navbar-nav">
				   <li class="home"><a href="#myCarousel">Home</a></li>
				   <li class="about"><a href="#about">About</a></li>
				   <li class="services"><a href="#services">Services</a></li>
				   <li class="contact2"><a href="#contact">Contact</a></li>
				 </ul>
			   </div>
			 </div>
		</nav>
		<div id="myCarousel" class="carousel slide home2" data-ride="carousel" style="height: 500px;">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
			<h1 class="star shadow">Miguel's Janitorial & Painting Services</h1>
			<!-- Wrapper for slides -->
			<div class="carousel-inner" id="mainCarousel">
				<div class="item active">
					<div class="carousel-caption" style="position:static;">
						<img class='star shadow' src="img/gpsIcon.png">
						<p>Miguel's janitorial & painting services covers up to 40 miles in the Long Beach, Los Angeles area.</p>
					</div>
				</div>

				<div class="item">
					<div class="carousel-caption" style="position:static;">
						<img class='star shadow' src="img/handshakeIcon.png">
						<p>Lending a helping hand with quality service for my customers. </p>
					</div>
				</div>

				<div class="item">
					<div class="carousel-caption" style="position:static;">
						<img class='star shadow' src="img/moneysaveIcon.png">
						<p>Quality work that leaves your home and business like new, without leaving your pockets empty.</p>
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
		<div class="about" id="about">
			<h2>Who Am I?</h2>
			<img src="img/miguelwebsitephotos/photoOfMig.jpg" alt="Photo of Miguel" width="300px">
			<p class="star">Hello! My name is Miguel Prieto and I provide professional janitorial and painting services. I am located in the city of Long Beach, and have been running this business for 10 years. I began this business in hopes to give my clients the best painting and carpet cleaning services that any home or business owner would be happy to receive. I love to see the smiles on my clients faces when they see the new look to their house or business. So if you are looking to have a new paint job or a fresh carpet cleaned up and ready for any event you have came to the right place!</p>
		</div>
		<div class="services" id="services">
			<div class="subTitle">
				<h2 class="animation-element slide-left">Services</h2>
				<div class="BnA star">
					<div class="CC">Janitorial Services</div>
					<div class="PS">Painting Services</div>
				</div>
			</div>
			<div class="instruction star">
				<i class="fa fa-arrow-up" aria-hidden="true"></i>
				<h2>Click a service above!</h2>
			</div>
			<div class="row">
				<div class="serviceDescr hidden" id="janitorial">
					<h2>Janitorial Services</h2>
					<p>I provide janitorial services for commercial buildings. This includes office cleaning, carpet cleaning, and strip and waxed floors.</p>
				</div>
				<div class="serviceDescr hidden" id="painting">
					<h2>Painting Services</h2>
					<p>I provide painting services for residential buildings. This includes painting interior and exterior, patches, sanding, applyin primer, and the final coat of paint as well.</p>
				</div>
			</div>
			<div class="container">
			  <div class="modal fade and carousel slide" id="lightbox">
			    <div class="modal-dialog">
			      <div class="modal-content">
			        <div class="modal-body">
			          <!-- <ol class="carousel-indicators">
			            <li data-target="#lightbox" data-slide-to="0" class="active"></li>
			            <li data-target="#lightbox" data-slide-to="1"></li>
			            <li data-target="#lightbox" data-slide-to="2"></li>
			          </ol> -->
			          <div class="carousel-inner">
			            <div class="item active">
			              <img class="flip" src="img/miguelwebsitephotos/carpetCleaning_1.jpg" alt="First slide">
						  <div class="carousel-caption"><p>Janitorial Cleaning</p></div>
			            </div>
			            <div class="item">
			              <img class="flip" src="img/miguelwebsitephotos/carpetCleaning_2.jpg" alt="Second slide">
						  <div class="carousel-caption"><p>Janitorial Cleaning</p></div>
			            </div>
			            <div class="item">
			              <img class="flip" src="img/miguelwebsitephotos/carpetCleaning_3.jpg" alt="Third slide">
			              <div class="carousel-caption"><p>Janitorial Cleaning</p></div>
			            </div>
						<div class="item">
			              <img class="flip" src="img/miguelwebsitephotos/carpetCleaning_5.jpg" alt="Fourth slide">
			              <div class="carousel-caption"><p>Janitorial Cleaning</p></div>
			            </div>
						<div class="item">
			              <img class="flip" src="img/miguelwebsitephotos/carpetCleaning_6.jpg" alt="Fifth slide">
			              <div class="carousel-caption"><p>Janitorial Cleaning</p></div>
			            </div>
						<div class="item">
			              <img class="flip" src="img/miguelwebsitephotos/carpetCleaning_7.jpg" alt="Sixth slide">
			              <div class="carousel-caption"><p>Janitorial Cleaning</p></div>
			            </div>
						<div class="item">
			              <img class="flip" src="img/miguelwebsitephotos/carpetCleaning_8.jpg" alt="Seventh slide">
			              <div class="carousel-caption"><p>Janitorial Cleaning</p></div>
			            </div>
						<div class="item">
			              <img src="img/miguelwebsitephotos/carpetCleaning_9.jpg" alt="Eight slide">
			              <div class="carousel-caption"><p>Janitorial Cleaning</p></div>
			            </div>
						<div class="item">
			              <img src="img/miguelwebsitephotos/cleaningProduct.jpg" alt="Nineth slide">
			              <div class="carousel-caption"><p>Product used to clean floor/ carpet.</p></div>
			            </div>
						<div class="item">
			              <img src="img/miguelwebsitephotos/carpetCleaning_truck.jpg" alt="Tenth slide">
			              <div class="carousel-caption"><p>Truck and equipment used for service.</p></div>
			            </div>
						<div class="item">
			              <img src="img/miguelwebsitephotos/before_afterCarpet.jpg" alt="Eleventh slide">
			              <div class="carousel-caption"><p>Before & after of a carpet to show comparison</p></div>
			            </div>
			          </div><!-- /.carousel-inner -->
			          <a class="left carousel-control" href="#lightbox" role="button" data-slide="prev">
			            <span class="glyphicon glyphicon-chevron-left"></span>
			          </a>
			          <a class="right carousel-control" href="#lightbox" role="button" data-slide="next">
			            <span class="glyphicon glyphicon-chevron-right"></span>
			          </a>
			        </div><!-- /.modal-body -->
			      </div><!-- /.modal-content -->
			    </div><!-- /.modal-dialog -->
			  </div><!-- /.modal -->
			</div><!-- /.container -->
			<div class="container">
			  <div class="modal fade and carousel slide" id="lightbox2">
			    <div class="modal-dialog">
			      <div class="modal-content">
			        <div class="modal-body">
			          <!-- <ol class="carousel-indicators">
			            <li data-target="#lightbox2" data-slide-to="0" class="active"></li>
			            <li data-target="#lightbox2" data-slide-to="1"></li>
			            <li data-target="#lightbox2" data-slide-to="2"></li>
			          </ol> -->
			          <div class="carousel-inner" id="carousel-inner_2">
						  <div class="item active">
  			              <img src="img/miguelwebsitephotos/painting_before_1.jpg" alt="First slide">
  			              <div class="carousel-caption"><p>Before painting</p></div>
  			            </div>
  						<div class="item">
  			              <img src="img/miguelwebsitephotos/painting_before_2.jpg" alt="Second slide">
  			              <div class="carousel-caption"><p>Before painting</p></div>
  			            </div>
  						<div class="item">
  			              <img class="flip" src="img/miguelwebsitephotos/painting_before_3.jpg" alt="Third slide">
  			              <div class="carousel-caption"><p>Before painting</p></div>
  			            </div>
			            <div class="item">
			              <img src="img/miguelwebsitephotos/painting_after_1.jpg" alt="Fourth slide">
						  <div class="carousel-caption"><p>After painting</p></div>
			            </div>
			            <div class="item">
			              <img class="flip" src="img/miguelwebsitephotos/painting_after_3.jpg" alt="Fifth slide">
			              <div class="carousel-caption"><p>After painting</p></div>
			            </div>
						<div class="item">
			              <img class="flip" src="img/miguelwebsitephotos/painting_after_4.jpg" alt="Sixth slide">
			              <div class="carousel-caption"><p>After painting</p></div>
			            </div>
						<div class="item">
			              <img class="flip" src="img/miguelwebsitephotos/painting_after_5.jpg" alt="Seventh slide">
			              <div class="carousel-caption"><p>After painting</p></div>
			            </div>
						<div class="item">
			              <img class="flip" src="img/miguelwebsitephotos/painting_after_6.jpg" alt="Eighth slide">
			              <div class="carousel-caption"><p>After painting</p></div>
			            </div>
						<div class="item">
			              <img class="flip" src="img/miguelwebsitephotos/painting_after_7.jpg" alt="Nineth slide">
			              <div class="carousel-caption"><p>After painting</p></div>
			            </div>
			          </div><!-- /.carousel-inner -->
			          <a class="left carousel-control" href="#lightbox2" role="button" data-slide="prev">
			            <span class="glyphicon glyphicon-chevron-left"></span>
			          </a>
			          <a class="right carousel-control" href="#lightbox2" role="button" data-slide="next">
			            <span class="glyphicon glyphicon-chevron-right"></span>
			          </a>
			        </div><!-- /.modal-body -->
			      </div><!-- /.modal-content -->
			    </div><!-- /.modal-dialog -->
			  </div><!-- /.modal -->
			</div><!-- /.container -->
			<div class="container hidden" style="width:100%;" id="paint">
				<div class="row">
				  <div class="col-md-4">
				    <div class="thumbnail star">
				      <a href="#lightbox2" data-toggle="modal">
						<img src="img/miguelwebsitephotos/painting_before_1.jpg" alt="">
						<div class="caption">
  				          <p>Before Painting</p>
  				        </div>
					  </a>
				    </div>
				  </div>
				  <div class="col-md-4">
				    <div class="thumbnail star">
						<a href="#lightbox2" data-toggle="modal">
  							<img src="img/miguelwebsitephotos/painting_before_2.jpg" alt="">
  							<div class="caption">
    				          <p>Before Painting</p>
    				        </div>
  					  	</a>
				    </div>
				  </div>
				  <div class="col-md-4">
				   <div class="thumbnail star">
						<a href="#lightbox2" data-toggle="modal">
	  					   <img src="img/miguelwebsitephotos/painting_before_3_small.jpg" alt="">
	  					   <div class="caption">
	  						 <p>Before Painting</p>
	  					   </div>
  					 	</a>
				   </div>
				 </div>
				  <div class="col-md-4">
				    <div class="thumbnail star">
				      <a href="#lightbox2" data-toggle="modal">
				        <img src="img/miguelwebsitephotos/painting_after_1.jpg" alt="After_1" style="width:100%">
				        <div class="caption">
				          <p>After Painting</p>
				        </div>
				      </a>
				    </div>
				  </div>
				 <div class="col-md-4">
				   <div class="thumbnail star">
					 <a href="#lightbox2" data-toggle="modal">
					   <img src="img/miguelwebsitephotos/painting_after_5_small.jpg" alt="After_2" style="width:100%">
					   <div class="caption">
						 <p>After Painting</p>
					   </div>
					 </a>
				   </div>
				 </div>
				 <div class="col-md-4">
				   <div class="thumbnail star">
					 <a href="#lightbox2" data-toggle="modal">
					   <img src="img/miguelwebsitephotos/painting_after_4_small.jpg" alt="After_3" style="width:100%">
					   <div class="caption">
						 <p>After Painting</p>
					   </div>
					 </a>
				   </div>
				 </div>
				 <div class="col-md-4">
				   <div class="thumbnail star">
					 <a href="#lightbox2" data-toggle="modal">
					   <img src="img/miguelwebsitephotos/painting_after_5_small.jpg" alt="After_4" style="width:100%">
					   <div class="caption">
						 <p>After Painting</p>
					   </div>
					 </a>
				   </div>
				 </div>
				 <div class="col-md-4">
				   <div class="thumbnail star">
					 <a href="#lightbox2" data-toggle="modal">
					   <img src="img/miguelwebsitephotos/painting_after_6_small.jpg" alt="After_5" style="width:100%">
					   <div class="caption">
						 <p>After Painting</p>
					   </div>
					 </a>
				   </div>
				 </div>
				 <div class="col-md-4">
				   <div class="thumbnail star">
					 <a href="#lightbox2" data-toggle="modal">
					   <img src="img/miguelwebsitephotos/painting_after_7_small.jpg" alt="After_6" style="width:100%">
					   <div class="caption">
						 <p>After Painting</p>
					   </div>
					 </a>
				   </div>
				 </div>
				</div>
			</div>
			<div class="container hidden" style="width:100%;" id="carpet">
				<div class="row">
					<div class="col-md-4">
					  <div class="thumbnail star">
						<a href="#lightbox" data-toggle="modal">
						  <img src="img/miguelwebsitephotos/carpetCleaning_1_small.jpg" alt="Carpet_Cleaning_1" style="width:100%">
						  <div class="caption">
							<p>Janitorial Cleaning</p>
						  </div>
						</a>
					  </div>
					</div>
					<div class="col-md-4">
					  <div class="thumbnail star">
						<a href="#lightbox" data-toggle="modal">
						  <img src="img/miguelwebsitephotos/carpetCleaning_2_small.jpg" alt="Carpet_Cleaning_2" style="width:100%">
						  <div class="caption">
							<p>Janitorial Cleaning</p>
						  </div>
						</a>
					  </div>
					</div>
					<div class="col-md-4">
					  <div class="thumbnail star">
						<a href="#lightbox" data-toggle="modal">
						  <img src="img/miguelwebsitephotos/carpetCleaning_3_small.jpg" alt="Carpet_Cleaning_3" style="width:100%">
						  <div class="caption">
							<p>Janitorial Cleaning</p>
						  </div>
						</a>
					  </div>
					</div>
					<div class="col-md-4">
					  <div class="thumbnail star">
						<a href="#lightbox" data-toggle="modal">
						  <img src="img/miguelwebsitephotos/carpetCleaning_5_small.jpg" alt="Carpet_Cleaning_4" style="width:100%">
						  <div class="caption">
							<p>Janitorial Cleaning</p>
						  </div>
						</a>
					  </div>
					</div>
					<div class="col-md-4">
					  <div class="thumbnail star">
						<a href="#lightbox" data-toggle="modal">
						  <img src="img/miguelwebsitephotos/carpetCleaning_6_small.jpg" alt="Carpet_Cleaning_5" style="width:100%">
						  <div class="caption">
							<p>Janitorial Cleaning</p>
						  </div>
						</a>
					  </div>
					</div>
					<div class="col-md-4">
					  <div class="thumbnail star">
						<a href="#lightbox" data-toggle="modal">
						  <img src="img/miguelwebsitephotos/carpetCleaning_7_small.jpg" alt="Carpet_Cleaning_6" style="width:100%">
						  <div class="caption">
							<p>Janitorial Cleaning</p>
						  </div>
						</a>
					  </div>
					</div>
					<div class="col-md-4">
					  <div class="thumbnail star">
						<a href="#lightbox" data-toggle="modal">
						  <img src="img/miguelwebsitephotos/carpetCleaning_9_small.jpg" alt="Carpet_Cleaning_7" style="width:100%">
						  <div class="caption">
							<p>Carpet Cleaning</p>
						  </div>
						</a>
					  </div>
					</div>
					<div class="col-md-4">
					  <div class="thumbnail star">
						<a href="#lightbox" data-toggle="modal">
						  <img src="img/miguelwebsitephotos/carpetCleaning_8_small.jpg" alt="Carpet_Cleaning_8" style="width:100%">
						  <div class="caption">
							<p>Equipment used for the cleaning process.</p>
						  </div>
						</a>
					  </div>
					</div>

					<div class="col-md-4">
					  <div class="thumbnail star">
						<a href="#lightbox" data-toggle="modal">
						  <img src="img/miguelwebsitephotos/cleaningProduct.jpg" alt="Carpet_Cleaning_9" style="width:100%">
						  <div class="caption">
							<p>Product used to clean floor/ carpet.</p>
						  </div>
						</a>
					  </div>
					</div>

					<div class="col-md-4">
					  <div class="thumbnail star">
						<a href="#lightbox" data-toggle="modal">
						  <img src="img/miguelwebsitephotos/carpetCleaning_truck.jpg" alt="Carpet_Cleaning_10" style="width:100%">
						  <div class="caption">
							<p>Truck and equipment used for service.</p>
						  </div>
						</a>
					  </div>
					</div>

					<div class="col-md-4">
					  <div class="thumbnail star">
						<a href="#lightbox" data-toggle="modal">
						  <img src="img/miguelwebsitephotos/before_afterCarpet.jpg" alt="Carpet_Cleaning_11" style="width:100%">
						  <div class="caption">
							<p>Before & after of a carpet to show comparison</p>
						  </div>
						</a>
					  </div>
					</div>
				</div>
			</div>
		</div>
		<div class="B2T text-right hidden"><a href="#services">Back to Services</a></div>
		<div class="subTitle contact3">
			<h2 class="animation-element slide-left">Contact Me</h2>
		</div>
		<?php if (!empty($feedback)) : ?>
			<div class="alert alert-info emailAlert" id ="alert">
				<?php echo $feedback; ?>
			</div>
		<?php endif; ?>
		<div class="contact" id="contactMe">
			<form method="post" action="index.php#alert" id="contact" class="form-horizontal  text-left">
				<div class="form-group text-left">
					<label for="name">Name:</label>
					<input name="name" type="name" class="form-control" id="name" placeholder= "Type full name">
				</div>
				<div class="form-group text-left">
					<label for="email">Email:</label>
					<input name="email" type="email" class="form-control" id="email" placeholder= "Type email">
				</div>
				<div class="form-group text-left">
					<label for="service">Service:</label>
					<input name="service" type="text" class="form-control" id="service" placeholder= "Type service. (ex. Painting)">
				</div>
				<div class="form-group text-left">
					<label for="message">Message:</label>
					<textarea class="form-control" rows="4" cols="50" id="message" name="message" style="width:100%" placeholder= "Type message here..." ></textarea>
				</div>
				<input id="sendButton" type="submit" value="Send" name="submit">
			</form>
		</div>
		<footer>
			<div class="contactLinks">
				<div class="email">
					<i class="fa fa-envelope" aria-hidden="true" style="font-size: 2em;"></i>
					<p>prietomiguel714@gmail.com</p>
				</div>
				<div class="number">
					<i class="fa fa-mobile" aria-hidden="true" style="font-size: 2.5em;"></i>
					<a href="tel:1-714-576-3294"><p>Primary : 714-576-3294</p></a>
				</div>
				<div class="number2">
					<i class="fa fa-mobile" aria-hidden="true" style="font-size: 2.5em;"></i>
					<a href="tel:1-562-528-2770"><p>Secondary : 562-528-2770</p></a>
				</div>
			</div>
			<div class="copyrightLogo">
				<img src="img/miguelsLogo.png" width="50px">
				<p class="copyright">&copy; <?php echo date('Y'); ?> Miguel's Janitorial & Painting Services.<br>All rights reserved.</p>
			</div>
		</footer>
	</body>
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
</html>