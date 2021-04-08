<?php 
include ('../model/db.php');

session_start();
//store session data;
if(isset($_POST['submit'])){
if(empty($_POST['username']) || empty($_POST['password'])){
	$error = "Username and password is empty";
 }
 else{
 	//storing into variables
 	$username= $_POST['username'];
 	$password = $_POST['password'];

 	$connection = new db();
 	$conboj = $connection->OpenCon();

 	$userQuery= $connection->CheckUser($conboj,"student",$username,$password);

 	if($userQuery->num_row>0){
 		$_SESSION["username"] = $username;
 		$_SESSION["password"] = $password;
 	}
 	else{
 		$error = "Username or password does not match with database";
 	}
 	$connection->CloseCon($conboj);
 }
}




?>