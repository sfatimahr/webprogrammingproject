<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>ADMIN DEPARTMENT </title>
<style>
	 html, body{
            height: 100%;
        }
        html {
            display: table;
            margin: auto;
        }
body{
            background:url('https://i.pinimg.com/originals/1a/ee/5c/1aee5c344846f449350feae457ea350e.jpg') no-repeat;
			background-attachment:fixed;
			background-size:cover;
			background-position:center;
			background-position:0px -50px;
			font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            display: table-cell;
            vertical-align: middle;
        }
.button{
			border: none;
			padding: 16px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin:0 auto;
			transition-duration: 0.4s;
			cursor: pointer;
			align-items: center;
		}
		.button1 {
			border-radius:9px;
			background-color:#6495ED; 
			border:black;
			color: black; 
			font-size:large;
			
		}
		
		.button2 {
			border-radius:9px;
			background-color:#6495ED; 
			color: black; 
			font-size:large;
			
		}

		.button3 {
			border-radius:9px;
			background-color:#6495ED; 
			color: black; 
			font-size:large;
			
		}
		
</style>
</head>
<body>

<?php
if($_SESSION["adminName"]) { ?>	

<button class="button button1" onClick="location.href='details.php'" name="user">MY DETAILS</button>
<button class="button button2" onClick="location.href='userdetails.php'" name="user">VIEW PATIENT DETAILS</button>
<button class="button button3" onClick="location.href='logout.php'" name="user">LOG OUT</button>
	
	<?php
} else {
	header("Location: login.php");
}
?>
</body>
</html>