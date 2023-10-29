<?php
session_start();
if(isset($_SESSION["employeeid"]))
{
	echo "<script>window.location='dashboard.php';</script>";
}
include("dbconnection.php");
if(isset($_POST['staffloginsubmit']))
{
	$sql ="SELECT * FROM employee where loginid='$_POST[staffloginid]' AND password='$_POST[staffpassword]' and status='Active'";
	$qsql = mysqli_query($con,$sql);
	echo mysqli_error($con);
	if(mysqli_num_rows($qsql) == 1)
	{
		$rslogin = mysqli_fetch_array($qsql);
		$_SESSION["employeetype"] = $rslogin['employeetype'];
		$_SESSION["employeeid"] = $rslogin['employeeid'];
		echo "<script>window.location='dashboard.php';</script>";
	}
	else
	{
		echo "<script>alert('You have entered invalid login credentials..');</script>";
		echo "<script>window.location='stafflogin.php';</script>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">


<!-- munchbox/login.html  05 Dec 2019 10:25:12 GMT -->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="keywords" content="#">
  <meta name="description" content="#">
  <title>Home Bakers | Staff Login Panel</title>
  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="#">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="#">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="#">
  <link rel="apple-touch-icon-precomposed" href="#">
  <link rel="shortcut icon" href="#">
  <!-- Bootstrap -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- Fontawesome -->
  <link href="assets/css/font-awesome.css" rel="stylesheet">
  <!-- Flaticons -->
  <link href="assets/css/font/flaticon.css" rel="stylesheet">
  <!-- Swiper Slider -->
  <link href="assets/css/swiper.min.css" rel="stylesheet">
  <!-- Range Slider -->
  <link href="assets/css/ion.rangeSlider.min.css" rel="stylesheet">
  <!-- magnific popup -->
  <link href="assets/css/magnific-popup.css" rel="stylesheet">
  <!-- Nice Select -->
  <link href="assets/css/nice-select.css" rel="stylesheet">
  <!-- Custom Stylesheet -->
  <link href="assets/css/style.css" rel="stylesheet">
  <!-- Custom Responsive -->
  <link href="assets/css/responsive.css" rel="stylesheet">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&amp;display=swap" rel="stylesheet">
  <!-- place -->
</head>

<body>
  <div class="inner-wrapper">
    <div class="container-fluid no-padding">
      <div class="row no-gutters overflow-auto">
        <div class="col-md-6">
          <div class="main-banner">
            <img src="assets/img/banner/banner-1.jpg" class="img-fluid full-width main-img" alt="banner">
            <div class="overlay-2 main-padding">
<a href="index.php"><img src="assets/img/logo-2.jpg" class="img-fluid" alt="logo"></a>
            </div>
            <img src="assets/img/banner/burger.png" class="footer-img" alt="footer-img">
          </div>
        </div>
        <div class="col-md-6">
          <div class="section-2 user-page main-padding">
            <div class="login-sec">
              <div class="login-box">
                  <form method="post" action="" onsubmit="return validateform()">
				<h4 class="text-light-black fw-600">Staff Login</h4>
                  <div class="row">
                    <div class="col-12">
                      <div class="form-group">
                        <label class="text-light-white fs-14">Login ID
						<label class="errmsg flash" id="errstaffloginid"></label>
                        <input type="text" name="staffloginid" id="staffloginid" class="form-control form-control-submit" autocomplete="off" placeholder="Login ID" required>
                      </div>
                      <div class="form-group">
                        <label class="text-light-white fs-14">Password
						<label class="errmsg flash" id="errstaffpassword">
						</label>
                        <input type="password" id="staffpassword" name="staffpassword" class="form-control form-control-submit"  placeholder="Password" required>
                      </div>
					  <br>
                      <div class="form-group">
                        <button type="submit" name="staffloginsubmit" id="staffloginsubmit" class="btn-second btn-submit full-width">Sign in</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Place all Scripts Here -->
  <!-- jQuery -->
  <script src="assets/js/jquery.min.js"></script>
  <!-- Popper -->
  <script src="assets/js/popper.min.js"></script>
  <!-- Bootstrap -->
  <script src="assets/js/bootstrap.min.js"></script>
  <!-- Range Slider -->
  <script src="assets/js/ion.rangeSlider.min.js"></script>
  <!-- Swiper Slider -->
  <script src="assets/js/swiper.min.js"></script>
  <!-- Nice Select -->
  <script src="assets/js/jquery.nice-select.min.js"></script>
  <!-- magnific popup -->
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <!-- Maps -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnd9JwZvXty-1gHZihMoFhJtCXmHfeRQg"></script>
  <!-- sticky sidebar -->
  <script src="assets/js/sticksy.js"></script>
  <!-- Munch Box Js -->
  <script src="assets/js/munchbox.js"></script>
  <!-- /Place all Scripts Here -->
  <script>
function validateform()
{
	var i = 0;
	
	
	var numericExp = /^[0-9]+$/;
	var alphaExp = /^[a-zA-Z]+$/;
	var alphaSpaceExp = /^[a-zA-Z\s]+$/;
	var alphaNumericExp = /^[0-9a-zA-Z]+$/;
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,6}$/;
	   
	$('.errmsg').html('');
	   
	if(!document.getElementById("staffloginid").value.match(alphaSpaceExp))
	{
		document.getElementById("errstaffloginid").innerHTML = " Entered customer name is not valid..";
		i=1;
	}
	if(document.getElementById("staffloginid").value == "")
	{
		document.getElementById("errstaffloginid").innerHTML = " select Customer name";
		i=1;
	} 
if(document.getElementById("password").value.length < 6)
	{
		document.getElementById("errpassword").innerHTML = "Password should contain more than 6 characters....";
		i=1;
	}
	
	if(document.getElementById("staffpassword").value == "")
	{
		document.getElementById("errstaffpassword").innerHTML = "Password should not be empty...";
		i=1;
	}
  </script>
</body>


</html>