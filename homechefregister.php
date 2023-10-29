<?php
session_start();
if(isset($_SESSION["homechefid"]))
{
	echo "<script>window.location='customeraccount.php';</script>";
}
include("dbconnection.php");
if(isset($_POST['submit']))
{
	$image = rand() . $_FILES['image']['name'];
	move_uploaded_file($_FILES['image']['tmp_name'],"imghomechef/".$image);
	//Insert statement starts here
	$sql = "INSERT INTO homechef (homechefname,emailid,password,locationid,address,contactno,foodtype,image,description,status) VALUES('$_POST[homechefname]','$_POST[emailid]','$_POST[password]','$_POST[locationid]','$_POST[address]','$_POST[contactno]','$_POST[foodtype]','$image','$_POST[description]','Pending')";
	$qsql = mysqli_query($con,$sql);
	echo mysqli_error($con);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('Home Chef Registration done successfully.. Kindly wait for approval..');</script>";
		echo "<script>window.location='index.php';</script>";
	}
	else
	{	
		echo "<script>alert('This Email ID already registered with us...');</script>";
		echo "<script>window.location='homechefregister.php';</script>";
	}
	//Insert statement ends here
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
  <title>Home Bakers - Register</title>
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
		/*display: none;*/
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
        <div class="col-md-3">
          <div class="main-banner">
            <img src="assets/img/banner/banner-1.jpg" class="img-fluid full-width main-img" alt="banner">
            <div class="overlay-2 main-padding">
              <img src="assets/img/logo-2.jpg" class="img-fluid" alt="logo">
            </div>
            <img src="assets/img/banner/burger.png" class="footer-img" alt="footer-img">
          </div>
        </div>
        <div class="col-md-9">
          <div class="section-2 main-padding">
            <div class="login-sec">
              <div class="login-box">
                <form method="post" action="" enctype="multipart/form-data" onsubmit="return validateform()">
                  <h4 class="text-light-black fw-600">Register as HomeChef..</h4>
                  <div class="row">
<div class="col-md-6">
			<div class="form-group">
			
				<label class="text-light-black fw-700">Home chef Name 
				<label class="errmsg flash" id="errhomechefname"></label>
				</label>
				<input type="text" name="homechefname" id="homechefname" class="form-control form-control-submit" placeholder="Enter Homechef Name"value="<?php echo $rsedit['homechefname']; ?>">
				
			</div>
		</div>
		
		<div class="col-md-6">
			<div class="form-group">
				<label class="text-light-black fw-700">Email ID <sup class="fs-16">*</sup>
				<label class="errmsg flash" id="erremailid"></label>
				</label>
				<input type="text" name="emailid" id="emailid" class="form-control form-control-submit" placeholder="Enter Login ID" value="<?php echo $rsedit['emailid']; ?>">
			</div>
		</div>
		
		
		<div class="col-md-6">
			<div class="form-group">
				<label class="text-light-black fw-700">Password<sup class="fs-16">*</sup>
				<label class="errmsg flash" id="errpassword"></label>
				</label>
				<input type="password" name="password" id="password" class="form-control form-control-submit" placeholder="Enter Password" value="<?php echo $rsedit['password']; ?>">
			</div>
		</div>
		
		<div class="col-md-6">
			<div class="form-group">
				<label class="text-light-black fw-700">Confirm Password<sup class="fs-16">*</sup>
				<label class="errmsg flash" id="errcpassword"></label>
				</label>
				<input type="password" name="cpassword" id="cpassword" class="form-control form-control-submit" placeholder="Confirm Password" value="<?php echo $rsedit['password']; ?>">
			</div>
		</div>


		      
                 <div class="col-md-6">
			<div class="form-group">
				<label class="text-light-black fw-700">Location<sup class="fs-16">*</sup>
				<label class="errmsg flash" id="errlocationid"></label>
				</label>
			<select name="locationid" id="locationid" class="form-control">
				<option value="">Select Location</option>
				<?php
				$sqllocation ="SELECT * FROM location where status='Active'";
				$qsqllocation=mysqli_query($con,$sqllocation);
				while($rslocation = mysqli_fetch_array($qsqllocation))
				{
					if($rslocation['locationid']  == $rsedit['locationid'])
					{
					echo "<option value='$rslocation[locationid]' selected>$rslocation[locationname]</option>";
					}
					else
					{
					echo "<option value='$rslocation[locationid]'>$rslocation[locationname]</option>";
					}
				}
				?>
			</select>
			</div>
		</div>
		
		<div class="col-md-6">
			<div class="form-group">
				<label class="text-light-black fw-700">Contact No<sup class="fs-16">*</sup>
				<label class="errmsg flash" id="errcontactno"></label>
				</label>
				<input type="text" name="contactno" id="contactno" class="form-control form-control-submit" placeholder="Enter Contact Number" value="<?php echo $rsedit['contactno']; ?>">
			</div>
		</div>
		
		<div class="col-md-6">
			<div class="form-group">
				<label class="text-light-black fw-700">Food Type <sup class="fs-16">*</sup>
				<label class="errmsg flash" id="errfoodtype"></label>
				</label>
				<select name="foodtype" id="foodtype" class="form-control">
				<option value="">Select Food Type</option>
				<?php
				$arr  = array("Vegetarian","Non-Vegetarian","Both");
				foreach($arr as $val)
				{
					if($val == $rsedit['foodtype']){ echo "<option value='$val' selected>$val</option>";}else{echo "<option value='$val'>$val</option>";}
				}
				?>
				</select>
			</div>
		</div>
		
		
	<div class="col-md-6">
			<div class="form-group">
				<label class="text-light-black fw-700">Image 
				<label class="errmsg flash" id="errimage"></label>
				</label>
				<input type="file" name="image" id="image" class="form-control form-control-submit">
				
			</div>
		</div>	


		<div class="col-12"><hr>
			<input type="submit" name="submit" id="submit" value="Click here to Register" class="form-control btn btn-danger">
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
	   
	if(!document.getElementById("homechefname").value.match(alphaSpaceExp))
	{
		document.getElementById("errhomechefname").innerHTML = " Entered chef name is not valid..";
		i=1;
	}
	if(document.getElementById("homechefname").value == "")
	{
		document.getElementById("errhomechefname").innerHTML = " Kindly enter Homechef name";
		i=1;
	}
	if(!document.getElementById("emailid").value.match(emailExp))
	{
		document.getElementById("erremailid").innerHTML = " Entered Email ID is not valid";
		i=1;
	}
	if(document.getElementById("emailid").value == "")
	{
		document.getElementById("erremailid").innerHTML = " Enter email id";
		i=1;
	}
	if(document.getElementById("password").value.length < 6)
	{
		document.getElementById("errpassword").innerHTML = "Should contain more than 6 characters";
		i=1;
	}
	
	if(document.getElementById("password").value == "")
	{
		document.getElementById("errpassword").innerHTML = "Password should not be empty";
		i=1;
	}
	if(document.getElementById("cpassword").value != document.getElementById("password").value)
	{
		document.getElementById("errcpassword").innerHTML = "Password  not matching";
		i=1;
	}
	
	if(document.getElementById("cpassword").value == "")
	{
		document.getElementById("errcpassword").innerHTML = "Should not be empty";
		i=1;
	}

	if(document.getElementById("locationid").value == "")
	{
		document.getElementById("errlocationid").innerHTML = "Kindly select Location";
		i=1;
	}
	if(document.getElementById("contactno").value.length != 10)
	{
	document.getElementById("errcontactno").innerHTML = "Contact number should contain 10 digits..";
		i=1;
	}
	if(!document.getElementById("contactno").value.match(numericExp))
	{
		document.getElementById("errcontactno").innerHTML = " Entered contact number is not valid";
		i=1;
	}
	if(document.getElementById("contactno").value == "")
	{
		document.getElementById("errcontactno").innerHTML = " Kindly enter contact no";
		i=1;
	}  
	if(document.getElementById("foodtype").value == "")
	{
		document.getElementById("errfoodtype").innerHTML = " Kindly select food type";
		i=1;
	}  
	if(document.getElementById("image").value == "")
	{
		document.getElementById("errimage").innerHTML = " Kindly select Image";
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