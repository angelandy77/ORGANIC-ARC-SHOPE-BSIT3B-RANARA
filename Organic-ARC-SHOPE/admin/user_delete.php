<?php
include '../includes/connect.php'//include settings ?>

<?php
$delete=$_GET['delete'];
if(empty($delete)){
echo "you don't select any record";

}else{
$query="delete from user where userID=".$delete."";
$result=mysqli_query($conn,$query);
header("location:adduser.php?msg= Hal Record Yaa La Delete Gareeyey !!");
exit();
mysqli_close($conn);
}
?>

