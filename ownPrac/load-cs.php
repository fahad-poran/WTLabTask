<?php 

$conn = mysqli_connect("localhost","root","","hms") or die("Connection Failed");

$sql = "select * from doctors";

$query = mysqli_query($conn,$sql) or die("Query Unsuccessful.");

$str = "";
while($row = mysqli_fetch_assoc($query)){
	$str .= "<option value='{$row['specialization']}'>{$row['specialization']}</option>";
}
echo $str;
?>