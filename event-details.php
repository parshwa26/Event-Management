<?php
	ob_start();
	include_once 'header.php';
	include_once 'connection.php';
	if(isset($_GET['Event_Id']))
	{
		$Event_Id = $_GET['Event_Id'];
		$event_prev = $_GET['Event_Id']-1;
		$event_next = $_GET['Event_Id']+1;
	}
?>
	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		
		</head>
		<body>	  
			<?php
				$event_details = mysqli_query($con,"select * from events where Event_Id = $Event_Id");
				if(mysqli_num_rows($event_details)>=0)
					if($event = mysqli_fetch_assoc($event_details))
					{

			?>
			<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Event Details			
							</h1>	
							<p class="text-white link-nav"><a href="#">Event</a>  <span class="lnr lnr-arrow-right"></span>  <a href="#"></a><?php echo $event['Event_Name'] ?></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
				
			<!-- Start event-details Area -->
			<section class="event-details-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 event-details-left">
							<div class="main-img">
								<img class="img-fluid" <?php echo "src='".$event['Image']."'" ?> alt="">
							</div>
							<div class="details-content">
								<a href="#">
									<h4><?php echo $event['Event_Name'] ?></h4>
								</a>
								<p>
									<?php echo $event['Description'] ?>
								</p>
							</div>
							<div class="social-nav row no-gutters">
								<div class="col-lg-6 col-md-6 ">
									<ul class="focials">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
										<li><a href="#"><i class="fa fa-behance"></i></a></li>
									</ul>
								</div>
								<div class="col-lg-6 col-md-6 navs">
									<a <?php echo "href= 'event-details.php?Event_Id=".$event_prev."'";?> class="nav-prev"><span class="lnr lnr-arrow-left"></span>Prev Event</a>
									<a <?php echo "href= 'event-details.php?Event_Id=".$event_next."'";?> class="nav-next">Next Event<span class="lnr lnr-arrow-right"></span></a>									
								</div>
							</div>
						</div>
						<div class="col-lg-4 event-details-right">
							<div class="single-event-details">
								<h4>contribute in following ways</h4>
								<ul class="mt-10">
									<li class="justify-content-between d-flex">
										<a <?php echo "href= 'attendevent.php?Event_Id=".$Event_Id."'";?>class="genric-btn primary" style="width: 280px">Attend this event</a>
									</li>
									<li class="justify-content-between d-flex">
										<a <?php echo "href= 'donateevent.php?Event_Id=".$Event_Id."'";?> class="genric-btn primary" style="width: 280px">Donate for this eventt</a>
									</li>
									<li class="justify-content-between d-flex">
										<a <?php echo "href= 'volunteerevent.php?Event_Id=".$Event_Id."'";?> class="genric-btn primary" style="width: 280px">Volunteer for this event</a>
									</li>
								</ul>
							</div>
							<div class="single-event-details">
								<h4>Details</h4>
								<ul class="mt-10">
									<li class="justify-content-between d-flex">
										<span>Start date</span>
										<span><?php echo $event['Date'] ?></span>
									</li>
									<li class="justify-content-between d-flex">
										<span>Time</span>
										<span><?php echo $event['Time'] ?></span>
									</li>
									<li class="justify-content-between d-flex">
										<span>Ticket Price</span>
										<span><?php if($event['Ticket_Price']!='0'){echo "$ ".$event['Ticket_Price'];}else{echo "Free of Cost";}?></span>
									</li>														
								</ul>
							</div>
							<div class="single-event-details">
								<h4>Venue</h4>
								<ul class="mt-10">
									<li class="justify-content-between d-flex">
										<span>Place</span>
										<span><?php echo $event['Venue'] ?></span>
									</li>										
								</ul>
							</div>
							<div class="single-event-details">
								<h4>Organiser</h4>
								<ul class="mt-10">
									<li class="justify-content-between d-flex">
										<span>Name</span>
										<span><?php echo $event['Organiser_Name'] ?></span>
									</li>
									<li class="justify-content-between d-flex">
										<span>Donated by</span>
										<span>Purvang shah</span>
									</li>														
								</ul>
							</div>														
						</div>
					</div>
				</div>	
			</section>
			<!-- End event-details Area -->
					
			<?php
				}//End of If statement
				else
				{
					header("location:events.php");
				}
			?>
			<!-- Start cta-two Area -->
			<section class="cta-two-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 cta-left">
							<h1>Not Yet Satisfied with our Trend?</h1>
						</div>
						<div class="col-lg-4 cta-right">
							<a class="primary-btn wh" href="courses.php">view our Courses</a>
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