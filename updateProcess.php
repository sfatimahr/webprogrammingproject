<?php session_start(); ?>
<html>
	<style>
		body{
            background-color: white;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
			text-align:center;
		}
		table, th, td {
			border: 1px solid black;
			border-collapse: collapse;
			text-align: center;
			width: 50%;
		}

		table.center {
			margin-left: auto; 
			margin-right: auto;
		}

		tr:nth-child(even) {
  			background-color: #98AFC7;
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
			bottom:400px;
		}
		.button:hover {
			border-radius:9px;
			background-color: #3d6ba6; 
			color: whitesmoke; 
			font-size:large;
			border: 2px solid #3d6ba6;
		}
		</style>
<head>
<title>PATIENT DETAILS</title>
</head>
<body>
	<h1>UPDATED PATIENT DETAILS</h1>
	</br>
<?php
if($_SESSION["patientId"]) {  ?>
<?php
	include 'connection.php';
	$patientId = $_GET['patientId'];
	$update="UPDATE appointment SET apptDate='$_POST[apptDate]'where patientId=$patientId";
	if(!mysqli_query($connection, $update)){ 
		die('Error: '.mysqli_error($connection)); 
	}
	$result = mysqli_query($connection, "select * from appointment 
	where patientId=$patientId");
	$row = mysqli_fetch_row($result);?>

	<table class="center">
	<tr><td><b>APPOINTMENT ID :</b></td><td><?=$row[0];?></td></tr>
	<tr><td><b>APPOINTMENT DATE:</b></td><td> <?=$row[1];?></td></tr>
	<tr><td><b>VACCINE ID :</b></td><td> <?=$row[2];?></td></tr>

<?php
	mysqli_free_result($result);
	mysqli_close($connection);
} else {
	header("Location: login.php");
	}
?>
<div align="center">
<button type="button" class="button" onClick="location.href='displayPatient.php'" name="user">Back</button>
</div>

</body>
</html>