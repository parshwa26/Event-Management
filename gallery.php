<?php
	include_once 'header.php';
	include_once 'connection.php';
?>
	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
	
		</head>
		<body>	  
			<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Gallery				
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="gallery.html"> Gallery</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
				
			<!-- Start gallery Area -->
			<section class="gallery-area section-gap">
				<div class="container">
					
			<?php
				$sqlGetImage = "select Image as image from events";
				$result1 = $con->query($sqlGetImage);
				if($result1->num_rows>0){
					while($row = $result1->fetch_assoc()){
						?>
						<div class="row">
							<div class="col-lg-7">
								<a <?php echo "href='".$row['image']."'; "?> class="img-gal">
									<div class="single-imgs relative">		
										<div class="overlay overlay-bg"></div>
										<div class="relative">				
											<img class="img-fluid" <?php echo "src='".$row['image']."'; "?> alt="">		
										</div>
									</div>
								</a>
							</div>
							</div>
						<?php
					}
				}

			?>
			
					
				</div>	
			</section>
			<!-- End gallery Area -->
													

			<!-- Start cta-two Area -->
			<section class="cta-two-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 cta-left">
							<h1>Not Yet Satisfied with our Trend?</h1>
						</div>
						<div class="col-lg-4 cta-right">
							<a class="primary-btn wh" href="#">view our blog</a>
						</div>
					</div>
				</div>	
			</section>
			<!-- End cta-two Area -->						    			

			<!-- start footer Area -->		
			<?php
				include_once 'footer.php'
			?>	
			<!-- End footer Area -->	
		</body>
	</html>