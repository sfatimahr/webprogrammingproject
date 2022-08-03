<?php session_start()?>
<html>
	<style>
		h1 {text-align: center;}
		p {text-align: center;}
		img {
		display: block;
		margin-left: auto;
		margin-right: auto;
		}
		form {
		border: 3px solid #DCDCDC;
		}

		.imgcontainer {
		text-align: center;
		margin: 24px 0 12px 0;
		}

		img.avatar {
		width: 15%;
		border-radius: 30%;
		}

		input[type=text], select {
		width: 50%;
		padding: 12px 20px;
		margin: 8px 0;
		display: inline-block;
		border: 1px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box;
		text-align: center;
		background-color:#DCDCDC;
		}

		input[type=date], select {
		width: 50%;
		padding: 12px 20px;
		margin: 8px 0;
		display: inline-block;
		border: 1px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box;
		text-align: center;
		}
		
		input[type=submit] {
		width: 50%;
		background-color:#bdcee6;
		color: black;
		padding: 14px 20px;
		margin: 8px 0;
		border: 2px solid #3d6ba6;
		border-radius: 4px;
		cursor: pointer;
		text-align: center;
		}

		input[type=submit]:hover {
		background-color:#3d6ba6;
		border: 2px solid #3d6ba6;
		}
		</style>
<head>
<title>UPDATE DETAILS</title>
</head>
<body>
	<?php
	include 'connection.php';
	$patientId = $_GET['patientId'];
	$result = mysqli_query($connection, "select * from appointment 
	where patientId=$patientId");
	$row = mysqli_fetch_row($result); ?>
	<form action='updateProcess.php?patientId=<?=$row[0];?>' method=post>
	<div class="imgcontainer">
    <img src="https://www.pngkey.com/png/full/246-2461646_medical-appointment-icon.png" alt="Avatar" class="avatar">
  </div>
	<p style="font-family:verdana;"><b>APPOINTMENT ID :</b></br><input type=text name=apptId value='<?=$row[0];?>' readonly></p>
    <p style="font-family:verdana;"><b>APPOINTMENT DATE:</b></br><input type=date name=apptDate value='<?=$row[1];?>'></p>
	 <p style="font-family:verdana;"><b>VACCINE ID:</b></br><input type=text name=vaccineId value='<?=$row[2];?>'readonly></p>
	 <p style="font-family:verdana;"><input type=submit value=UPDATE></form>
	<?php 
	mysqli_free_result($result);
	mysqli_close($connection);
?>
</body>
</html>