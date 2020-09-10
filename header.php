<?php
	session_start();
?>
<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Events</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">			
			<link rel="stylesheet" href="css/jquery-ui.css">			
			<link rel="stylesheet" href="css/main.css">
			
	</head>
	<body>
		<header id="header" id="home">
	  		<div class="header-top">
	  			<div class="container">
			  		<div class="row">
			  			<div class="col-lg-6 col-sm-6 col-8 header-top-left no-padding">
			  				<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-behance"></i></a></li>
			  				</ul>			
			  			</div>
			  			<div class="col-lg-6 col-sm-6 col-4 header-top-right no-padding">
			  				<a href="tel:+1 437 985 2988"><span class="lnr lnr-phone-handset"></span> <span class="text">+1 437 985 2988 </span></a>
			  				<a href="mailto:shah52@uwindsor.ca"><span class="lnr lnr-envelope"></span> <span class="text">support@event.com</span></a>			
			  			</div>
			  		</div>			  					
	  			</div>
			</div> 
		    <div class="container main-menu">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			        <a href="index.php"><img src="img/" alt="" title="" /></a>
			      </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
			          <li><a href="index.php">Home</a></li>
			           <li><a href="events.php">Events</a></li>
			           <li><a href="gallery.php">Gallery</a></li>
			        
			          <!-- <li><a href="gallery.php">Gallery</a></li> -->
			          <?php
			          	if(isset($_SESSION["user_id"])){
			          		?>
			          			<li class="menu-has-children">
          			          	<a href=""><?php echo $_SESSION["user_name"]; ?></a>
          			          	<ul>
          					        <li><a href="volunteered_events.php">Volunteered events</a></li>
          					        <li><a href="donated_events.php">Donated events</a></li>
          					        <li><a href="attended_events.php">Attended events</a></li>
          					    	<li><a href="logout.php">logout</a></li>
          					    </ul>
          					  </li>
			          		<?php
			          	}
			          	else{
			          		?>
          			          <li class="menu-has-children">
          			          	<a href="login.php">Login/Register</a>
          			          	<ul>
          					        <li><a href="login.php">Login</a></li>
          					    	<li><a href="registration.php">Register</a></li>
          					    </ul>
          					  </li>
			          		<?php
			          	}
			          ?>
			        </ul>
			      </nav><!-- #nav-menu-container -->		    		
		    	</div>
		    </div>
		  </header><!-- #header -->

	</body>
	</html>