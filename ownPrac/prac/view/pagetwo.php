<?php 
session_start();

include('../control/updatecheck.php');

if(empty($_SESSION["username"])){ // Destroying All sessions
header("Location: ../view/login.php");
}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <h2>Profile Page</h2>
 Hii, <h3><?php echo $_SESSION["username"]; ?></h3>
 <br> your profile page.
 <br><br>
 <?php $radio1=$radio2=$radio3="";
 $firstname=$email="";
 $pass="";
 $connection = new db();
 $conboj = $connection->OpenCon();

 $userQuery=$connection->CheckUser($conboj,"student",$_SESSION["username"],$_SESSION["password"]);

if($userQuery->num_rows > 0){
	while($row=$userQuery->fetch_assoc()){
		$firstname = $row["firstname"];
		$email = $row["email"];

		if($row["gender"] == "female"){
			$radio1="checked";}
			else if($row["gender"]=="male"){$radio2="checked";}
			else($row["gender"] == "other"){$radio3 = "checked";}
}
}
else{echo "0 results";}
  ?>

  <form action='' method = 'post'>
  	Name : <input type="text" name="firstname" value="<?php echo $firstname; ?>"> <br>
  	email: <input type="text" name="email" value="<?php echo $email; ?>"> <br>
  	Gender:
  	<input type="radio" name="gender" value='female' <?php echo $radio1; ?>>Female
  	<input type="radio" name="gender" value='male' <?php echo $radio2; ?>>Male
  	<input type="radio" name="gender" value='other' <?php echo $radio3; ?>>Other <br> <br>

  	New Password: <input type="password" name="newpassword"> <br>
  	<br>Confirm Password: <input type="password" name="conpassword"> <br>
  	Birthday Date: <input type="date" name="birthday" id="birthday"> <br><!--  here we've used an bd ID -->
  	Address: <input type="text" name="address"> <br>
  	Profession: <select name = "prop" id="prop"> <!-- id is here used! -->
  		<option value = ""></option>
  		


  	</select>

  </form>
 </body>
 </html>