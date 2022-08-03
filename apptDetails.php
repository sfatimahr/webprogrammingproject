<?php session_start(); ?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{
     background-color: white;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
			text-align:center;
		}
		table, th, td,tr {
			border: 1px solid black;
			border-collapse: collapse;
			text-align: center;
			width: 50%;
		}

		table.center {
			margin-left: auto; 
			margin-right: auto;
		}

		tr:nth-child(odd) {
  			background-color:#bdcee6;
		}

    button{
			padding: 8px 16px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			margin:0 auto;
			transition-duration: 0.4s;
			cursor: pointer;
			align-items: center;
			border-radius:6px;
			background-color: #bdcee6; 
			color: black; 
			font-size: 100%;
			border: 2px solid #3d6ba6;
			position:fixed;
			bottom:300px;
		}
		.button:hover {
			border-radius:9px;
			background-color:#3d6ba6; 
			color: whitesmoke; 
			font-size:large;
			border: 2px solid #3d6ba6;
		}
</style>
<title>Display Appointment Details</title>
</head>
<body>

<?php
if($_SESSION["patientId"] ) { 
    include 'connection.php'; ?>
    <h3 align="center"> HERE IS YOUR DETAILS</h3>

<?php
$patient_name=$_SESSION['patientId'];
$last = mysqli_query($connection, "select * from patient where patientId='$patient_name'");   
$row = mysqli_fetch_row($last);
?>

<table class="center">
    <tr><td>Patient ID :</td><td> <?=$row[0];?></td></tr>
    <tr><td> Name :</td><td>  <?=$row[1];?></td></tr>
    <tr><td>Age :</td><td>  <?=$row[2];?></td></tr>
    <tr><td>Gender :</td><td>  <?=$row[3];?></td></tr>
    <tr><td>IC Number :</td><td>  <?=$row[4];?></td></tr>
    <tr><td>Phone number :</td><td>  <?=$row[5];?></td></tr>
    

 <?php   
   $aa="SELECT * FROM appointment JOIN patient ON appointment.patientId = patient.patientId
   WHERE apptDate='" . $_SESSION["apptDate"] . "' and appointment.patientId='" . $_SESSION["patientId"] . "' AND 
   vaccineId = '". $_SESSION["vaccineId"]."'";
 
     $result = mysqli_query($connection,$aa);
     $row = mysqli_fetch_row($result);
   ?> 
   
   <tr><td> Appointment ID :</td><td>  <?=$row[0];?></td></tr>
   <tr><td> Appointment date :</td><td>  <?=$row[1];?></td></tr>
   <tr><td>Vaccine ID :</td><td>  <?=$row[2];?></td></tr>
   
     <?php  
     $vacc=$_SESSION['vaccineId'];  
     $vaccine= mysqli_query($connection, "select * from vaccine where vaccineId='$row[2]'");
 
     $row1 = mysqli_fetch_row($vaccine);
    ?>
     <tr><td> Vaccine name :</td><td>  <?=$row1[1];?></td></tr> 
     <div align="center">
<button type="button" class="button" onClick="location.href='index.html'" name="patient">Back</button>
</div>
     <?php
      mysqli_free_result($result);
      mysqli_free_result($vaccine);
      mysqli_free_result($last);
      mysqli_close($connection);
    }
else {
	header("Location: login.php");
}
?>
</body>
</html>

    
 
