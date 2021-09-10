<?php
session_start();
    include("connection.php");
	include("functions.php");
	if($_SERVER['REQUEST_METHOD'] == "POST"){
	$email=$_POST['email'];
	$password =$_POST['password'];
	  if(!empty($email)&&!empty($password)){
		$user_id = random_num(20);
	    $query ="insert into users(user_id,email,password) values('$user_id','$email','$password')";
	    mysqli_query($con,$query);
		header("Location:login.php");
		die;
		}
	else{
		echo "Enter the required information";
     }
	}
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Secret Diary Sign up</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script src="js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="bg">
    <h1>Secret Diary</h1>
    <h5>Store your thoughts permanently and securely.</h5><br>
    <h5>Interested? Sign up now.</h5>
  <div class="container" align="center">
  <form class="form-inline"  method="post">
	<div class="form-group">
	  <label for ="email"></label>
	  <input type="email" class="form-control mb-3" id="email"  placeholder="Your Email" name="email" style="width:480px;"  required>
	  </div>
	 
	  <div class="form-group">
	   <input type="password" class="form-control mb-3" placeholder="Password" name="password" style="width:480px;" required>
	  </div>
	  <br>
	  <div class="form-group">
	   <label class="checkbox-inline"><input type="checkbox" value="">Stay logged in</label>
		</label>
	  </div>
	  <br>
	  <div class="form-group">
	   <button type="submit" class="btn btn-success">Sign up!</button>
	  </div>
	</form>
	<br>
  <a href="login.php" class="btn btn-link" role="button">Log in</a>
  </div>
 </div>
</body>
</html>
