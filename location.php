<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php include('server.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Commute - Ride, Earn, Easy</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Passengers Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">  
<link href="css/font-awesome.css" rel="stylesheet">		<!-- font-awesome icons -->  
<!-- //Custom Theme files -->  
<!-- web-fonts -->   
<link href="//fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<!-- //web-fonts -->
</head>
<body>  
	<!-- banner -->
	<div class="agileits-banner">
		<div class="bnr-agileinfo"> 
			<!-- navigation -->
			<div class="top-nav w3-agiletop">
				<div class="container">
					<div class="navbar-header w3llogo">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>  
						<h1><a href="index.php"><img src="images/commute.jpg" width="200px" height="auto"></a></h1> 
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<div class="w3menu navbar-right">
							<ul class="nav navbar">
                            <li><a href="#" data-toggle="modal" id="click" data-target="#myModal3"><button style="color: black">BOOK A RIDE</button></a></li>
								<li><a href="index.php" class="active"><span class="glyphicon glyphicon-home">Home</span></a></li>
								<li><a href="about.php"><span class="glyphicon glyphicon-flash">About</span></a></li> 
								<!-- <li><a href="index.php#services"><i class="fa fa-gears">Services</i></a></li> -->
								<li><a href="contact.php"><span class="glyphicon glyphicon-phone-alt">Contact</span></a></li>
                                <li><a href="faq.php"><span class="glyphicon glyphicon-message">FAQ</span></a></li>
<!--
								<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span data-letters="Pages">Pages</span><span class="caret"></span></a>
									<ul class="dropdown-menu"> 
										<li><a href="icons.html">Web Icons</a></li>
										<li><a href="codes.html">Short Codes</a></li>
									</ul>
								</li>  
-->
								<li><a href="#" data-toggle="modal" id="click" data-target="#myModal3"><span class="glyphicon glyphicon-log-in"> Log In</span></a></li>
							</ul>
						</div> 
						<div class="clearfix"> </div>  
					</div>
				</div>	
			</div>	
			<!-- //navigation -->
			<!-- banner-text -->
			<div class="banner-text agileinfo about-bnrtext"> 
				<div class="container">
					<h2><a href="index.php">Home</a> / Choose Your Location</h2> 
				</div>
			</div>
			<!-- //banner-text -->   
		</div>
	</div>
	<!-- //banner --> 
	<!-- contact -->
<!--
    <br>
    <br>
<center>
<select>
  <option value="volvo">Area of Residence</option>
  <option value="saab">Bus stop 1</option>
  <option value="opel">Bus stop 2</option>
  <option value="audi">B us stop 3</option>
</select>

    
<select>
  <option value="volvo">Island Destination</option>
  <option value="saab">Bus stop 1</option>
  <option value="opel">Bus stop 2</option>
  <option value="audi">B us stop 3</option>
</select>
<a href="https://google.com/map"><button type="button" name="button" >Get Location</button></a>
</center>
-->
    
<br>
    <br>
 <center>
     <div class="ride_header">
     <h2>Ride With Commute</h2><br>
     <h4>Choose your location and desired destination</h4>
    </div>
     <br><br>
     <div class="container-fluid">
     <div class="loca_form">
         <form class="form" method="get" action="#">
             <br>
             <h3>Enter Email Address</h3>
             <input type="email" placeholder="Email Address">
             <br>
             <br>
             <h3>From: </h3>
             <select class="list-group-item">
                 <option value="Select" style="color:grey">Select Location</option>
                 <option name="ikorodu" class="list-group-item1">Ikorodu</option>
                 <option name="Agric" class="list-group-item1">Agric</option>
                 <option name="majidun" class="list-group-item1">Majidun</option>
                 <option name="irawo" class="list-group-item1"> Irawo</option>
                 <option name="owode-onirin" class="list-group-item1"> Owode-Onirin</option>
                 <option name="mile-12" class="list-group-item1"> Mile-12</option>
                 <option name="ketu" class="list-group-item1"> Ketu</option>
                 <option name="ojota" class="list-group-item1"> Ojota</option>
                 <option name="maryland" class="list-group-item1"> Maryland</option>
                 <option name="idiroko" class="list-group-item1"> Idiroko</option>
                 <option name="obanikoro" class="list-group-item1"> Obanikoro</option>
                 <option name="palmgroove" class="list-group-item1"> Palmgroove</option>
                 <option name="onipanu" class="list-group-item1"> Onipanu</option>
                 <option name="fadeyi" class="list-group-item1"> Fadeyi</option>
                 <option name="yaba" class="list-group-item1"> Yaba</option>
                 <option name="stadium" class="list-group-item1">Stadium</option>
                 <option name="Barracks" class="list-group-item1">Barracks</option>
                 <option name="iponri" class="list-group-item1">Iponri</option>
                 <option name="costain" class="list-group-item1"> Costain</option>
                 <option name="obalende" class="list-group-item1"> Obalende</option>
                 <option name="cms" class="list-group-item1"> CMS</option>
                 <option name="leventis" class="list-group-item1"> Leventis</option>
                 <option name="tbs" class="list-group-item1"> TBS </option>
             </select>
             <br>
             <h3>To: </h3>
             
            <select class="list-group-item">
                 <option value="Select" style="color:grey">Select Location</option>
                 <option name="victioria_island" class="list-group-item1">Victoria Island</option>
                 <option name="ajah" class="list-group-item1">Ajah</option>
                 <option name="banana_island" class="list-group-item1"> Banana Island</option>
             </select>
             <br>
             <br>
          <button name="book_now" class="btn btn-danger">BOOK NOW</button>
         </form>
     </div>
    </div>
    </center>
    <center>
    <div class="container">
         <div class="info">
             <h3><a href="#" class="w3ls-login" data-toggle="modal" data-target="#myModal2" style="color: white, hover: none">Click Here To Sign Up (Get Free Ride Coupons)</a></h3><br>
        </div>
    </div>
        </center>

<br>
    <br>
    
    

	<!-- //contact -->  
	<!-- map -->
	<div class="map w3layouts">  
		<iframe src="https://www.google.com/maps/d/embed?mid=1Dh11ZIlR3gKi5r9s2lu1BVzGTvM16bTU" width="640" height="480"></iframe>
	</div>
	<!-- //map -->   
    
    
   
	<!-- subscribe -->
	<div class="subscribe jarallax">
		<div class="container">
			<div class="agileits-title title2">
				<h3>Subscribe</h3>
			</div>   
			<p>SUBSCRIBE FOR NEWSLETTERS AND UPDATES ON PRODUCT AND SERVICES.</p>
			<form>
				<input type="email" name="email" placeholder="Email Address" class="user" required="">
				<input type="submit" value="Subscribe">
			</form>
			<p class="spam">We never share your information or use it to spam you</p>
		</div>
	</div>
	<!-- //subscribe -->
	<!-- features -->
	<div class="features">
		<div class="container">   
			<div class="wthree-features-row">
				<div class="col-md-6 features-w3grid"> 
					<div class="features-row2"> 
						<div class="features-w3lleft">  
							<h4>Sign Up To Ride</h4>
							<p>Register Here</p>
						</div>
						<div class="features-w3lright">
							<a href="#" class="w3ls-login" data-toggle="modal" data-target="#myModal2">Register</a>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-6 features-w3grid">  
					<div class="features-row2"> 
						<div class="features-w3lleft">  
							<h4>Driver Sign Up</h4>
							<p>Register Here</p>
						</div>
						<div class="features-w3lright">
							<a href="#" class="w3ls-login" data-toggle="modal" data-target="#myModal1">Register</a>
						</div>
						<div class="clearfix"> </div>
					</div> 
				</div>
                <br>
                    <div class="col-md-6 features-w3grid">  
					<div class="features-row2"> 
						<div class="features-w3lleft">  
							<h4>Already a Member? </h4>
							<p>Log In</p>
						</div>
						<div class="features-w3lright">
							<a href="#" class="w3ls-login" data-toggle="modal" data-target="#myModal3">Login</a>
						</div>
						<div class="clearfix"> </div>
					</div> 
				</div> 
                <div class="col-md-6 features-w3grid">  
					<div class="features-row2"> 
						<div class="features-w3lleft">  
                            <h5><b>Rider Commute Experience Feedback</b></h5>
							<p>Please Fill The Form</p>
						</div>
						<div class="features-w3lright">
							<a href="#" class="w3ls-login" data-toggle="modal" data-target="#myModal5">Click Here</a>
						</div>
						<div class="clearfix"> </div>
					</div> 
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //features -->
	<!-- login modal -->
	<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModal1" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times;</button>
					<img src="images/steering.jpg" width="100px" height="auto" class="img-responsive login-img" alt=""/>
					<h4 class="modal-title">Earn Daily Driving</h4>
				</div>
				<div class="modal-body modal-body-sub">
                    
					<h3>Create Driver Account</h3>
					<div class="register">
                         <!----------------------------------------------------------------
                                                  DRIVER REGISTRATION FORM HERE
                           ----------------------------------------------------------------->
						<form action="index.php" method="post" class="list-group-item1">
                            <?php include ('errors.php')?>
						       <b>Fullnames: </b>(<i>surname first</i>)<br>
                <input name="surname" type="text" placeholder="surname"> <input type="text" name ="other" placeholder="other names">
                <br>
                <br>
                <b>Phone:</b><br>
                <input type="text" name="phone"placeholder="e.g: +2340909090">
                <br>
                <br>
                <b >Email:</b><br>
                <input type="email" name="email">
                <br>
                <b >Password:</b><br>
                <input type="password" name="password">
                <br>
                <b > Confirm Password:</b><br>
                <input type="password" name="password_2">
                <br>
                    <center>
                <hr>
                <b id="vehicle">Vehicle Details:</b><br>
                <hr>
                <br>
                <b id="fullnames">Vehicle Type</b>
                <br>
                <br>
                <select id="vehicletype" name="vehicletype">
                    <option value="none"></option>
                    <option name="Bus">Bus</option>
                    <option name="Luxirious">Luxirious Bus</option>
                </select>
                <br>
                <br>
                <b id="fullnames">Vehicle Manufacturer</b>
                <br>
                <br>
                <select id="vehiclemanufacturer">
                    <option value="none"></option>
                    <option id="toyota">Toyota</option>
                    <option id="volkswagen">Volks Wagen</option>
                    <option id="hiyunda">Hiyunda</option>
                    <option id="honda">Honda</option>     
                </select>
                <br>
                <br>
                <hr>
                <b id="vehicle">Vehicle Registration:</b>
                <hr>
                <br>
                <br>
                <b id="fullnames">Has your vehicle been registered?</b>
                <br>
                <br>
                <select id="vehicleregist" required="required">
                        <option value="none"></option>
                        <option id="Yes">Yes</option> 
                        <option id="No">No</option>   
                    </select>
                    <p><b id="file">if yes... fill in your registration details below and upload a file containing it:</b></p>
                    <textarea placeholder="carefully type in your registration details here..." rows="8" cols="40"></textarea>
                    <br>
                    <br>
                    <input type="file" value="Choose file">
                    <br>
                    <br>
                    <hr>
                    <b id="vehicle">Driver Registration:</b>
                    <hr>
                    <br>
                    <b id="fullnames">Upload Drivers License</b>
                    <br>
                    <br>
                    <input type="file" value="Choose File">
                    <br>
                    <br>
                    <b id="fullnames">Upload National Identity</b>
                    <br>
                    <br>
                
                    <input type="file" value="Choose File">
                        </center>
                            <center>
								<div class="sign-up">
									<input type="submit" name="reg_driver" value="Register"/>
                                    <a href="#" class="w3ls-login" data-toggle="modal" data-target="#myModal0">Already have a driver account? login as driver</a>
							</div>
                                </center>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div> 
    <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModal5" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times;</button>
					<img src="" class="img-responsive login-img" alt=""/>
					<h4 class="modal-title">Thank You. <br>Filling Out This Form Is Important To Us.</h4>
				</div>
                <br>
				<div class="modal-body modal-body-sub"> 
					<div class="register">
						<form action="#" method="post">			
						<input placeholder="Name" name="Name" type="text" required="">
								<input placeholder="Email Address" name="Email" type="email" required="">
                                  <br>
                                  <br>
                                <h4>Rate Your Experience Using Our App</h4>
                                  <br>
                                 <h4><input type="checkbox" name="satisfied">Satisfied</h4> <br> <h4><input type="checkbox" name="notsatisfied">Not Satisfied</h4>
                                  <br>
                                  <br>
                                <h4>How Was Your Commute Experience?</h4>
                                  <br>
                                 <h4><input type="checkbox" name="pleasant">Pleasant</h4> <br> <h4><input type="checkbox" name="unpleasant">Unpleasant</h4>
                                 <br>
                                 <br>
                                 <h4>If Unpleasant, why?</h4>
                                 <br>
                                 <br>
                                <textarea type="text" name="RUP" rows=10 cols=30></textarea>
                                 <br>
                                 <br>
                                 <h4>How Can We Improve Your Experience?</h4>
                                 <br>
                                 <br>
                                <textarea type="text" name="IUE" rows=10 cols=30></textarea>
                                <br>
                                 <br>
                                 <h4>Will You Ride With Us Again?</h4>
                                 <br>
                                 <br>
                                 <h4>Yes:</h4> <input type="radio" name="yes" value="yes">
                            
                                 <h4>No:</h4>  <input type="radio" name="yes" value="no">
                            
								<div class="sign-up">
									<input type="submit" value="submit"/>
							</div>
						</form>
					</div>  
				</div>
			</div>
		</div>
	</div> 
    <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModal3" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times;</button>
					<h4 class="modal-title">Have An Account?</h4>
				</div>
				<div class="modal-body modal-body-sub"> 
					<h3>Login to your account</h3>
					<div class="register">
                         <!----------------------------------------------------------------
                                                  LOG-IN EXISTING USER FORM HERE
                           ----------------------------------------------------------------->
						<form action="index.php" method="post">		
                            <?php include ('errors.php')?>
							<input name="username" placeholder="Username" type="text">						
							<input name="password" placeholder="Password" type="password">										
							<div class="sign-up">
								<button type="submit" name="login_rider" class="btn btn-danger">LOG IN</button>
								<a href="#" class="w3ls-login" data-toggle="modal" data-target="#myModal2">Don't have and account yet? sign up</a>
							</div>
						</form>
                         <!----------------------------------------------------------------
                                                  LOG-IN EXISTING USER FORM HERE
                           ----------------------------------------------------------------->
					</div>  
				</div>
			</div>
		</div>
	</div> 
  <div class="modal fade" id="myModal0" tabindex="-1" role="dialog" aria-labelledby="myModal0" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times;</button>
					<h4 class="modal-title">Have Driver Account?</h4>
				</div>
				<div class="modal-body modal-body-sub"> 
					<h3>Login As Driver</h3>
					<div class="register">
                         <!----------------------------------------------------------------
                                                  DRIVER LOG-IN FORM HERE
                           ----------------------------------------------------------------->
						<form action="index.php" method="post">		
                            <?php include ('errors.php')?>
							<input name="text" placeholder="Email Address or Phone Number" type="text">						
							<input name="password" placeholder="Password" type="password">										
							<div class="sign-up">
								<input type="submit" name="login" value="Login As Driver"/>
								<a href="#" class="w3ls-login" data-toggle="modal" data-target="#myModal1">Don't have and account yet? sign up</a>
							</div>
						</form>
                         <!----------------------------------------------------------------
                                                  DRIVER LOG-IN  FORM HERE
                           ----------------------------------------------------------------->
					</div>  
				</div>
			</div>
		</div>
	</div> 
	<!-- //login modal -->	
	<!-- register modal -->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModal2" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times;</button>
					<img src="images/phone-location-pin-icon.jpg" width="50px" height="auto" class="img-responsive login-img" alt=""/>
					<h4 class="modal-title">Cheap, Easy and Comfortable Rides.</h4>
				</div>
				<div class="modal-body modal-body-sub"> 
					<div class="modal_body_left modal_body_left1"> 
						<h3>Sign Up To Ride</h3>
						<div class="register">
                         <!----------------------------------------------------------------
                                                  RIDER REGISTRATION FORM HERE
                           ----------------------------------------------------------------->
							   <form action="index.php" method="post">
                                <?php include('errors.php')?>
								<input placeholder="Username" name="username" type="text" >
								<input placeholder="Email Address" name="email" type="email">	
								<input placeholder="Password" name="password" type="password">	
								<input placeholder="Confirm Password" name="password_2" type="password">
                                   <br>
                                   <br>
								<div class="sign-up">
									<button name="signup1" type="submit" class="btn btn-danger" value="register">Register</button>
								</div>
							</form>
                             <!----------------------------------------------------------------
                                                  RIDER REGISTRATION FORM ENDS HERE
                           ----------------------------------------------------------------->
						</div> 		 
					</div>  
				</div>
			</div>
		</div>
	</div> 
	<!-- //register modal -->	
	<!-- footer -->
	<div class="footer w3-w3layouts">
		<div class="container"> 
			<div class="footer-agileinfo">
				<div class="col-md-4 col-sm-4 footer-wthreegrid">
					<h3>About Us</h3> 
					<div class=" footerabt-w3text"> 
						<p>Commute.ng is a start-up company founded in 2018. Located in Lagos, We provide a platform enabling commuters to book rides (From Mainland to Island) and get to work on time and to avoid the rush hour discomfort.</p>
						<div class="social-w3licon">
							<a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
							<a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a> 
							<a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a> 
							<a href="#" class="social-button dribbble"><i class="fa fa-dribbble"></i></a> 
						</div>  
					</div>
					<div class="clearfix"> </div>
				</div>
				<!-- <div class="col-md-4 col-sm-4 footer-wthreegrid">
					<h3>Recent Posts</h3>
					<ul>
						<li><a href="#myModal" data-toggle="modal"><i class="fa fa-angle-right"></i>Vestibulum felis</a></li>
						<li><a href="#myModal" data-toggle="modal"><i class="fa fa-angle-right"></i>Mauris at tellus</a></li>
						<li><a href="#myModal" data-toggle="modal"><i class="fa fa-angle-right"></i>Donec ut lectus</a></li>
						<li><a href="#myModal" data-toggle="modal"><i class="fa fa-angle-right"></i>Vitae interdum</a></li>
					</ul>
				</div> -->
				<div class="col-md-4 col-sm-4 footer-wthreegrid footer-tags">
					<h3>Tag Cloud</h3>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="about.php">About</a></li>
						<!-- <li><a href="codes.html">Codes</a></li>
						<li><a href="gallery.html">Gallery</a></li> -->
						<li><a href="contact.php">Contact Us</a></li>
					</ul>
				</div> 
				<div class="clearfix"> </div>
			</div>  
		</div>
	</div>
	<div class="copy-right"> 
		<div class="container">
			<p>© 2018 Commute. All rights reserved | <a href="#"> encodedBicoding</a></p>
		</div> 
	</div> 
	<!-- //footer -->   
	<!-- footer modal -->
	<div class="modal about-modal w3-agileits fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div> 
				<div class="modal-body">
					<img src="images/img1.jpg" class="img-responsive" alt=""> 
					<h5>Cras rutrum iaculis enim</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras rutrum iaculis enim, non convallis felis mattis at. Donec fringilla lacus eu pretium rutrum. Cras aliquet congue ullamcorper. Etiam mattis eros eu ullamcorper volutpat. Proin ut dui a urna efficitur varius. uisque molestie cursus mi et congue consectetur adipiscing elit cras rutrum iaculis enim, Lorem ipsum dolor sit amet, non convallis felis mattis at. Maecenas sodales tortor ac ligula ultrices dictum et quis urna. Etiam pulvinar metus neque, eget porttitor massa vulputate. </p>
				</div> 
			</div>
		</div>
	</div>
	<!-- //footer modal -->   
	<!-- js --> 
	<script src="js/jquery-2.2.3.min.js"></script> 
	<script src="js/SmoothScroll.min.js"></script> 
	<script src="js/jarallax.js"></script> 
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>  
	<!-- //js -->
	<!-- FlexSlider --> 
	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	</script>
	<!-- //End-FlexSlider --> 
	<!-- flexSlider -->  
	<script type="text/javascript">
		$(window).load(function(){
		  $('.flexslider1').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	</script>
	<!-- //flexSlider -->	
	<!-- start-smooth-scrolling --> 
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>	
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!-- //end-smooth-scrolling -->	 
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->  
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>