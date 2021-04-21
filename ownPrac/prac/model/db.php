<?php 
class db{
	function OpenCon(){
		$dbhost = "localhost";
		$dbuser= "root";
		$dbpass = "";
		$db = "mydb";
		$conn = new mysqli($dbhost,$dbuser,$dbpass,$db) or die("Connection failed: %s\n".$conn -> error);

		return $conn;
	}
	fucntion CheckUser($conn,$table,$username,$password){
		$result = $conn->query("SELECT * FROM ".$table." WHERE username = '".$username."' AND password='".$password."'");
		return $result;
	}
	function ShowAll($conn,$table){
		$result = $conn->query("SELECT * FROM ".$table."");
		return $result;
	}
	function UpdateUser($conn,$table,$usernmae,$firstname,$email,$pass,$add,$bd,$pro,$inter,$gender){
		$sql= "UPDATE $table SET firstname = '$firstname.', email = '$email', password = '$pass',address = '$add',dob='$db',profession='pro',gender = '$gender',interests='$inter' WHERE username='$username' ";

		if($conn->query($sql) === TRUE){ // === EQUAL & THEY ARE IN SAME TYPE!!!
			$result = TRUE;

		}else {
			$result = FALSE;
		}return $result;
	}
	return $result;
}
function CloseCon($conn){
	$conn -> close();
 }
}
 ?>