<?php session_start(); ?>
<html>
	<head>
        <title>Thank You - AVISENA Vaccination</title>
        <link rel="icon" href="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fjmr23.com%2Fwp-content%2Fuploads%2F2018%2F04%2Flogo-avisena-700x906.jpg&f=1&nofb=1">
    </head>
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
            background-color: white;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            display: table-cell;
            vertical-align: middle;
            font-size: larger;
        }
        .button{
			border: 2px solid #3d6ba6;
            border-radius:9px;
			padding: 16px 32px;
			text-align: center;
            color: whitesmoke;
			text-decoration: none;
            background-color: #376095; 
			display: inline-block;
			font-size: large;
			margin:0 auto;
			transition-duration: 0.4s;
			cursor: pointer;
			align-items: center;
		}
		.button:hover {
			border-radius:9px;
			background-color: #3d6ba6; 
			color: whitesmoke; 
			font-size:x-large;
			border: 2px solid #3d6ba6;
		}
    </style>
	<body>
        <?php
        include 'connection.php';
        $sql= "insert into Appointment(apptDate,vaccineId) values
        ('$_POST[apptDate]','$_POST[vaccineId]')";

        if(!(strlen($_POST["apptDate"]) >0)){
            $_POST ["apptDate"]=null;
            echo '<h1><b> Please enter your appointment date </b></h1>';
        }

        if($_POST["apptDate"]) {
            echo "<h3>Your appointment had been submitted. Thank you.<br></h3><tt>";
        }

        if(!mysqli_query($connection, $sql)){
            die('Error: '.mysqli_error($connection));
        }
        ?>
        <div align="center">
            <button class="button"  onClick="location.href='index.html'">Home</button>
        </div>
	</body>
</html>

    
