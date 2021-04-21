<?php include "../control/Database.php" ?>

<?php 

session_start();
$db = new Database();

if((!_SESSION['username']))
{
	header("Location:../login.php");
}


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Admin Section</title>
 </head>
 <body>
 
<header class = "header-area"></header>
<div class="title"><h1>Hospital Managment System</h1></div>
<div class = "navigation">
	<nav class="menu">
		<ul>
			<li><a href="#"><?php echo $_SESSION['username']; ?></a>
				<ul><a href="../control/logout.php">Logout</a></ul></li>
		</ul>
	</nav>
</div>
</header>
<div class = "admin-wrapper">
	<div class ="left-sidebar">
		<ul><li><a href="filter.php">Book Appoinment</a></li>
			<li><a href="appoinment-history.php">Appoinment History</a></li>
			<li><a href="update-profile.php">Update Profile</a></li></ul>
	</div>
</div>
<!-- 
Admin Content -->
<div class = "admin-content"><div class ="select-group"><div class= "select1">
	<label>Doctor Specialization </label>
</div></div>
<select class = "select2">
	<label>Gender</label>
</select>
</div></div>


 </body>
 </html>