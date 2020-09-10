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
								Donate for Event		
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
								<li>
									<form action="donateevent_back.php" method="post">
									<a class="justify-content-between d-flex">
										<p>Amount $</p>

										<span><input type="number" name="amount" placeholder="amount" onfocus="this.placeholder = ''" onblur="this.placeholder = 'amount'" required class="single-input" pattern="[0-9]+" title="Amount must be numeric"></span>
									</a>
									<input type="hidden" name="Event_Id" <?php echo "value=".$Event_Id; ?>>
									<input type="submit" name="submit" class="primary-btn text-uppercase" value="Donate for event">
									</form>
								</li>
							</ul>
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
			<br><br>
		</body>
	</html>
<?php
}
else
{
	header("location:login.php");	
}
?>
