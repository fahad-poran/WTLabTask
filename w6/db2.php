
<?php 
//28Fev

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) 
	{ 
		die("Connection failed: " . $conn->connect_error);
	}

$firstname = " FAHAD ";
$lastname = " ABDULLAH ";
$age = 25 ;
$id = "123511";
//queury

$sql = "INSERT INTO user (firstname, lastname, age,id) VALUES ('$firstname', '$lastname' ,'$age','$id')";

$res = $conn->query($sql);//execute query
if($res)
	{ 
		echo "new record inserted"; 
	}
	else
	{ 
		echo "error occurred".$conn->error; 
	}
$conn->close();
?>

