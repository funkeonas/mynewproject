<?php
 session_start();
 if (!isset($_SESSION['username'])){
     header('location: index.php');
 }
?>
<!DOCTYPE html>
<html>
<head>
<title>Commute - Ride, Earn, Easy</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<meta name="keywords" content="Passengers Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" type="text/css" rel="stylesheet" media="all"> 
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />  <!-- flexslider-CSS --> 
<link href="css/font-awesome.css" rel="stylesheet">		<!-- font-awesome icons -->  
<!-- //Custom Theme files -->  
<!-- web-fonts -->   
<link href="//fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<!-- //web-fonts -->
</head>
<body>
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
						<h1><a href="driverpage.php"><img src="images/commute.jpg" width="200px" height="auto"></a></h1> 
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<div class="w3menu navbar-right">
							<ul class="nav navbar">
                                
							    <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Need Help?<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Send Us A Message</a></li>
                                    </ul>
                                </li>
                                
								 <li class="dropdown">
                                      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Bus Details
                                       <span class="caret"></span></a>
                                
                                     <ul class="dropdown-menu">
                                        <li><a href="#">Update Bus Info</a></li>
                                        <li><a href="#">Rides History</a></li> 
                                    </ul>
                                 </li>
                               
                                  <li class="dropdown">
                                    <a href="" class="dropdown-toggle" data-toggle="dropdown">Welcome<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Profile</a></li>
                                        <li><a href="#">Change Current Location</a></li>
                                        <li><a href="#">See User Rating</a></li>
                                        <li><a href="#">Privacy Setting</a></li>
                                        <li><a href="index.php">Logout</a></li> 
                                    </ul>
                                </li>
                                
							</ul>
						</div> 
						<div class="clearfix"> </div>  
					</div>
				</div>	
			</div>	
			<!-- //navigation -->
			<!-- //banner-text -->   
		</div>
	</div>
	<!-- //banner -->
    <!-- map -->
	<div class="map w3layouts">  
		<iframe src="https://www.google.com/maps/d/embed?mid=1Dh11ZIlR3gKi5r9s2lu1BVzGTvM16bTU" width="640" height="480"></iframe>
	</div>
	<!-- //map -->  
    
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