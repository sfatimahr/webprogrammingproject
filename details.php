<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<style>
body {
  background-image: url('https://img.rawpixel.com/s3fs-private/rawpixel_images/website_content/rm323-s77-13.jpg?w=800&dpr=1&fit=default&crop=default&q=65&vib=3&con=3&usm=15&bg=F4F4F3&ixlib=js-2.2.1&s=4ebc2621391ebc9733825bd9c4a4e6e3');
  background-repeat:no-repeat;
  background-attachment: fixed;  
          background-size: cover;
  
}



.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: black;
  font-family: 'Roboto', sans-serif;
}


.button {
  background-color: #2F4F4F; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #7C9190;
}
</style>
<title>Display Admin Details</title>
</head>
<body>
<?php

if($_SESSION["adminName"]) { 
	include 'connection.php'; ?>
	<div class="hero-text">
	<h3 align="center"> Hi <?php echo $_SESSION["adminName"]; ?></h3>
	<h3 align="center"> Here is your details</h3>
	<br><br>
	
	<?php
    
	$session_id=$_SESSION['adminId'];
    $result = mysqli_query($connection, "select * from adminn where adminId='$session_id'");
	$row = mysqli_fetch_row($result);
	?>
  <table>
	
  <tr><td>ID :</td> <td><?=$row[0];?><br><br></td></tr>
  <tr><td>Name :</td> <td><?=$row[1];?><br><br></td></tr>
  <tr><td>Phone number : </td><td><?=$row[2];?><br><br></td></tr>
  <tr><td>Password :</td> <td><?=$row[3];?><br><br></td></tr>

</table>
	 <button class="button" onClick="location.href='login2.php'" name="admin">BACK</button>

</div>
	
	<?php
	mysqli_free_result($result);
    
	mysqli_close($connection);
    }
    

else {
	header("Location: login.php");
}
?>
</body>
</html>


