<?php 
session_start();
if(empty($_SESSION["username"])){
	header("Location: ../view/login.php") //redirecting to HOme page
}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>HOme</title>
 </head>
 <body>
 Hii, <h3><?php echo $_SESSION["username"]; ?></h3>
 <br> <h5>Welcome to home page.</h5>

 <h5>Do You want to Update your <a href="pagetwo.php">Profile.</a></h5>
 <br>
 <h5>To Logout <a href="../control/logout.php">Logout</a></h5>
 

 </body>
 </html>