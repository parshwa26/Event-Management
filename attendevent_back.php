<?php
session_start();
if(isset($_SESSION["user_id"])){
	include_once 'connection.php';
	if(isset($_GET['Event_Id']))
	{
		$Event_Id = $_GET['Event_Id'];
		$user_id = $_SESSION["user_id"];
		
		$sqlGetId = "select * from attendee where user_id=$user_id AND event_id=$Event_Id AND status=1";
		$result1 = $con->query($sqlGetId);
		if($result1->num_rows>0){
			header("location:attended_events.php");
		}
		else{
			$sqlGetId1 = "select * from attendee where user_id=$user_id AND event_id=$Event_Id AND status=0";
			$result2 = $con->query($sqlGetId1);
			if($result2->num_rows>0){
				$sqlInsert = "update attendee set status = 1 where user_id=$user_id AND event_id=$Event_Id";
				$result = $con->query($sqlInsert);
				if($result)
						header("location:attended_events.php");
				else
					header("location:events.php");
			}
			else{
				$sqlInsert = "insert into attendee(user_id,event_id) values ($user_id,$Event_Id)";
				$result = $con->query($sqlInsert);
				if($result)
						header("location:attended_events.php");
				else
					header("location:events.php");
			}
		}
	}
}
else{
	header("location:login.php");
}
?>