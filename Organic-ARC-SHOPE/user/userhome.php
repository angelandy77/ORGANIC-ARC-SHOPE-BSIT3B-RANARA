<?php 

    session_start();
    $role = $_SESSION['sess_userrole'];
    if(!isset($_SESSION['sess_username']) || $role!="User"){
      header('Location: index.php?err=1');
    }
?>
<?php
include '../includes/connect.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Item List || ADMIN </title>
</head>
<style type="">
  @import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);

html {
  font-family: 'Montserrat', Arial, sans-serif;
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
}

body {
 
  font-size:  13px;
  background-image: url(../background.jpg);
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
}

button {
  overflow: visible;
}

button, select {
  text-transform: none;
}

button, input, select, textarea {
  color: #5A5A5A;
  font: inherit;
  margin: 0;
}

input {
  line-height: normal;
}

textarea {
  overflow: auto;
}

#container {
  border: solid 3px #474544;
  max-width: 1000px;
  margin: 30px auto;
  position: relative;
   background: #F2F3EB;
}

form {
  padding: 10px;
  margin: 10px 0;
}

h1 {
  color: #474544;
  font-size: 32px;
  font-weight: 700;
  letter-spacing: 7px;
  text-align: center;
  text-transform: uppercase;
}
h4 {
  color: #474544;
  font-size: 16px;
  font-weight: 700;
  letter-spacing: 7px;
  text-align: center;
  text-transform: uppercase;
  text-decoration: none;
}
h4 > a{
  text-decoration: none;
}

.underline {
  border-bottom: solid 2px #474544;
  margin: -0.512em auto;
  width: 80px;
}

.password {
  float: right;
  width: 45%;
}


textarea {
  line-height: 150%;
  height: 150px;
  resize: none;
  width: 100%;
}
@media screen and (max-width: 768px) {
  #container {
    margin: 20px auto;
    width: 95%;
  }
}

@media screen and (max-width: 480px) {
  h1 {
    font-size: 26px;
  }
  
  .underline {
    width: 68px;
  }
  

@media screen and (max-width: 420px) {
  h1 {
    font-size: 18px;
  }
  
  .underline {
    width: 53px;
  }

</style>
<body>
<div id="container">
  
    <h1>&bull; Welcome,<?php echo $_SESSION['sess_username'];?> &bull;</h1>
  <div class="underline">
  	
  </div>
  <h4>&bull; <a href="logout.php">Logout</a> &bull;</h4>
<?php
$result = mysqli_query($conn,"SELECT * FROM product");
?>
<br><br>
<div align="center">
  <table style="border: 1px solid black; width: 80%; border-collapse: collapse;"> 
    <thead>
      </tr style="border: 1px solid black; width: 80%; border-collapse: collapse; text-align: center;">
        <th style="border: 1px solid black; width: 7%; border-collapse: collapse;">ID</th>
        <th style="border: 1px solid black; width: 15%; border-collapse: collapse;"> Name</th>    
        <th style="border: 1px solid black; width: 15%; border-collapse: collapse;">Category</th>
        <th style="border: 1px solid black; width: 15%; border-collapse: collapse;">Model</th>          
        <th style="border: 1px solid black; width: 15%; border-collapse: collapse;"> Status</th>
        <th style="border: 1px solid black; width: 15%; border-collapse: collapse;">Price</th>        
        <th style="border: 1px solid black; width: 15%; border-collapse: collapse;"> Picture</th>
      </tr>
    </thead>
    <tbody style="border: 1px solid black; width: 80%; border-collapse: collapse; text-align: center;">
     <?php while($row = mysqli_fetch_array($result))
    {?>

    <tr style="border: 1px solid black; width: 80%; border-collapse: collapse;">
    <td style="border: 1px solid black; width: 7%; border-collapse: collapse;"><?Php echo $row['Product_ID']; ?></td>
    <td style="border: 1px solid black; width: 15%; border-collapse: collapse;"><?php echo $row['productName']; ?></td>
    <td style="border: 1px solid black; width: 15%; border-collapse: collapse;"><?php echo $row['Category_ID']; ?></td>
    <td style="border: 1px solid black; width: 15%; border-collapse: collapse;"><?php echo $row['Model']; ?></td>
    <td style="border: 1px solid black; width: 15%; border-collapse: collapse;"><?php echo $row['Status']; ?></td>
    <td style="border: 1px solid black; width: 15%; border-collapse: collapse;"><?php echo $row['Price']; ?></td>
    <td style="border: 1px solid black; width: 15%; border-collapse: collapse;"> <img src="../admin/images/items/<?php echo $row['Picture']; ?> " width="50" height="50"   ></td>
    </tr>

  <?php }mysqli_close($conn);?>
</tbody>
</table>
</div>
</div>
</body>
</html>