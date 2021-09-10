<?php
session_start();
  include("connection.php");
	include("functions.php");
if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$secret = $_POST['secret'];
		if (mysqli_query($conn, $sql)){
			 $last_id = mysqli_insert_id($conn);
		 if(!empty($secret)){
			  $query ="UPDATE `users` SET `secret` = '$secret' WHERE `users`.`id` = '$last_id'";
			   mysqli_query($con,$query);
			  header("Location:index.php");
		        die; 
			  
		 }
	}
	}
if(isset($_SESSION['user_id']))
{
	unset($_SESSION['user_id']);

}
?>