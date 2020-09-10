	<?php
	include 'header.php';
	?>
	

	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<script>
		var check = function() {
		  if (document.getElementById('password').value ==
		    document.getElementById('confirm_password').value) {
		    document.getElementById('message').style.color = 'green';
		    document.getElementById('message').innerHTML = '';
		    return true;
		  } else {
		    document.getElementById('message').style.color = 'red';
		    document.getElementById('message').innerHTML = 'password is not matching';
		    return false;
		  }
		}
		</script>
	</head>
		<body>
			<!-- <form class="form-horizontal" action="reg_stu.php" method="post"> -->
				
			<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Registration			
							</h1>	
							
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
			<div class="whole-wrap">
				<div class="container">
			<div class="section-top-border">	
				<div class="row">
							<div class="col-lg-8 col-md-8">
								<h3 class="mb-30">REGISTRATION</h3>
								<form action="registration_back.php" method = "post" onSubmit="return check()">
									<div class="mt-10">
										<input type="text" name="name" placeholder="Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name'" required class="single-input" pattern="[A-Za-z ]+" title="Name must have alphabets only">
									</div>
									<div class="mt-10">
										<input type="email" name="email" placeholder="E_mail" onfocus="this.placeholder = ''" onblur="this.placeholder = 'E_mail'" required class="single-input">
									</div>
									<div class="mt-10">
										<input type="Pass" name="password" id="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required class="single-input" onkeyup='check();'>
									</div>
									<div class="mt-10">
										<input type="text" name="confirm_password" id="confirm_password" placeholder="Confirm your password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirm your password'" required class="single-input" onkeyup='check();'>
										<span id='message'></span>
									</div>
									<div class="mt-10">
										<input class="genric-btn primary circle" type="submit" name="submit" value="Register">
									</div>
										
									<!-- </div>
									<div class="input-group-icon mt-10">
										<div class="icon"></div>
									</div>
									<div class="input-group-icon mt-10">
										<div class="icon"></div>
									   <br /> -->
										<!-- <div class="form-select" id="default-select2" style="height: 80px;">
											User type<select>

												<option>Volunteer</option>
												<option>User</option>
												<option>Donnor</option>
											</select>
										</div> -->

								
									<!-- <div class="form-select" id="default-select" >
										<div class="mt-10">
											<input type="Pass" name="Pass" placeholder="Age" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Age'" required class="single-input">
										</div>
									</div> -->
										<br>
										
									</div>
								</form>
							</div>
						</div>
		</body>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
						<!-- <div class="col-lg-6 col-sm-12 footer-social">
							<a href="#"></a>
							<a href="#"></a>
							<a href="#"></a>
							<a href="#"></a>
						</div>
					</div>						
				</div>
			</div>
			</footer>	 -->
			<!-- End footer Area -->	
</body>

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
    		<script src="js/jquery.tabs.min.js"></script>						
			<script src="js/jquery.nice-select.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>									
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		
	</html>