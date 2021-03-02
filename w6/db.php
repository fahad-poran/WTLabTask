<?php 
// to connct data base
// we will need server name,username,password

$servername = "localhost"; //default host name
$username = "root"; 
$password = ""; // default

//create conn using mysqli funtion
$conn = new mysqli($servername,$username,$password);
//check conn
if($conn->connect_error){
	die("Connection failed: ".$conn->connect_error);
} echo "Connected successfully";


 ?>