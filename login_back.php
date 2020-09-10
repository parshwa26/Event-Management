<?php
	include_once 'connection.php';
	session_start();
	if(isset($_POST['btn_login']))
	{
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		$sqlLogin = "select user_id,user_name from user where email='$email' AND password='$password'";
		//echo $sqlLogin;
		if($result = $con -> query($sqlLogin)){
			if($result->num_rows > 0){
				$row = $result -> fetch_assoc();
				$id = $row['user_id'];
				$user_name = $row['user_name'];
				//echo $id.$user_name;
				$_SESSION["user_id"] = $id;
				$_SESSION["user_name"] = $user_name;
				header("location:index.php");
			}
			else{
				$_SESSION["invalid"] = "1";
				header("location:login.php");	
			}
		}
		else{
			$_SESSION["invalid"] = "1";
			header("location:login.php");
		}
	}
	else
	{
		$_SESSION["invalid"] = "1";
		header("location:login.php");
	}
?>