
<?php
   include('../includes/connect.php');
$fname = strtotime(date('Y-m-d H:i')).'_'.$_FILES['picture']['name'];
$sql="INSERT INTO product (productName, Category_ID, Model,  Status, Price, Picture) 
VALUES ('$_POST[productname]', '$_POST[select]', '$_POST[model]', '$_POST[status]', '$_POST[price]', '$fname')";

if (!mysqli_query($conn,$sql))
  {
  die('Error: ' . mysqli_error($conn));
  }
  if(!empty($_FILES['picture']['tmp_name'])){
  	move_uploaded_file($_FILES['picture']['tmp_name'], '../admin/images/items/'.$fname);
  }
  header("location: addItem.php");

 mysqli_close($conn);
?> 