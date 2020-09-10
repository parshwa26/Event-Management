<?php
session_start();
if(isset($_SESSION["user_id"])){

	include_once 'connection.php';
	include_once 'header.php';

	$user_id = $_SESSION["user_id"];
	//echo "attended events so far by ".$_SESSION["user_name"];

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
								Upcoming and Voluntered Events			
							</h1>	
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
			<?php
				$sqlGetEvent = "select * from volunteer where user_id=$user_id AND status=1";
				$result1 = $con->query($sqlGetEvent);
				if($result1->num_rows>0){
					?>
						<!-- Start events-list Area -->
						<section class="events-list-area section-gap event-page-lists">
							<div class="container">
								
									<?php
									$upcomingImage=array();
									$upcomingId=array(); 
									$upcomingName=array();
									$upcomingDes = array(); 
									$upcomingDate = array(); 


									$pastImage = array();
									$pastId = array();
									$pastName = array();
									$pastDes = array();
									$pastDate = array();
									
									while($row = $result1->fetch_assoc()){
										$sqlSearch = "select * from events where Event_Id=".$row['event_id'];
										$event_detail = $con->query($sqlSearch);
										if(mysqli_num_rows($event_detail) > 0 )
										{
											

											while($event = mysqli_fetch_assoc($event_detail))
											{
												$opening_date = new DateTime($event['Date']);
												$current_date = new DateTime();

												if ($opening_date > $current_date)
												{
													$upcomingImage[] = $event['Image'];
													$upcomingId[] =  $event['Event_Id'];
													$upcomingName[] = $event['Event_Name'];
													$upcomingDes[] = $event['Description'];
													$upcomingDate[] = $event['Date'];
												}
												else
												{
													$pastImage[] = $event['Image'];
													$pastId[] = $event['Event_Id'];
													$pastName[] = $event['Event_Name'];
													$pastDes[] = $event['Description'];
													$pastDate[] = $event['Date'];

												}
											}
										}
									}
										if(count($upcomingImage)>0){
											echo "<h2>Upcoming Event</h2>";
											echo "<div class='row align-items-center'>";
											for ($x = 0; $x < count($upcomingImage); $x++) {
											?>
												<div class="col-lg-6 pb-30">
													<div class="single-carusel row align-items-center">
														<div class="col-12 col-md-6 thumb">
															<img class="img-fluid" <?php echo "src='".$upcomingImage[$x]."'";?> alt="">
														</div>
														<div class="detials col-12 col-md-6">
															<p><?php echo $upcomingDate[$x];?></p>
															<a <?php echo "href= 'event-details.php?Event_Id=".$upcomingId[$x]."'";?>><h4><?php echo $upcomingName[$x];?></h4></a>
															<p>
																For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
															</p>
														</div>
													</div>
												</div>
											<?php		    
											}
											echo "</div>";
										}
										else{
											echo "<h2>No upcoming Event</h2>";
											echo "<a href='events.php' class='text-uppercase primary-btn mx-auto mt-40'>Register for Upcoming Events</a>";
										}

										if(count($pastImage)>0){
											echo "<h2>Past Event</h2>";
											echo "<div class='row align-items-center'>";


											for ($x = 0; $x < count($pastImage); $x++) {
											?>
												<div class="col-lg-6 pb-30">
													<div class="single-carusel row align-items-center">
														<div class="col-12 col-md-6 thumb">
															<img class="img-fluid" <?php echo "src='".$pastImage[$x]."'";?> alt="">
														</div>
														<div class="detials col-12 col-md-6">
															<p><?php echo $pastDate[$x];?></p>
															<a <?php echo "href= 'event-details.php?Event_Id=".$pastId[$x]."'";?>><h4><?php echo $pastName[$x];?></h4></a>
															<p style="width: 250px">																
																For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
															</p>
														</div>
													</div>
												</div>
											<?php		    
											}
											echo "</div>";
										}
										else{
											echo "<h2>No Past Event</h2>";
											echo "<a href='events.php' class='text-uppercase primary-btn mx-auto mt-40'>Register for Upcoming Events</a>";
										}
									?>
									<!-- <a href="#" class="text-uppercase primary-btn mx-auto mt-40">Upcoming Events</a>		 -->
								</div>
							</div>	
						</section>
						<!-- End events-list Area -->
					<?php
				}
				else
				{
					?>
						<section class="events-list-area section-gap event-page-lists">
							<div class="container">
								<div class="row align-items-center">
					<?php
					echo "<h2>You have not participated in any event so for.</h2>";
					echo "<a href='events.php' class='text-uppercase primary-btn mx-auto mt-40'>Click here to register</a>";
					?>
				</div></div></section>
					<?php
				}
			?>

			<!-- start footer Area -->		
			<?php
				include_once 'footer.php'
			?>	
			<!-- End footer Area -->		
		</body>
	</html>
<?php
}
else
{
	header("location:login.php");	
}
?>