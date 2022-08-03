<?php
session_start();
unset($_SESSION["adminId"]);
unset($_SESSION["adminName"]);
header("Location:login.php");
?>