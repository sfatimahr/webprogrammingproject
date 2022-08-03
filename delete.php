<?php session_start(); ?>
<html>
<head>
<title>My Web</title>
</head>
<style>
        html, body{
            height: 100%;
        }
        html {
            display: table;
            margin: auto;
        }
        body{
            background-color: #ebebeb;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            display: table-cell;
            vertical-align: middle;
        }

        a:link, a:visited {
        background-color: #bdcee6;
        color: black;
        padding: 15px 25px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        border: 2px solid #3d6ba6;
        }

        a:hover, a:active {
        background-color:#3d6ba6;
        }
</style>
<body>
<?php
if($_SESSION["adminId"]) {  ?>

	<?php
	include 'connection.php';
	$patientId = $_GET['patientId'];
	$delete = "delete from appointment where patientId=$patientId";
    if(!mysqli_query($connection, $delete)){
		die('Error: '.mysqli_error($connection));
	}?>
    <?php
    $delete1="delete from patient where patientId=$patientId";
	if(!mysqli_query($connection, $delete1)){
		die('Error: '.mysqli_error($connection));
	}?>

	<h1> SUCCESSFULLY DELETED</h1>
    <div align="center">
	<a href=displayPatient.php>Back to table</a>
    <a href="logout.php" title="Logout">Logout</a><br><br> 
</div>
	<?php
	mysqli_close($connection);
} else {
header("Location: login.php");
}
?>
</body>
</html>