<?php
include ('../includes/connect.php');

$sql ="INSERT INTO user (fullname, email, username, password, role) 
VALUES ('$_POST[fullname]', '$_POST[email]', '$_POST[username]', '$_POST[password]', '$_POST[role]')";

if (!mysqli_query($conn,$sql))
  {
  die('Error: ' . mysqli_error($conn));
  }
   header("location: adduser.php");
  echo "1 record added";

 mysqli_close($conn);
?> 

