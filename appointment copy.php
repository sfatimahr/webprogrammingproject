<html>
<body>
<style>

    img {
    display: block;
    margin-left: auto;
    margin-right: auto;
    }
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
		width: 10%;
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
		width: 20%;
		background-color:#728FCE;
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

    input[type=reset] {
		width: 20%;
		background-color:#728FCE;
		color: black;
		padding: 14px 20px;
		margin: 8px 0;
		border: 2px solid #3d6ba6;
		border-radius: 4px;
		cursor: pointer;
		text-align: center;
		}

		input[type=reset]:hover {
		background-color:#3d6ba6;
		border: 2px solid #3d6ba6;
		}
    body {
    background-color:#bdcee6;
    background-repeat: no-repeat;
    background-attachment: fixed;  
    background-size: cover;
    }
</style>

<?php
session_start();
$message="";
if(count($_POST)>0) {
	include 'connection.php';
echo "<p style=font-family:verdana;> Thank you, <b>".$_POST["patientName"]."</b> for registering with us<br/>"; 
echo "Now lets pick an appointment date.<br></br>";

$sql="insert into patient (patientName, patientAge, patientGender,patientIC, patientContact) values 
    ('$_POST[patientName]','$_POST[patientAge]','$_POST[patientGender]','$_POST[patientIC]','$_POST[patientContact]')";

    if(!mysqli_query($connection, $sql)){
      die('Error: '.mysqli_error($connection));
  }

$result = mysqli_query($connection,"select max(patientId) from patient");
$row = mysqli_fetch_array($result);
$_SESSION["patientId"]= $row[0];
}
?>

<h1 style="font-family:verdana;">APPOINTMENT DETAILS</h1>
<form action="appointmentCheck.php" method="post">
<div class="imgcontainer">
        <img src="https://www.pngkey.com/png/full/246-2461646_medical-appointment-icon.png" alt="Avatar" class="avatar">
        </div>
        <p style="font-family:verdana;"><b>APPOINTMENT DATE:</b></br><input type="date" size="11" maxlength="11" name="apptDate" min="2021-01-01" max="2021-12-31"></p>
        <p style="font-family:verdana;"><b>VACCINE CHOICES:</b></br>
        <select name="vaccineId">
    <option value="PF1">PFIZER</option>
    <option value="AZ1">ASTRAZENECA</option>
    <option value="SI1">SINOVAC</option>
    </select></p>
    <div align="center"> <input type="reset" value="CLEAR">
    <input type="submit" value="SUBMIT">
</form>
</body>
</html>