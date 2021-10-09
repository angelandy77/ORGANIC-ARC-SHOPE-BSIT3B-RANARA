<?php
include '../includes/connect.php'//include settings ?>

<!doctype html>
<html lang="en">
<head>
	<title>Add User || ADMIN </title>
</head>
<style type="">
	@import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);

html {
  font-family: 'Montserrat', Arial, sans-serif;
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
}

body {
 
  font-size: 	13px;
  background-image: url(../background.jpg);
  background-size: cover;
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
  max-width: 1300px;
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

.underline {
  border-bottom: solid 2px #474544;
  margin: -0.512em auto;
  width: 80px;
}

.password {
	float: right;
	width: 45%;
}

input[type='text'], [type='email'], [type='password'], select, textarea {
	background: none;
  border: none;
	border-bottom: solid 2px #474544;
	color: #474544;
	font-size: 1.000em;
  font-weight: 400;
  letter-spacing: 1px;
	margin: 0em 0 1.875em 0;
	padding: 0 0 0.875em 0;
  text-transform: uppercase;
	width: 100%;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	-ms-box-sizing: border-box;
	-o-box-sizing: border-box;
	box-sizing: border-box;
	-webkit-transition: all 0.3s;
	-moz-transition: all 0.3s;
	-ms-transition: all 0.3s;
	-o-transition: all 0.3s;
	transition: all 0.3s;
}

input[type='text']:focus,[type='email']:focus, [type='password']:focus, textarea:focus {
	outline: none;
	padding: 0 0 0.875em 0;
}


.username {
	float: left;
	width: 45%;
}

select {
  background: url('https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-ios7-arrow-down-32.png') no-repeat right;
  outline: none;
  -moz-appearance: none;
  -webkit-appearance: none;
}

select::-ms-expand {
  display: none;
}

.role {
  width: 100%;
}

.fullname {
  width: 100%;
}
.email {
  width: 100%;
}


textarea {
	line-height: 150%;
	height: 150px;
	resize: none;
  width: 100%;
}

::-webkit-input-placeholder {
	color: #474544;
}

:-moz-placeholder { 
	color: #474544;
	opacity: 1;
}

::-moz-placeholder {
	color: #474544;
	opacity: 1;
}

:-ms-input-placeholder {
	color: #474544;
}

#form_button {
  background: none;
  border: solid 2px #474544;
  color: #474544;
  cursor: pointer;
  display: inline-block;
  font-family: 'Helvetica', Arial, sans-serif;
  font-size: 0.875em;
  font-weight: bold;
  outline: none;
  padding: 20px 35px;
  text-transform: uppercase;
  -webkit-transition: all 0.3s;
	-moz-transition: all 0.3s;
	-ms-transition: all 0.3s;
	-o-transition: all 0.3s;
	transition: all 0.3s;
}

#form_button:hover {
  background: #474544;
  color: #F2F3EB;
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
  
  #form_button {
    padding: 15px 10px;
  }
}

@media screen and (max-width: 420px) {
  h1 {
    font-size: 18px;
  }
  
  .underline {
    width: 53px;
  }
  
  input[type='text'], [type='email'],  [type='password'], select, textarea {
    font-size: 0.875em;
  }
}
</style>
<body>
<div id="container">
  <h1>&bull; Add User &bull;</h1>
  <div class="underline">
  </div>
  
  <form action="userRegistration.php" method="post" id="contact_form">
  	<div class="fullname">
      <label for="fullname"></label>
      <input type="text" placeholder="Fullname" name="fullname" id="fullname" required>
    </div>
    <div class="email">
      <label for="name"></label>
      <input type="email" placeholder="Email" name="email" id="email" required>
    </div>
    <div class="username">
      <label for="useruser"></label>
      <input type="text" placeholder="Username" name="username" id="username" required>
    </div>
    <div class="password">
      <label for="password"></label>
      <input type="password" placeholder="Password" name="password" id="password" required>
    </div>
    <div class="role">
      <label for="role"></label>
      <select placeholder="Role" name="role" id="role" required>
        <option disabled hidden selected>role</option>
        <option>Admin</option>
        <option>User</option>
      </select>

    </div>
    <div class="submit">
      <input type="submit" value="Add User" id="form_button" />
    </div>
  </form>
</div>
	



<?php
$result = mysqli_query($conn,"SELECT * FROM user");
?>
  <div id="container">
  <table style="border: 1px solid black; width: 100%; border-collapse: collapse;"> 

			
			<thead>
				<tr style="border: 1px solid black; width: 100%; border-collapse: collapse; text-align: "> <th colspan="7" > User Data Record</th>  
				</tr> 
			</thead>
		<thead >
			<tr style="border: 1px solid black; width: 100%; border-collapse: collapse;">
   		    <th style="border: 1px solid black; width: 5%; border-collapse: collapse;">Check</th> 
    	      <th style="border: 1px solid black; width: 5%; border-collapse: collapse;">User ID</th>
              <th style="border: 1px solid black; width: 17%; border-collapse: collapse;">Fullname</th>			  
    		<th style="border: 1px solid black; width: 17%; border-collapse: collapse;">UserName</th>
		    <th style="border: 1px solid black; width: 17%; border-collapse: collapse;">Email</th>
           <th style="border: 1px solid black; width: 17%; border-collapse: collapse;">Password</th>
           <th style="border: 1px solid black; width: 17%; border-collapse: collapse;">Role</th>			
    		<th style="border: 1px solid black; width: 5%; border-collapse: collapse;">Actions</th>
			</tr>
		</thead>
		<tbody style="border: 1px solid black; width: 100%; border-collapse: collapse; text-align: center;">
<?php while($row = mysqli_fetch_array($result))
  {?>

      <tr style="border: 1px solid black; width: 100%; border-collapse: collapse;">
    <td style="border: 1px solid black; width: 5%; border-collapse: collapse;"><input type="checkbox"></td>
    <td style="border: 1px solid black; width: 5%; border-collapse: collapse;"><?Php echo $row['userID']; ?></td>
    <td style="border: 1px solid black; width: 17%; border-collapse: collapse;"><?php echo $row['fullname']; ?></td>
   <td style="border: 1px solid black; width: 17%; border-collapse: collapse;"><?php echo $row['username']; ?></td>
	<td style="border: 1px solid black; width: 17%; border-collapse: collapse;"><?php echo $row['email']; ?></td>
	<td style="border: 1px solid black; width: 17%; border-collapse: collapse;"><?php echo $row['password']; ?></td>
	<td style="border: 1px solid black; width: 17%; border-collapse: collapse;"><?php echo $row['role']; ?></td>
    <td style="border: 1px solid black; width: 7%; border-collapse: collapse;"> <a href="userupdateform.php?update=<?php echo $row['userID']; ?>"  onClick="edit(this);" title="Edit" >  <input type="image" src="images/icn_edit.png" title="Edit"> </a>
    	&nbsp&nbsp&nbsp&nbsp
     <a href="user_delete.php?delete=<?php echo $row['userID']; ?>" onClick="del(this);" title="Delete"><input type="image" src="images/icn_trash.png" title="Trash"/>  </a></td>
    </tr>

  <?php }mysqli_close($conn);?>
      </tbody>
</table>
	  
 </div> 

	</section>
          </div>
   </div>
    
</body>

</html>