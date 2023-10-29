<?php
session_start();
include("dbconnection.php");
if(isset($_SESSION["customerid"]))
{
	echo "<script>window.location='customeraccount.php';</script>";
}
if(isset($_POST['customerloginsubmit']))
{
   $sql = "INSERT INTO customer (customername,emailid,password,contactno,address,locationid,cityid,status) VALUES('$_POST[customername]','$_POST[emailid]','$_POST[password]','$_POST[contactno]','$_POST[address]','$_POST[locationid]','$_POST[cityid]','Active')";
	$qsql = mysqli_query($con,$sql);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('Customer Registration done successfully');</script>";
		echo "<script>window.location='customerlogin.php';</script>";
	}
	else
	{	
		//echo mysqli_error($con);
		$errmsg =  mysqli_error($con);
		if(strpos($errmsg, "contactno") !== false)
		{
			echo "<script>alert('Failed to register - This Contact number $_POST[cstcontactno] already registered...');</script>";
		}
		if(strpos($errmsg, "emailid") !== false)
		{
			echo "<script>alert('Failed to register -  This Email ID $_POST[customerregemailids] already registered...');</script>";
		}
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
  <title>Home Bakers</title>
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
  	<style>
	@import "compass/css3";
	
	/*Be sure to look into browser prefixes for keyframes and annimations*/
	.flash {
	   animation-name: flash;
		animation-duration: 0.2s;
		animation-timing-function: linear;
		animation-iteration-count: infinite;
		animation-direction: alternate;
		animation-play-state: running;
	}

	@keyframes flash {
		from {color: red;}
		to {color: black;}
	}

	.errmsg
	{
		//display: none;
		position: absolute;
		right: 0px;
		padding-right: 25px;
	}
	</style>
</head>

<body>
  <div class="inner-wrapper">
    <div class="container-fluid no-padding">
      <div class="row no-gutters overflow-auto">
        <div class="col-md-6">
          <div class="main-banner">
            <img src="assets/img/banner/banner-1.jpg" class="img-fluid full-width main-img" alt="banner">
            <div class="overlay-2 main-padding">
              <img src="assets/img/logo-2.jpg" class="img-fluid" alt="logo">
            </div>
            <img src="assets/img/banner/burger.png" class="footer-img" alt="footer-img">
          </div>
        </div>
        <div class="col-md-6" >
          <div class="section-2 user-page main-padding" >
            <div class="login-sec" >
              <div class="login-box" >
                <form method="post" action="" onsubmit="return validateform()">
                  <h4 class="text-light-black fw-600">Create a Account</h4>
				  
              <div class="col-md-12">
			<div class="form-group">
				<label class="text-light-black fw-700">Customer Name *
				<label class="errmsg flash" id="errcustomername">
				</label></label>
				<input type="text" name="customername" id="customername" class="form-control form-control-submit" placeholder="Enter Customer Name">
			</div>
		</div>
		
		
		<div class="col-md-12">
			<div class="form-group">
				<label class="text-light-black fw-700">Email ID*
				<label class="errmsg flash" id="erremailid">
				</label></label>
				<input type="text" name="emailid" id="emailid" class="form-control form-control-submit" placeholder="Enter Email ID">
			</div>
		</div>
		
		<div class="col-md-12">
			<div class="form-group">
				<label class="text-light-black fw-700">Password*
				<label class="errmsg flash" id="errpassword">
				</label></label>
				<input type="password" name="password" id="password" class="form-control form-control-submit" placeholder="Enter Password">
			</div>
		</div>
		
		<div class="col-md-12">
			<div class="form-group">
				<label class="text-light-black fw-700">Confirm Password*
				<label class="errmsg flash" id="errcpassword"></label>
				</label>
				<input type="password" name="cpassword" id="cpassword" class="form-control form-control-submit" placeholder="Re-Enter Password">
			</div>
		</div>
		
		<div class="col-md-12">
			<div class="form-group">
				<label class="text-light-black fw-700">Contact No*
				<label class="errmsg flash" id="errcontactno">
				</label></label>
				<input type="text" name="contactno" id="contactno" class="form-control form-control-submit" placeholder="Enter Contact Number">
			</div>
		</div>
	
                  
                      <div class="form-group">
                        <button type="submit" name="customerloginsubmit" id="customerloginsubmit" class="btn-second btn-submit full-width">
                          <img src="assets/img/l.png" alt="btn logo">Click Here to Register</button>
                      </div>
					  
                      <div class="form-group text-center mb-0"> <a href="customerlogin.php">Sign in</a>
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
	   
	if(!document.getElementById("customername").value.match(alphaSpaceExp))
	{
		document.getElementById("errcustomername").innerHTML = " Entered customer name is not valid..";
		i=1;
	}
	if(document.getElementById("customername").value == "")
	{
		document.getElementById("errcustomername").innerHTML = " select Customer name";
		i=1;
	}  
	if(!document.getElementById("emailid").value.match(emailExp))
	{
		document.getElementById("erremailid").innerHTML = " Entered email id is not valid..";
		i=1;
	}
	if(document.getElementById("emailid").value == "")
	{
		document.getElementById("erremailid").innerHTML = " Enter email id";
		i=1;
	}
if(document.getElementById("password").value.length < 6)
	{
		document.getElementById("errpassword").innerHTML = "Password should contain more than 6 characters....";
		i=1;
	}
	
	if(document.getElementById("password").value == "")
	{
		document.getElementById("errpassword").innerHTML = "Password should not be empty...";
		i=1;
	}

	if(document.getElementById("cpassword").value != document.getElementById("password").value)
	{
		document.getElementById("errcpassword").innerHTML = "Password  not matching..";
		i=1;
	}
	
	if(document.getElementById("cpassword").value == "")
	{
		document.getElementById("errcpassword").innerHTML = "Should not be empty";
		i=1;
	}
	if(document.getElementById("contactno").value.length != 10)
		{
		document.getElementById("errcontactno").innerHTML = "Contact number should contain 10 digits..";
		errcondition = "false";
		}
	if(!document.getElementById("contactno").value.match(numericExp))
	{
		document.getElementById("errcontactno").innerHTML = " Entered contactno is not valid..";
		i=1;
	}
	if(document.getElementById("contactno").value == "")
	{
		document.getElementById("errcontactno").innerHTML = " Kindly Enter contact no";
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
