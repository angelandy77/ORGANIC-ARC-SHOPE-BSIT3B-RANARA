<?php
include_once 'includes/connect.php';

$sql="INSERT INTO user (fullname, email, username, password, role) 
VALUES ('$_POST[fullname]', '$_POST[email]', '$_POST[username]', '$_POST[password]', 'User')";

if (!mysqli_query($conn,$sql))
  {
  die('Error: ' . mysqli_error($conn));
  }
   header("location: createaccount.php");
   echo "$messsage = 'Successfully Created'";
 mysqli_close($conn);
?> 
