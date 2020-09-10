<?php
session_start();
if(isset($_SESSION["user_id"])){
	include_once 'connection.php';
	if(isset($_POST['submit']))
	{
		$Event_Id = $_POST['Event_Id'];
		$user_id = $_SESSION["user_id"];
		$amount = $_POST['amount'];

		$sqlGetAmount = "select donated_amount as amount from donner where user_id=$user_id AND event_id=$Event_Id";
		$result1 = $con->query($sqlGetAmount);
		if($result1->num_rows>0){
			if($row = $result1->fetch_assoc()) {
				$totalamount = $row['amount']+$amount;
				$sqlUpdate = "update donner set donated_amount=$totalamount where user_id=$user_id AND event_id=$Event_Id";
				$result = $con->query($sqlUpdate);
				if($result)
						header("location:donated_events.php");
				else
					header("location:events.php?Event_Id=$Event_Id");
			}
		}
		else{
			$sqlInsert = "insert into donner(user_id,event_id,donated_amount) values ($user_id,$Event_Id,$amount)";
			$result = $con->query($sqlInsert);
			if($result)
					header("location:donated_events.php");
			else
				header("location:events.php?Event_Id=$Event_Id");
		}
	}
	else{
		header("location:events.php");
	}
}
else{
	header("location:login.php");
}
?>