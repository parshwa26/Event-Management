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
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-between">
						<div class="banner-content col-lg-9 col-md-12">
							<h1 class="text-uppercase">
								Memorable events don’t just happen. They happen to be our business.			
							</h1>
							<p class="pt-10 pb-10">
								
							</p>
							<a href="#" class="primary-btn text-uppercase">Get Started</a>
						</div>										
					</div>
				</div>					
			</section>
			<!-- End banner Area -->

			<!-- Start feature Area -->
			<section class="feature-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-4">
							<div class="single-feature">
								<div class="title">
									<h4>Donor</h4>
								</div>
								<div class="desc-wrap">
									<p>
										Come join with us for donating to the events even a small amount makes a difference
									</p>
									<a href="#">Join Now</a>									
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-feature">
								<div class="title">
									<h4>Upcoming events</h4>
								</div>
								<div class="desc-wrap">
									<p>
										Events plays an important role in the life. It is one such event where young brains get to showcase their skills and compete with others to find the best.
									</p>
									<a href="event-details.php">Join Now</a>									
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-feature">
								<div class="title">
									<h4>Volunteer</h4>
								</div>
								<div class="desc-wrap">
									<p>
										The more we give, the happier we feel. Volunteering increases self-confidence. You are doing good for others and the community, which provides a natural sense of accomplishment.
									</p>
									<a href="#">Join Now</a>									
								</div>
							</div>
						</div>												
					</div>
				</div>	
			</section>
			
		
			<!-- Start upcoming-event Area -->
			<section class="upcoming-event-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Upcoming Events</h1>
							</div>
						</div>
					</div>								
					<div class="row">
						<div class="active-upcoming-event-carusel">
							<?php
								$event_detail = mysqli_query($con,"select * from events");
								$count = 0;
								if(mysqli_num_rows($event_detail))
								while($event = mysqli_fetch_assoc($event_detail))
								{
									$count++;
								?>
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
							<?php
							if($count>6)
									break;
							}
						?>	
						</div>
					</div>
				</div>	
			</section>
			<!-- End upcoming-event Area -->
											
<?php
	include_once 'footer.php'
?>	
		</body>
	</html>