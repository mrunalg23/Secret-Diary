<?php
session_start();
    include("connection.php");
	include("functions.php");
	$user_date = check_login($con);
  $result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Secret Diary</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script src="js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <style>
   .bg1{
	background-image: url("lakebg.jpg");
  background-size: cover;  
  background-position: center;
  background-repeat: no-repeat;
  height: 100%;
	}
.navbar{
height:55px;
}
  </style>
</head>
<body>
<form method="post">
<div class="bg1">
<nav class="navbar bg-light">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><h3>Secret Diary</h3></a>
    </div>
    <div class="form-group">
	<ul class="navbar-right">
    <a href="signup.php" class="btn btn-outline-info" role="button">Logout</a>
</ul>
</div>
</nav>
<br>

 
    <div class="form-group">
      <textarea class="form-control" rows="27" id="comment" name="secret"></textarea>
    </div>


</div>
</form>
</body>
</html>