<?php
session_start();
$message="";
if(count($_POST)>0) {
	include 'connection.php';
	$result = mysqli_query($connection,"SELECT * FROM adminn 
	WHERE adminId='" . $_POST["adminId"] . "' and 
	pass_word = '". $_POST["password"]."'");
	$row = mysqli_fetch_array($result);
  
	if(is_array($row)) {
		$_SESSION["adminId"] = $row['adminId'];
		$_SESSION["adminName"] = $row['adminName'];
	} else {
		$message = "Invalid Username or Password!";
	}
}
if(isset($_SESSION["adminId"])) {
	header("Location:login2.php");
}
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>AVICENNA VACCINE DEPARTMENT</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords"
		content="Working Signin form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<!-- //Meta tag Keywords -->
	<link href="//fonts.googleapis.com/css2?family=Karla:wght@400;700&display=swap" rel="stylesheet">
	<!--/Style-CSS -->
	<link rel="stylesheet" href="style.css" type="text/css" media="all" />
	<!--//Style-CSS -->
</head>



<body>

	 <!-- form section start -->
	 <section class="w3l-workinghny-form">
        <!-- /form -->
        <div class="workinghny-form-grid">
            <div class="wrapper">
                <div class="logo">
                    <h1><a class="brand-logo" href="index.html"><span>ADMIN</span> LOG IN</a></h1>
                    <!-- if logo is image enable this   
                        <a class="brand-logo" href="#index.html">
                            <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                        </a> -->
                </div>
                <div class="workinghny-block-grid">
                    <div class="workinghny-left-img align-end">
                   
                        <img src=' http://www.heynic.com/wp-content/uploads/2020/04/image06.png' class="img-responsive" alt="img" />
                    </div>
                    <div class="form-right-inf">
						
                        <div class="login-form-content">
                        <h2>Login Form</h2>
                            <form action="" class="signin-form" method="post">
								<div class="one-frm">

									<label>ADMIN ID</label>
									<input type="text" placeholder="Enter your ID" name="adminId" required>
								</div>
								<div class="one-frm">
									<label>PASSWORD</label>
									<input type="password" placeholder="Enter Password" name="password" required>
								</div>
                               

                                </label>
                                <button class="btn btn-style mt-3" type="submit">LOGIN</button>
                               
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //form -->
        <!-- copyright-->
        <div class="copyright text-center">
            <div class="wrapper">
                <p class="copy-footer-29">© 2020 Working Sign In. All rights reserved | Design by <a
                        href="https://w3layouts.com">W</a></p>
            </div>
        </div>
        <!-- //copyright-->
    </section>
    <!-- //form section start -->

</body>

</html>
