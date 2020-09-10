<?php
session_start();
if(isset($_SESSION["user_id"])){
	include_once 'connection.php';
	if(isset($_GET['Event_Id']))
	{
		$Event_Id = $_GET['Event_Id'];
		$user_id = $_SESSION["user_id"];
		
		$sqlGetId = "select * from volunteer where user_id=$user_id AND event_id=$Event_Id AND status=1";
		$result1 = $con->query($sqlGetId);
		if($result1->num_rows>0){
			header("location:volunteered_events.php");
		}
		else{
			$sqlGetId1 = "select * from volunteer where user_id=$user_id AND event_id=$Event_Id AND status=0";
			$result2 = $con->query($sqlGetId1);
			if($result2->num_rows>0){
				$sqlInsert = "update volunteer set status = 1 where user_id=$user_id AND event_id=$Event_Id";
				$result = $con->query($sqlInsert);
				if($result)
						header("location:volunteered_events.php");
				else
					header("location:events.php");
			}
			else{
				$sqlInsert = "insert into volunteer(user_id,event_id) values ($user_id,$Event_Id)";
				$result = $con->query($sqlInsert);
				if($result)
						header("location:volunteered_events.php");
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