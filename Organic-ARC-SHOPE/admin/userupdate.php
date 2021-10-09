<?php
include '../includes/connect.php';

?>
<?php 

if (isset($_POST['submit'])){

$id        = $_POST['id'];
$fullname  = $_POST['fullname'];
$email     = $_POST['email'];
$username  = $_POST['username'];
$password     = $_POST['password'];
$role     = $_POST['role'];

$query="update user  set fullname ='$fullname', email ='$email', username ='$username', password='$password' , role='$role' where userID = $id ";

$rows=mysqli_query($conn,$query);
echo "succes full updated ".$rows;
mysqli_close($conn);
header("location: adduser.php");
exit();
}
?>




<?php
include '../includes/connect.php';

?>

<?php 

if (isset($_POST['submit'])){

echo $fullname=$_POST['fullname'];
echo  $email=$_POST['email'];
echo $username=$_POST['username'];
echo  $password=$_POST['password'];
echo $role=$_POST['role'];
$userID=$_POST['userID'];

echo $query="update user  set fullname ='$fullname', email='$email',username='$username',password='$password',role='$role'where userID=$userID";
$rows=mysqli_query($conn,$query);
echo "succes full updated ".$rows;
mysqli_close($conn);
header("location: adduser.php");
exit();
}

?>

