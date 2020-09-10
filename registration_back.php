<?php
	include_once 'connection.php';
	session_start();
	if(isset($_POST['submit']))
	{

		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$sqlGetId = "select max(user_id) as id from user";
		$result = $con->query($sqlGetId);
		if($result->num_rows > 0){
			$row = $result -> fetch_assoc();
			$id = $row['id'] + 1;
		}
		else
			$id = 1;
		
		$sqlInsert = "insert into user values(".$id.",'$name','$email','$password')";
		if($con -> query($sqlInsert)){
			
			$_SESSION["user_id"] = $id;
			$_SESSION["user_name"] = $user_name;
			header("location:index.php");
		}
		else{
			$_SESSION["registration_failed"]="set";			
			header("location:registration.php");
		}
	}
	else
	{
		$_SESSION["register_first"]="set";			
		header("location:registration.php");
	}
?>