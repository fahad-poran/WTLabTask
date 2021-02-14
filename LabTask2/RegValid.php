<!DOCTYPE html>
<html>
<head>
<style type="text/css"></style>
<body>

	<?php
$validatename ="";
$validateemail="";
$validateradio="";
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
	if(!isset($_REQUEST["vechicle1"]))
	{
		$v1 = $_REQUEST["vechicle1"];
	}
	if(isset($_REQUEST["vechicle2"])){
		$v2 = $_REQUEST["vechicle2"];
	}
	if(isset($_REQUEST["vechicle3"])){
		$v2 = $_REQUEST["vechicle3"];
	}
}
?>


<form>
	<fieldset>
<legend>Registration:</legend><br>

</form><br>
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method ="post">
	Name 		 <input type="text" name = "fname"> <?php echo $validatename; ?> 
<br><br>
<input type="submit">

</form><br>

<form action="wlcome.php" method="POST">
<legend>Email: <input type="text" name = "email"> <?php echo $validateemail; ?> 
<input type="submit">

</form><br>

<form action="wlcome.php" method="POST"><fieldset>
<legend>Gender</legend>
 <legend> <input type="radio" id="Male" name="Male">
 <label for="Male">Male</label>
<input type="radio" id="Female" name="Female">
 <label for="Female">Female</label>
 <input type="radio" id="Other" name="Other" >
<label for="other">Other</label></legend>

<?php echo $validateradio; ?>
<br><input type="submit">
   </fieldset>
  </fieldset>
</form><br>

    <br>
<input type="submit"><br>
  </select>
  </fieldset>
</form>
       
 
</body>
</html