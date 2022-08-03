<html>
  <body>
    <style>
    h1 {text-align: center;}

    p {text-align: center;}
    
    img {
      display: block;
      margin-left: auto;
      margin-right: auto;
    }

    body {
      background-image: url('https://i.pinimg.com/originals/37/4f/c8/374fc82add40502a1f44f9ef183e8786.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;  
      background-size: cover;
      justify-content: center;
    }
    </style>

  <?php
  include 'connection.php';
  echo "<p style=font-family:verdana;> Thank you, <b>".$_POST["patientName"]."</b> for registering with us<br/>"; 
  echo "Now lets pick an appointment date.<br></br>";

  $sql="insert into patient (patientName, patientAge, patientGender,patientIC, patientContact) values 
      ('$_POST[patientName]','$_POST[patientAge]','$_POST[patientGender]','$_POST[patientIC]','$_POST[patientContact]')";

      if(!mysqli_query($connection, $sql)){
        die('Error: '.mysqli_error($connection));
    }
  ?>

  <img src="https://www.latimes.com/projects/covid-19-vaccine-timeline-first-second-dose-dos-donts/assets/animate-vaccine.deabb298.gif"height="200" width="300">
  <br></br>
  <h1 style="font-family:verdana;">APPOINTMENT DETAILS</h1>
  <form action="appointmentCheck.php" method="post">
          <p style="font-family:verdana;"><b>APPOINTMENT DATE:</b><input type="date" size="11" maxlength="11" name="apptDate" min="2021-01-01" max="2021-12-31"></p>
          <p style="font-family:verdana;"><b>VACCINE CHOICES:</b>
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