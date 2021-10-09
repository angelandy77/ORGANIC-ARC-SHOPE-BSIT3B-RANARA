<?php 
    session_start();
    $role = $_SESSION['sess_userrole'];
    if(!isset($_SESSION['sess_username']) || $role!="Admin"){
      header('Location: index.php?err=2');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>ADMIN || PANARA</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
<style>
body
{
  margin: 0;
  padding: 0;
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background-image: url(../background.jpg);
  background-size: cover;
  background-attachment: fixed;
  background-repeat: no-repeat;

}

.container
{
  perspective: 320px;
}

.btn
{
  display: block;
  margin: 40px 0;
  width: 240px;
  height: 80px;
  border: none;
  background: linear-gradient(to bottom, #009900 0%, #66ff99 100%);
  color: #fff;
  font-size: 18px;
  border-radius: 6px;
  outline: none;
  cursor: pointer;
  transition: .3s linear;
}

.btn1:hover {
  transform: rotateX(15deg);
  box-shadow: 0 15px 15px #00FF7F;
}

.btn2:hover {
  transform: rotateX(-15deg);
  box-shadow: 0 -15px 15px #00FF7F;
}

.btn3:hover {
  transform: rotateY(15deg);
  box-shadow: -15px 0 15px #00FF7F;
}

.btn4:hover {
  transform: rotateY(-15deg);
  box-shadow: 15px 0 15px #00FF7F;
}

.btn a{
  text-decoration:  none;
  color:  black;
}
</style>
</head>
<body>
    <div class="container">
  <h2 align=" center">ADMIN PANEL</h2>
  <p>Welcome, <?php echo $_SESSION['sess_username'];?></p>
    <button type="submit" onclick="window.location='adduser.php'" class="btn btn1">ADD USER</button>
    <button  type="submit" onclick="window.location='additem.php'"class="btn btn2">ADD ITEM</button>
    <button  type="submit" onclick="window.location='products.php'"class="btn btn3">VIEW PRODUCTS</button>
    <button  type="submit" onclick="window.location='logout.php'"class="btn btn4">LOGOUT</button>
  </div>

</body>
</html>