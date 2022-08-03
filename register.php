<?php
session_start();
$message="";
if(count($_POST)>0) {
	include 'connection.php';
	$result = mysqli_query($connection,"SELECT * FROM patient 
	WHERE patientName='" . $_POST["patientName"] . "' ,patientAge='" . $_POST["patientAge"] . "' ,
    patientGender='" . $_POST["patientGender"] . "' ,patientIC='" . $_POST["patientIC"] . "' ,
    patientContact='" . $_POST["patientContact"]."'");
	$row = mysqli_fetch_array($result);
}
  

?>
<!DOCTYPE html>
<html>
<head>
<title>PATIENT REGISTRATION</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Course Registration Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,0); } </script>
<!-- Meta tag Keywords -->
<link href="style1.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<!-- //js -->
<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<!-- //web-fonts --> 
</head>
<body>
	<!-- banner --> 
<div class="video"> 
	<div class="center-container">
	    <div class="w3ls-agileinfo">
			<h1> Patient Registration Form </h1>	
		</div>
		 <div class="bg-agile">
			<h2>REGISTER </h2>
			<div class="login-form">	
            <form action="appointment.php" method = "post">
            <p><b>Full name: </b><input type="text" name="patientName" required="required"></p>
            <p><b>Age : </b><input type="text" name="patientAge" required="required"></p>
            <p><b>Gender : <b></b>
                <input type="radio" name="patientGender" value="M" required/> Male
                <input type="radio" name="patientGender" value="F" /> Female
        </p><br>
        <p><b>IC Number : </b><input type="text" name="patientIC" required="required"></p>
        <p><b>Phone number : </b><input type="text" name="patientContact" required="required"></p>
		</div>
		
	
		<div align=center ><input type="submit" class="button" value="Submit">
</div>
</form>	
			</div>	
		</div>
	<!-- //banner --> 
	 <!--copyright-->
		
	<!--//copyright-->
	</div>	
</div>	
</body>
</html>