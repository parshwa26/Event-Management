<?php
	session_start();
	if(isset($_SESSION["user_id"])){

	include_once 'connection.php';
	include_once 'header.php';
	if(isset($_GET['Event_Id']))
	{
		$Event_Id = $_GET['Event_Id'];
	}
	$user_id = $_SESSION["user_id"];
?>
	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		
		</head>
		<body>	
			<?php
				$subject_table = mysqli_query($con,"select * from events where Event_Id = '$Event_Id'");

				if($subject = mysqli_fetch_assoc($subject_table))
				{
			?>
			<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Registration for attending		
							</h1>	
							<p class="text-white link-nav"><a href="events.php">Event </a>  <span class="lnr lnr-arrow-right"></span>  <a href="event-details.php"> <?php echo $subject['Event_Name'] ?></a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start course-details Area -->
			<section class="course-details-area pt-120">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 left-contents">
							<div class="main-image">
								<img class="img-fluid" width="450" <?php echo "src = '".$subject['Image']."'";?> alt="">
							</div>
						</div>
						<div class="col-lg-4 right-contents">
							<ul>
								<li>
									<a class="justify-content-between d-flex" href="#">
										<p>Event organiser</p>
										<span><?php echo $subject['Organiser_Name'] ?></span>
									</a>
								</li>
								<li>
									<a class="justify-content-between d-flex" href="#">
										<p>Price</p>
										<span><?php if($subject['Ticket_Price']!='0'){echo "$ ".$subject['Ticket_Price'];}else{echo "Free of Cost";}?></span>
									</a>
								</li>
								<li>
									<a class="justify-content-between d-flex" href="#">
										<p>Date</p>
										<span><?php echo $subject['Date']?></span>
									</a>
								</li>
								<li>
									<a class="justify-content-between d-flex" href="#">
										<p>Time</p>
										<span><?php echo $subject['Time']?></span>
									</a>
								</li>
								<li>
									<a class="justify-content-between d-flex" href="#">
										<p>Location</p>
										<span><?php echo $subject['Venue']; ?></span>
									</a>
								</li>
							</ul>
							<?php
								$sqlGetId = "select * from attendee where user_id=$user_id AND event_id=$Event_Id AND status=1";
								$result1 = $con->query($sqlGetId);
								$sqlGetId1 = "select * from volunteer where user_id=$user_id AND event_id=$Event_Id AND status=1";
								$result2 = $con->query($sqlGetId1);
								if($result2->num_rows>0){
								?>
									<a <?php echo "href= 'volunteered_events.php?Event_Id=".$Event_Id."'";?> class="primary-btn text-uppercase">Already Registered as Volunteer</a>		
								<?php
								}
								else if($result1->num_rows>0){
								?>
									<a <?php echo "href= 'attended_events.php?Event_Id=".$Event_Id."'";?> class="primary-btn text-uppercase">Already Registered as Attende</a>		
								<?php
								}
								else{
							?>
								<a <?php echo "href= 'attendevent_back.php?Event_Id=".$Event_Id."'";?> class="primary-btn text-uppercase">Enroll for event</a>
							<?php } ?>
						</div>
					</div>
				</div>	
			</section>
			<!-- End course-details Area -->
			
			<?php
				}
				include_once 'footer.php'
			?>	
			<!-- End footer Area -->	
			<br>
		</body>
	</html>
<?php
}
else
{
	header("location:login.php");	
}
?>
