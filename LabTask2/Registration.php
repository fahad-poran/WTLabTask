<!DOCTYPE html>
<html lang="en">
<!-- <head> file import -->
<head>    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
</head>
<body>
   <h1> My Registration Page</h1>
   <form>
   <table>
<br>
<br>  
<tr> <td>Name:</td>
<td>  <input type="text" name ="firstname"></td></tr>
   
<tr> <td>Email:</tb>
<td>  <input type="text" name='email'> </td></tr>

<tr> <td>User Name:</td>
<td>  <input type="text" name ="username"></td></tr>
   
<tr> <td>Confirm Password:</tb>
<td>  <input type="text" name='cPassword'> </td></tr>
<td><h3> Gender </h3></td>

<tr> <td><input type="radio" name='male'> Male:</tb>

 <tr> <td><input type="radio" name='male'> Female:</tb>
 <tr> <td><input type="radio" name='male'> Others:</tb>
 </tr>

<td> <h3> Date Of Birth </h3> </td>
<tr><td> <input type="date" name="dob"> (mm/dd/yyyy)<td></tr>

<td><input type="submit" value="Submit">
<input type="reset"></td>
</table>   
</form>
<?php
$colors = array("red", "green", "blue", "yellow"); 

foreach
 ($colors 
as
 $x) {
  echo $x;
}
?>
</body>
</html>