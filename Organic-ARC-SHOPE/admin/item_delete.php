<?php include("../includes/connect.php");?>
<?php
$delete=$_GET['delete'];
if(empty($delete)){
echo "you don't select any record";

}else{
$query="delete from product where Product_ID=".$delete."";
$result=mysqli_query($conn,$query);
header("location: addItem.php");
exit();
mysqli_close($conn);
}
?>

