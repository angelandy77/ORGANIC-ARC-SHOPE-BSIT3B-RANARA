<?php 
 require 'includes/logindbconn.php';

 session_start();

 $email = "";
 $password = "";
 
 if(isset($_POST['email'])){
  $email = $_POST['email'];
 }
 if (isset($_POST['password'])) {
  $password = $_POST['password'];

 }
 

 $q = 'SELECT * FROM user WHERE email=:email AND password=:password';

 $query = $dbh->prepare($q);

 $query->execute(array(':email' => $email, ':password' => $password));


 if($query->rowCount() == 0){
  header('Location: index.php');
 }else{

  $row = $query->fetch(PDO::FETCH_ASSOC);

  session_regenerate_id();
  $_SESSION['sess_user_id'] = $row['userID'];
    $_SESSION['sess_fullname'] = $row['fullname'];
      $_SESSION['sess_email'] = $row['email'];
  $_SESSION['sess_username'] = $row['username'];
    $_SESSION['sess_password'] = $row['password'];
        $_SESSION['sess_userrole'] = $row['role'];

        echo $_SESSION['sess_userrole'];
  session_write_close();

  if( $_SESSION['sess_userrole'] == "Admin"){
   header('Location: admin/adminhome.php');
  }
  if( $_SESSION['sess_userrole'] == "User"){
   header('Location: user/userhome.php');
  }
  
  
 }


?>