<?php
include '../includes/connect.php';

?>
<?php 

if (isset($_POST['submit'])){
$id=$_POST['ID'];

$productname=$_POST['productname'];
$category =$_POST['category'];
$model   =$_POST['model'];
$status     =$_POST['status'];
$price   =$_POST['price'];
 $picture =$_FILES['picture']['name'];
$fname = strtotime(date('Y-m-d H:i')).'_'.$picture;


$query="update product  set productName ='$productname', Category_ID ='$category', Model ='$model', Status='$status' , Price='$price'   , Picture='$fname'  where Product_ID =$id ";
$rows=mysqli_query($conn,$query);
echo "succes full updated ".$rows;
 if(!empty($_FILES['picture']['tmp_name'])){
  	move_uploaded_file($_FILES['picture']['tmp_name'], '../admin/images/items/'.$fname);
  }
mysqli_close($conn);

header("location: addItem.php");
exit();
}

?>

