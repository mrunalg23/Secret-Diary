<?php
 
session_start();

	include("connection.php");
	include("functions.php");
    if($_SERVER['REQUEST_METHOD'] == "POST"){
	$email=$_POST['email'];
	$password =$_POST['password'];
	  if(!empty($email)&&!empty($password)){
	    $query ="select * from users where email='$email' limit 1";
	    $result=mysqli_query($con,$query);
		if($result){
			if ($result && mysqli_num_rows($result)>0){
	         $user_data=mysqli_fetch_assoc($result);
	         if($user_data['password'] === $password){
				$_SESSION['user_id'] = $user_data['user_id'];
				header("Location:index.php");
		        die; 
			 }
	      }
        }
		echo "wrong username or password!";
		}else{
		echo "wrong username or password!";
     }
	}
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Secret Diary login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script src="js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="bg">
    <h1>Secret Diary </h1>
    <h5>Store your thoughts permanently and securely.</h5><br>
    <h5>Log in using your username and password.</h5>
  <div class="container" align="center">
  <form class="form-inline"  method="post">
	<div class="form-group">
	  <label for ="email"></label>
	  <input type="email" class="form-control mb-3" id="email" placeholder="Your Email" name="email" style="width:480px;"  required>
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
	      <button type="submit" class="btn btn-success">Log in!</button>
	  </div>
	</form>
	<br>
  <a href="signup.php" class="btn btn-link" role="button">Sign up</a>
  </div>
 </div>
</body>
</html>