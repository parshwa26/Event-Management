<?php

$con = mysqli_connect("localhost", "root", "root","event");

	
		if(isset($_POST['submit']))
		{
			if(isset($_FILES['myFile']))
			{
				if($_SERVER['REQUEST_METHOD']=='POST')
				{
					$file_name = $_FILES['myFile']['name'];
					$file_size = $_FILES['myFile']['size'];
					$file_type = $_FILES['myFile']['type'];
					$temp_name = $_FILES['myFile']['tmp_name'];

					$location = "img/events_image/";

					move_uploaded_file($temp_name, $location.$file_name);
					//echo $location.$file_name;

					move_uploaded_file($temp_name, $location.$file_name);
				}
				else{
					echo "Error";
				}
			}
			$e_name = $_POST['e_name'];	
			$e_desc = $_POST['e_desc'];
			$e_time = date_create($_POST['e_time']);

			$e_vanue = $_POST['e_vanue'];
			$e_price = $_POST['e_price'];
			
			$e_image = $location.$file_name;
			
			$e_date = date_format($e_time,'Y-m-d');
			$e_tim = date_format($e_time,'H:i:s');

			$sqlsubmit = "insert into events (Event_Name, Description, Date, Time, Ticket_Price, Venue, Organiser_Name, Image) values ('$e_name', '$e_desc', '$e_date', '$e_tim', $e_price, '$e_vanue','Org', '$e_image')";

			$result = mysqli_query($con, $sqlsubmit);
			if($result)
				header("location:list-event.php");
			else
				header("location:create-event.php");

		}
		else
				header("location:create-event.php");

?>
