<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$validatename ="";
$validateemail="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$name=$_REQUEST["fname"];
	$email=$_REQUEST["email"];
	if(empty($name)){
		$validatename="you must enter name";
	}
	else{
		$validatename="your name is ".$name;
	}
	if(empty($email)){
		$validateemail="you must enter email";

	}
	else{
		$validateemail="your email is".$email;
	}
}
?>
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method ="post">
	Enter your first name: <input type="text" name = "fname"> <?php echo $validatename; ?> 
	<br><br>
	Enter your email: <input type="text" name = "email"> <?php echo $validateemail; ?> <br><input type="submit" value="SUBMIT">
</form>
</body>
</html>