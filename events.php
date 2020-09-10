<?php
	include_once 'connection.php';
	include_once 'header.php';
	
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
								Events				
							</h1>	
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
				
			<!-- Start events-list Area -->
			<section class="events-list-area section-gap event-page-lists">
				<div class="container">
					<div class="row align-items-center">
						<?php
							$event_detail = mysqli_query($con,"select * from events");
							if(mysqli_num_rows($event_detail))
							while($event = mysqli_fetch_assoc($event_detail))
							{

						?>
						<div class="col-lg-6 pb-30">
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" <?php echo "src='".$event['Image']."'";?> alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p><?php echo $event['Date'];?></p>
									<a <?php echo "href= 'event-details.php?Event_Id=".$event['Event_Id']."'";?>><h4><?php echo $event['Event_Name'];?></h4></a>
									<p>
										For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
									</p>
								</div>
							</div>
						</div>
						<?php
						}
						?>																		
						<a href="#" class="text-uppercase primary-btn mx-auto mt-40">Load more Events</a>		
					</div>
				</div>	
			</section>
			<!-- End events-list Area -->
							    			

			<!-- start footer Area -->		
			<?php
				include_once 'footer.php'
			?>	
			<!-- End footer Area -->		
		</body>
	</html>