<?php
session_start();
if(isset($_SESSION["customerid"]))
{
	echo "<script>window.location='customeraccount.php';</script>";
}
include("dbconnection.php");
if(isset($_POST['customerloginsubmit']))
{
	$sql ="SELECT * FROM customer where emailid='$_POST[customeremailid]' AND password='$_POST[customerpassword]' and status='Active'";
	$qsql = mysqli_query($con,$sql);
	echo mysqli_error($con);
	if(mysqli_num_rows($qsql) == 1)
	{
		$rslogin = mysqli_fetch_array($qsql);
		$_SESSION["customerid"] = $rslogin['customerid'];
		if($rslogin['locationid'] != 0 )
		{
		$_SESSION["locationid"] = $rslogin['locationid'];
		}
		echo "<script>window.location='customeraccount.php';</script>";
	}
	else
	{
		echo "<script>alert('You have entered invalid login credentials..');</script>";
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
  <title>Home Bakers | Customer Login Panel</title>
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
                  <h4 class="text-light-black fw-600">Sign in with your HomeBakers account</h4>
                  <div class="row">
                    <div class="col-12">
                      <div class="form-group">
                        <label class="text-light-white fs-14">Email 
						<label class="errmsg flash" id="errcustomeremailid">
						</label>
                        <input type="email" name="customeremailid" id="customeremailid" class="form-control form-control-submit" placeholder="Email I'd" autocomplete="off" required>
                      </div>
                      <div class="form-group">
                        <label class="text-light-white fs-14">Password
						
						<label class="errmsg flash" id="errcustomerpassword"></label>
                        <input type="password" id="customerpassword" name="customerpassword" class="form-control form-control-submit"  placeholder="Password" required>                     
                      </div>
                      <div class="form-group checkbox-reset">
                       
                      </div>
                      <div class="form-group">
                        <button type="submit" name="customerloginsubmit" id="customerloginsubmit" class="btn-second btn-submit full-width">Sign in</button>
                      </div>
                      <div class="form-group text-center mb-0"> <a href="customerregister.php">Create your account</a>
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
	   
	if(!document.getElementById("customeremailid").value.match(alphaSpaceExp))
	{
		document.getElementById("errcustomeremailid").innerHTML = " Entered email id is not valid..";
		i=1;
	}
	
	if(document.getElementById("customeremailid").value == "")
	{
		document.getElementById("errcustomeremailid").innerHTML = " select Customer name";
		i=1;
	}  
	if(document.getElementById("customerpassword").value == "")
	{
		document.getElementById("errpasswordcustomerpassword").innerHTML = "Password should not be empty...";
		i=1;
	}

	if(document.getElementById("customerpassword").value != document.getElementById("password").value)
	{
		document.getElementById("errcustomerpassword").innerHTML = "Password and Confirm password should not matching..";
		i=1;
	}
	if(i == 1)
	{
		return false;
	}
	else
	{
		return true;
	}
}
</script>
</body>
<!-- munchbox/login.html  05 Dec 2019 10:25:15 GMT -->
</html>