<?php 
session_start();
if(empty($_SESSION["username"])){
	header("Location: ..//control/login.php"); 
}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Login</title>
 </head>
 <body>
 	<h2>Login</h2>
 <form action ="" method = "post">
 	<input type="text" name="username" placeholder="Enter your username" required> <!-- default validation -->
 	<input type="password" name="password" placeholder="Enter your password" required>
 	<input type="submit" name="submit" value = "Login">

 </form>
 <br><span><?php echo $error ?></span>
 </body>
 </html>