<?php

  $ruser = 'oGI7KynQVD';
  $rpass = 'GAeI6ZJ9EC';
  $rdb = 'oGI7KynQVD';
    
  if(! $rdatabase = new mysqli('remotemysql.com', $ruser , $rpass, $rdb ))
  {
    echo('No stable database connection');
  }

  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    $A_Name = $_POST['A_Name'];
    $A_Email = $_POST['A_Email'];
    $A_Subject = $_POST['A_Subject'];
    $A_Message = $_POST['A_Message'];
      
	$query1 = "insert into Consult (A_Name, A_Email, A_Subject, A_Message) values('$A_Name','$A_Email', '$A_Subject','$A_Message)";
    mysqli_query($rdatabase,$query1);
    header("Location: index.php");
	die;      
  }

?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<!--For responsive		-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		
	<link rel="icon" href="images/logo.png">	
	<title>RELIEF</title>

	<!--Owl Carousel	-->	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"  />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"  />
		
		
	<!--Bootstra CSS	-->
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

	<!--Custom Style CSS	-->
	<link rel="stylesheet" href="css/style.css" type="text/css">	
</head>

<body>
	
	
	
<!--Start Header	-->
	<header>
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light">
		<div class="container-fluid">
		<a class="navbar-brand" href="#">
			<h1 style="font-weight: bolder; color: white;">RELIEF</h1>
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
			<li class="nav-item">
				<a class="nav-link active" aria-current="page" href="#home-section">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#about-section">About</a>
			</li>
			
			<li class="nav-item">
				<a class="nav-link " href="#services-section">Services</a>
			</li>
			<li class="nav-item">
				<a class="nav-link " href="#reviews-section">Reviews</a>
			</li>
			<li class="nav-item">
				<a class="nav-link " href="#team-section">Our Doctors</a>
			</li>
			
			<li class="nav-item">
				<a class="nav-link " href="#booking-section">Book Appointment</a>
			</li> 
			
			
			<li class="nav-item">
				<a class="nav-link " href="#Contact-Us">Contact US</a>
			</li> 
			
			
		</ul>
		
		</div>
	</div>
	</nav>
		</div>
		</header>	
	<!--End Header	-->
		
		
		
	<!--Start Hero Banner	-->
		<section class="hero-banner" id="home-section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="banner-text-wrap">
							<h1 class="text-white">We Provide The Best Preventative Medicine Measures</h1>
							<p class="text-white"> The purpose is to build a Medical Application with the goal of connecting at-risk or
								high-risk patients of Diabetes and Cardiovascular diseases with their doctors.</p>
							<a href="signupP.php"  class="btn btn-white" target="_blank">JOIN US as a Patient</a>
							<a href="signupD.php"  class="btn btn-white" target="_blank">JOIN US as a Doctor</a>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!--End Hero Banner	-->
		
		
	<!--Start Features Section	-->
		<section class="features-section">
			<div class="container">
				<div class="row gx-0">
					
					<div class="col-md-6">
						<div class="features-box bg1">
							<img src="images/calendar.png" alt="">
							<h3>24 Hours Services</h3>
							<p>We are here for your care 24/7.Contact us <br>
								Best Endocrinologist, CardioVascular and Pulmonary specialist are available for your lookups.

							</p>
						</div>
					</div>
					
					
					<div class="col-md-6">
						<div class="features-box bg2">
							<img src="images/staff.png" alt="">
							<h3>Professional Staff</h3>
							<p>The doctors will have a subscription
								package on the device which can be customized by the doctor for their patients.</p>
						</div>
					</div>
					
					
					
				</div>
			</div>
		</section>
	<!--End Features Section	-->
		
		

	<!--	Start About Section-->
		<section class="about-section"  id="about-section">
			<div class="container">
				<div class="row gx-5">
					
					<div class="col-md-6">
							<div class="about-media">
							<img src="images/about.jpg" alt="" >
						</div>
					</div>
					
					<div class="col-md-6">
						<div  class="about-info">
							<h3>About Us</h3>
								<p class="lead">Cardiovascular diseases and Diabetes are both present on the top 10 most common and lethal conditions today, however both these 
									conditions, if responsibly monitored, can be dealt with easily and patients can still live a comfortable life.
									
								</p>
								<p>The doctor will have the ability to read the data and call for visits, recommend tests and give new prescriptions through the application. This will reduce the load on both doctor, patient and hospitals as it will reduce the amount of visits that patients will
									have to make physically to the hospital or clinic. This information can allow
									doctors to rectify prescriptions before the patient has an extreme reaction. 
								</p>
							
								<p> The goal in the long run is not just to reduce hospital visits but with the help of preventative 
									medicine is to reduce glycemic attacks, heart attacks and strokes.</p>
							

								<a href="https://www.webmd.com/lung/copd/news/20060525/top-10-causes-death-worldwide" class="btn btn-primary" target="_blank">Lean More</a>
						</div>
					</div>
					
					
					
				</div>
			</div>
		</section>
	<!--	End About Section-->
		
		
		
	<!--Start services Section-->
		<section class="services-section" id="services-section">
			<div class="container">
				<div class="row">
					
					<div class="col-md-12">
						<h2 class="section-title text-center">Services</h2>
					</div>
					
				
					<div class="col-md-6">
						<div class="services-box">
							<img src="images/heart.jpg" alt="">
							<h3>Cardiology</h3>
							<p>All Cardiovascular rated diseases with symptoms of high blood pressure, high heart rate</p>
						</div> 

					</div>
					
					<div class="col-md-6">
						<div class="services-box">
							<img src="images/pulmonary-icon.png" height="275px" width="260px" alt="">
							<h3>Pulmonology</h3>
							<p>All lung related emergency situations, including oxygen ssturation in the blood.</p>
						</div> 

					</div>
					
					
					<div class="col-md-6">
						<div class="services-box">
							<img src="images/blood-sugar.png" alt=""><br>
							<h3>Blood Sugar Concentration</h3><br>
							<p>Diabetes patient who have to register their different blood sugar level throughout 
								the day.</p>
						</div>
					</div>
					
					
					
					
					
				</div>
			</div>
		</section>
	<!--End services Section-->
		
		
		
	<!--Start reviews Section	-->
		<section class="reviews-section bg-overlay" id="reviews-section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
							<h2 class="section-title">Customer Reviews</h2>
					</div>
					
					
					<div class="col-md-12">
						
						<div class="reviews-slide owl-theme owl-carousel">
							
							<div class="item">
								<div class="review-box">
									<div class="review-media">
										<img src="images/fahad3.jpg" alt="" >
									</div>
									<div class="review-info">
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
										<h4>John Doe</h4>
										<h5>Patient of Diabetes</h5>
									</div>
								</div>
							</div>
							
							
							<div class="item">
								<div class="review-box">
									<div class="review-media">
										<img src="images/sannan.jpg" alt="" >
									</div>
									<div class="review-info">
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
										<h4>John Doe</h4>
										<h5>Patient of Diabetes</h5>
									</div>
								</div>
							</div>
							
							
							<div class="item">
								<div class="review-box">
									<div class="review-media">
										<img src="images/sidra.jpg" alt="" >
									</div>
									<div class="review-info">
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
										<h4>John Doe</h4>
										<h5>Patient of Blood Pressure</h5>
									</div>
								</div>
							</div>
							
						
							
						</div>
						
						
					</div> 
					
					
				</div>
			</div>
		</section>
	<!--End reviews Section	-->
		
		
		
		
	<!--Start Team Section	-->
		
		<section class="team-section" id="team-section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="section-title text-center">Our Expert Team</h2>
					</div>
					
					
					<div class="col-md-3">
						<div class="team-box">
							<div class="team-media">
								<img src="images/team/1.jpg" alt="" >
							</div>
							<div class="team-info">
								<h3>Johnathan Doe</h3>
								<p>Cardiologist</p>
								<ul class="team-social">
									<li> <a href=""> <i class="fa fa-facebook" aria-hidden="true"></i> </a>  </li>
									<li> <a href=""> <i class="fa fa-twitter" aria-hidden="true"></i> </a>  </li>
									<li> <a href=""> <i class="fa fa-linkedin" aria-hidden="true"></i></a>  </li>
									<li> <a href=""> <i class="fa fa-instagram" aria-hidden="true"></i></a>  </li>
								</ul>
							</div>
						</div>
					</div>
					
				<div class="col-md-3">
						<div class="team-box">
							<div class="team-media">
								<img src="images/team/2.jpg" alt="" >
							</div>
							<div class="team-info">
								<h3>Johnathan Doe</h3>
								<p>Pulmonologist</p>
								<ul class="team-social">
									<li> <a href=""> <i class="fa fa-facebook" aria-hidden="true"></i> </a>  </li>
									<li> <a href=""> <i class="fa fa-twitter" aria-hidden="true"></i> </a>  </li>
									<li> <a href=""> <i class="fa fa-linkedin" aria-hidden="true"></i></a>  </li>
									<li> <a href=""> <i class="fa fa-instagram" aria-hidden="true"></i></a>  </li>
								</ul>
							</div>
						</div>
					</div>
					
					
					<div class="col-md-3">
						<div class="team-box">
							<div class="team-media">
								<img src="images/team/3.jpg" alt="" >
							</div>
							<div class="team-info">
								<h3>Johnathan Doe</h3>
								<p>Endocrinologist</p>
								<ul class="team-social">
									<li> <a href=""> <i class="fa fa-facebook" aria-hidden="true"></i> </a>  </li>
									<li> <a href=""> <i class="fa fa-twitter" aria-hidden="true"></i> </a>  </li>
									<li> <a href=""> <i class="fa fa-linkedin" aria-hidden="true"></i></a>  </li>
									<li> <a href=""> <i class="fa fa-instagram" aria-hidden="true"></i></a>  </li>
								</ul>
							</div>
						</div>
					</div>
					
					
					<div class="col-md-3">
						<div class="team-box">
							<div class="team-media">
								<img src="images/team/4.jpg" alt="" >
							</div>
							<div class="team-info">
								<h3>Johnathan Doe</h3>
								<p>General Physician</p>
								<ul class="team-social">
									<li> <a href=""> <i class="fa fa-facebook" aria-hidden="true"></i> </a>  </li>
									<li> <a href=""> <i class="fa fa-twitter" aria-hidden="true"></i> </a>  </li>
									<li> <a href=""> <i class="fa fa-linkedin" aria-hidden="true"></i></a>  </li>
									<li> <a href=""> <i class="fa fa-instagram" aria-hidden="true"></i></a>  </li>
								</ul>
							</div>
						</div>
					</div>
					
					
				</div>
			</div>
		</section>
	<!--End Team Section	-->
		
		

		
	<!--Start Booking Section-->

	<section class="booking-section bg-overlay" id="booking-section">
			<div class="container">
			<div class="row">
					
					<div class="col-md-6">
					<div class="form-col">
							<h4>Make An Appointment</h4>
						<h3>Get Free Consultation on how we can Help You!</h3>
						</div>
						
						<form method="post" action="index.php">
							
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" name="A_Name" placeholder="Name">
									</div>
								</div>
								
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" name="A_Email" placeholder="Email">
									</div>
								</div>
							
								
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" class="form-control" name="A_Subject" placeholder="Subject">
									</div>
								</div>
								
								<div class="col-md-12">
									<div class="form-group">
										<textarea class="form-control" name="A_Message" placeholder="Message"></textarea>
									</div>
								</div>
								
								<div class="col-md-12">
									<div class="form-group">
										<input type="submit" value="Submit"  class="btn btn-primary">
									</div>
								</div>
								
							</div>
							
							
						</form>
						
						
						
						
						
				</div>
				
				</div>
		</div>
		</section>	
		
	<!--End Booking Section-->

		
		
	
		

		
		
	<!--Start Footer	-->
	<footer>
		<div class="container" id="Contact-Us">
			<div class="row">
				
				<div class="col-md-4">
					<div class="footer-widget">
						<h3>Contact Us</h3>
						
						<ul class="footer-address">
							<li>
								<i class="fa fa-map-marker" aria-hidden="true"></i>
								<div>
									<h4>Address</h4>
									<p>33 Lorem Ipsum is simply dummy <br>text of the printing</p>
								</div>
							</li>
							
							<li>
								<i class="fa fa-phone" aria-hidden="true"></i>
								<div>
									<h4>Phone</h4>
									<p> <a href="tel:+0123456789">+0123456789</a></p>
								</div>
							</li> 
							
							<li>
							<i class="fa fa-envelope-o" aria-hidden="true"></i>
								<div>
									<h4>Email</h4>
									<p> <a href="tel:+0123456789">Support@company.com</a></p>
								</div>
							</li> 
							
							
						</ul>
					</div>
				</div> 
				
				
				
				<div class="col-md-6">
					<div class="footer-widget">
				
				
				
					<div class="col-md-6">
					<div class="footer-widget">
						<h3>Newsletter</h3>
						<form method="post">
							<input type="email" placeholder="Enter Email" name="NewsletterEmail" class="form-control mb-2">
							<input type="submit" value="Subscribe" class="btn btn-white">
						</form>
					</div>
				</div>   
				
				
				
				
			</div>
		</div>	
	</footer>	
	<!--End Footer	-->
		
		
		
		
		
		
	<!--Script-->
		
	<script src="js/jquery-3.4.1.min.js" type="text/javascript" > </script>	
		
		
	<!--Bootstra JS	-->
	<script src="js/bootstrap.min.js" type="text/javascript" > </script>
		
	<!--Owl Carousel	-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" type="text/javascript" > </script>	

	<!--Custom JS	-->
	<script src="js/custom.js" type="text/javascript" > </script>

	<script>
	$('.reviews-slide').owlCarousel({
		loop:true,
		margin:10,
		nav:false,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:1
			},
			1000:{
				items:1
			}
		}
	})
		</script>
	
	
	
</body>
</html>
