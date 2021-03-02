<?php
include('../control/db.php');
session_start(); 

if(empty($_SESSION["username"])) // Destroying All Sessions
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}
?>

<!DOCTYPE html>
<html>
<body>
<h2>Profile Page</h2>

Hii, <h3><?php echo $_SESSION["username"];?></h3>
<br/>Your Profile Page.

<?php
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->ShowAll($conobj,"student");

if ($userQuery->num_rows > 0) {
    echo "<table><tr><th>Name</th><th>Email</th><th>Department</th><th>Location</th></tr>";
    // output data of each row

    // while($row = $userQuery->fetch_assoc()) {
    //   echo "<tr><td>".$row["firstname"]."</td><td>".$row["email"]."</td><td>".$row["address"]."</td><td>".$row["profession"]."</td></tr>";
    // }
    //making change 
     while($row = $userQuery->fetch_assoc()) {
      echo "<tr><td>".$row["age"]."</td><td>".$row["Email"]."</td><td>".$row["department"]."</td><td>".$row["location"]."</td></tr>";
    }

    echo "</table>";
  } else {
    echo "0 results";
  }



?>





<a href="../control/logout.php">logout</a>

</body>
</html>