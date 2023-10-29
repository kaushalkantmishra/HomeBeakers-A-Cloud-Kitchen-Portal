<?php
session_start();
error_reporting(0);
include("dbconnection.php");
date_default_timezone_set('Asia/Kolkata');
$pagename=basename($_SERVER['PHP_SELF']);
if(isset($_GET['locationid']))
{
	$_SESSION['locationid'] = $_GET['locationid'];
	echo "<script>window.location='$pagename';</script>";
}
if(isset($_SESSION['customerid']))
{
	$sqlcustomerprofile = "SELECT * FROM customer where customerid='$_SESSION[customerid]'";
	$qsqlcustomerprofile = mysqli_query($con,$sqlcustomerprofile);
	echo mysqli_error($con);
	$rscustomerprofile = mysqli_fetch_array($qsqlcustomerprofile);
}
if(isset($_SESSION['employeeid']))
{
	$sqlemployeeprofile ="SELECT * FROM employee where employeeid='$_SESSION[employeeid]'";
	$qsqlemployeeprofile = mysqli_query($con,$sqlemployeeprofile);
	echo mysqli_error($con);
	$rsemployeeprofile = mysqli_fetch_array($qsqlemployeeprofile);
}
if(isset($_SESSION['homechefid']))
{
	$sqlhomechefprofile ="SELECT * FROM homechef where homechefid='$_SESSION[homechefid]'";
	$qsqlhomechefprofile = mysqli_query($con,$sqlhomechefprofile);
	echo mysqli_error($con);
	$rshomechefprofile = mysqli_fetch_array($qsqlhomechefprofile);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
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
    <link href="assets/css/jquery.dataTables.min.css" rel="stylesheet">
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
    <!-- Navigation -->
    <div class="header">
        <header class="full-width">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 mainNavCol">
                        <!-- logo -->
                        <div class="logo mainNavCol">
                            <a href="index.php">
                                <img src="assets/img/logo.png" class="img-fluid" alt="Logo">
                            </a>
                        </div>
                        <!-- logo -->
                        <div class="main-search mainNavCol">
                            <form class="main-search search-form full-width">
<div class="row">
	<!-- location picker -->
	<div class="col-lg-2 col-md-2">
		<a href="#" class="delivery-add p-relative"> <span class="icon"><i class="fas fa-map-marker-alt"></i></span>
<span data-toggle="modal" data-target="#myLocationModal" ><?php
if($_SESSION['locationid'] == 0)
{
		echo "Select Location";
}
else
{
	if(isset($_SESSION['locationid']))
	{
		$sqllocation= "SELECT * FROM location WHERE locationid='$_SESSION[locationid]'";
		$qsqllocation = mysqli_query($con,$sqllocation);
		$rslocation = mysqli_fetch_array($qsqllocation);
		echo " $rslocation[locationname] ";
	}
	else
	{
		echo "Select Location";
	}
}
?></span>
		</a>
	</div>
	<!-- location picker -->
<?php	
if(!isset($_SESSION['employeeid']))
{
?>
	<!-- Food Menu Starts here -->
		<div class="col-lg-1 col-md-1"></div>
<?php
if(isset($_SESSION['customerid']))
{
?>
	<div class="col-lg-2 col-md-2">

<div class="catring parent-megamenu">
	<a href="#"> <span>Food Menu <i class="fas fa-caret-down"></i></span>
		<i class="fas fa-bars"></i>
	</a>
	
	<div class="megamenu">
		<div class="row">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="row">
							<div class="col-lg-12 col-sm-12">
								<div class="menu-style">
									<div class="menu-title">
										<h6 class="cat-name"><a href="displayallfooditem.php" class="text-light-black">FOOD MENU</a></h6>
									</div>
<ul>
<?php
	$sql ="SELECT * from foodcategory WHERE foodcategorystatus='Active'";
	$qsql= mysqli_query($con,$sql);
	while($rs = mysqli_fetch_array($qsql))
	{
		$sqlitem ="SELECT item.*,foodcategory.foodcategoryname,homechef.homechefname from item LEFT JOIN foodcategory ON item.foodcategoryid=foodcategory.foodcategoryid LEFT JOIN homechef ON item.homechefid=homechef.homechefid LEFT JOIN location ON location.locationid=homechef.locationid where item.status!='' AND item.foodcategoryid='$rs[foodcategoryid]' AND location.locationid='$_SESSION[locationid]' ";
		$qsqlitem= mysqli_query($con,$sqlitem);
		if(mysqli_num_rows($qsqlitem) >=1)
		{
		echo "<li class='active'><a href='displayallfooditem.php?foodcategoryid=$rs[0]' class='text-light-white fw-500'>$rs[foodcategoryname]</a></li>";
		}
	}
?>	
</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			
			</div>
		</div>
	</div>
	
</div>

	</div>
	<!--  Food Menu Ends here -->

	<!--  Home Chef Starts here -->
	<div class="col-lg-2 col-md-2">

<div class="catring parent-megamenu">
	<a href="#"> <span>Home Chef <i class="fas fa-caret-down"></i></span>
		<i class="fas fa-bars"></i>
	</a>
	
	<div class="megamenu">
		<div class="row">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="row">
							<div class="col-lg-12 col-sm-12">
								<div class="menu-style">
<div class="menu-title">
	<h6 class="cat-name">
		<a href="displayhomechef.php" class="text-light-black">HOME CHEF</a>
	</h6>
</div>
<ul>
<?php
	 $sql ="SELECT * from homechef WHERE status='Active' and locationid='$_SESSION[locationid]'";
	$qsql= mysqli_query($con,$sql);
	while($rs = mysqli_fetch_array($qsql))
	{
		echo "<li class='active'><a href='homebakersdetail.php?homechefid=$rs[0]' class='text-light-white fw-500'>$rs[homechefname]</a></li>";
	}
?>	
</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			
			</div>
		</div>
	</div>
	
</div>

	</div>
	<!-- Home Chef Ends here -->

	<!-- search -->
	<div class="col-lg-5 col-md-3">
		<div class="search-box padding-10">
			<input type="text" class="form-control" placeholder="Pizza, Burger, Chinese">
		</div>
	</div>
	<!-- search -->
<?php
}
?>	
<?php
}
?>
</div>
                            </form>
                        </div>
                        <div class="right-side fw-700 mainNavCol">


<?php
if(isset($_SESSION["employeeid"]))
{
	if($_SESSION["employeetype"] == "Admin")
	{
		include("adminmenu.php");
	}
	if($_SESSION["employeetype"] == "Employee")
	{
		include("employeemenu.php");
	}
?>


<!-- mobile search -->
<div class="mobile-search">
	<a href="#" data-toggle="modal" data-target="#search-box"> <i class="fas fa-search"></i>
	</a>
</div>
<!-- mobile search -->
<!-- user account -->
<div class="user-details p-relative">

<?php
if(isset($_SESSION['homechefid']))
{
?>
	<a href="#" class="text-light-white fw-500">
	<img src="assets/img/customer.png" class="rounded-circle" alt="userimg"> <span>Hi, <?php echo $rshomechefprofile['homechename']; ?></span>
	</a>
<?php
}

if(isset($_SESSION['customerid']))
{
?>
	<a href="#" class="text-light-white fw-500">
	<img src="assets/img/customer.png" class="rounded-circle" alt="userimg"> <span>Hi,  <?php echo $rscustomerprofile['customername']; ?></span>
	</a>
<?php
}
?>

</div>
<!-- mobile search -->

<!-- user notification -->
<div class="cart-btn notification-btn">
	<a href="#" class="text-light-green fw-700"> <i class="fas fa-bell"></i>
	Account
	</a>
	<div class="notification-dropdown">
		<div class="product-detail">
			<a href="employeeprofile.php">
				<div class="img-box">
					<img src="assets/img/customer.png" class="rounded" alt="image">
				</div>
				<div class="product-about">
					<p class="text-light-black">Staff Profile</p>
					<p class="text-light-white">Update profile</p>
				</div>
			</a>
		</div>
		<div class="product-detail"><hr>
			<a href="employeepassword.php">
				<div class="img-box">
					<img src="assets/img/customer.png" class="rounded" alt="image">
				</div>
				<div class="product-about">
					<p class="text-light-black">Change Password</p>
					<p class="text-light-white">Update password</p>
				</div>
			</a>
		</div>
		<div class="product-detail"><hr>
			<a href="logout.php">
				<div class="img-box">
					<img src="assets/img/customer.png" class="rounded" alt="image">
				</div>
				<div class="product-about">
					<p class="text-light-black">Logout </p>
					<p class="text-light-white">Exit window &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
				</div>
			</a>
		</div>
	</div>
</div>
<!-- user notification -->

</div>
<?php
}
else if(isset($_SESSION['homechefid']))
{
?>

<!-- user notification -->
<div class="cart-btn notification-btn">
	<a href="#" class="text-light-green fw-700"> <i class="fas fa-coffee"></i>
	Report
	</a>
	<div class="notification-dropdown" style="left: 70%;">
	
		<div class="product-detail">
			<a href="viewfoodorders.php">
				<div class="img-box">
					<img src="assets/img/customer.png" class="rounded" alt="image">
				</div>
				<div class="product-about">
					<p class="text-light-black">View Food orders</p>
					<p class="text-light-white">Food order Report</p>
				</div>
			</a>
		</div>
		
		<div class="product-detail"><hr>
			<a href="viewhomechefpayment.php">
				<div class="img-box">
					<img src="assets/img/customer.png" class="rounded" alt="image">
				</div>
				<div class="product-about">
					<p class="text-light-black">Income Report</p>
					<p class="text-light-white">View Income Report</p>
				</div>
			</a>
		</div>
				
		<div class="product-detail"><hr>
			<a href="viewpayment.php">
				<div class="img-box">
					<img src="assets/img/customer.png" class="rounded" alt="image">
				</div>
				<div class="product-about">
					<p class="text-light-black">View Payments</p>
					<p class="text-light-white">View your Payments here</p>
				</div>
			</a>
		</div>
		
	</div>
</div>
<!-- user notification -->

<!-- user notification -->
<div class="cart-btn notification-btn">
	<a href="#" class="text-light-green fw-700"> <i class="fas fa-coffee"></i>
	Food Item
	</a>
	<div class="notification-dropdown">
	
	
	
		<div class="product-detail">
			<a href="item.php">
				<div class="img-box">
					<img src="assets/img/customer.png" class="rounded" alt="image">
				</div>
				<div class="product-about">
					<p class="text-light-black">Add Food Item</p>
					<p class="text-light-white">Add your dishes here</p>
				</div>
			</a>
		</div>
		
		<div class="product-detail"><hr>
			<a href="viewitem.php">
				<div class="img-box">
					<img src="assets/img/customer.png" class="rounded" alt="image">
				</div>
				<div class="product-about">
					<p class="text-light-black">View Food Items</p>
					<p class="text-light-white">View your dishes here</p>
				</div>
			</a>
		</div>
		
	</div>
</div>
<!-- user notification -->

<!-- user notification -->
<div class="cart-btn notification-btn">
	<a href="#" class="text-light-green fw-700"> <i class="fas fa-bell"></i>
	Account
	</a>
	<div class="notification-dropdown">
		<div class="product-detail">
			<a href="homechefaccount.php">
				<div class="img-box">
					<img src="assets/img/customer.png" class="rounded" alt="image">
				</div>
				<div class="product-about">
					<p class="text-light-black">Home Chef Account</p>
					<p class="text-light-white">View Home Chef Account here</p>
				</div>
			</a>
		</div>
		<div class="product-detail"><hr>
			<a href="homechefprofile.php">
				<div class="img-box">
					<img src="assets/img/customer.png" class="rounded" alt="image">
				</div>
				<div class="product-about">
					<p class="text-light-black">Home Chef Profile</p>
					<p class="text-light-white">Update profile</p>
				</div>
			</a>
		</div>
		<div class="product-detail"><hr>
			<a href="homechefpassword.php">
				<div class="img-box">
					<img src="assets/img/customer.png" class="rounded" alt="image">
				</div>
				<div class="product-about">
					<p class="text-light-black">Change Password</p>
					<p class="text-light-white">Update password</p>
				</div>
			</a>
		</div>
		<div class="product-detail"><hr>
			<a href="logout.php">
				<div class="img-box">
					<img src="assets/img/customer.png" class="rounded" alt="image">
				</div>
				<div class="product-about">
					<p class="text-light-black">Logout </p>
					<p class="text-light-white">Exit window &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
				</div>
			</a>
		</div>
	</div>
</div>
<!-- user notification -->
</div>

<?php
}
else if(isset($_SESSION['customerid']))
{
?>
<!-- mobile search -->
<div class="mobile-search">
	<a href="#" data-toggle="modal" data-target="#search-box"> <i class="fas fa-search"></i>
	</a>
</div>
<!-- mobile search -->

<!-- user notification -->
<div class="cart-btn notification-btn">
	<a href="#" class="text-light-green fw-700"> <i class="fas fa-bell"></i>
	Report
	</a>
	<div class="notification-dropdown">
	
		<div class="product-detail"><hr>
			<a href="customeraccount.php">
				<div class="img-box">
					<img src="assets/img/customer.png" class="rounded" alt="image">
				</div>
				<div class="product-about">
					<p class="text-light-black">Customer Account</p>
					<p class="text-light-white">Main Account</p>
				</div>
			</a>
		</div>
		<div class="product-detail">
			<a href="viewfoodorderpayment.php">
				<div class="img-box">
					<img src="assets/img/customer.png" class="rounded" alt="image">
				</div>
				<div class="product-about">
					<p class="text-light-black">Order Report</p>
					<p class="text-light-white">View Orders...</p>
				</div>
			</a>
		</div>

	</div>
</div>
<!-- user notification -->
<!-- user notification -->
<div class="cart-btn notification-btn">
	<a href="#" class="text-light-green fw-700"> <i class="fas fa-bell"></i>
	Account
	</a>
	<div class="notification-dropdown">
		<div class="product-detail">
			<a href="customerprofile.php">
				<div class="img-box">
					<img src="assets/img/customer.png" class="rounded" alt="image">
				</div>
				<div class="product-about">
					<p class="text-light-black">Customer Profile</p>
					<p class="text-light-white">Update profile</p>
				</div>
			</a>
		</div>
		<div class="product-detail"><hr>
			<a href="customerpassword.php">
				<div class="img-box">
					<img src="assets/img/customer.png" class="rounded" alt="image">
				</div>
				<div class="product-about">
					<p class="text-light-black">Change Password</p>
					<p class="text-light-white">Update password</p>
				</div>
			</a>
		</div>
		<div class="product-detail"><hr>
			<a href="logout.php">
				<div class="img-box">
					<img src="assets/img/customer.png" class="rounded" alt="image">
				</div>
				<div class="product-about">
					<p class="text-light-black">Logout </p>
					<p class="text-light-white">Exit window &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
				</div>
			</a>
		</div>
	</div>
</div>
<!-- user notification -->

</div>

<?php
	
}
else
{
?>
<!-- Chef Login Register Starts here -->
<div class="cart-btn notification-btn">
	<a href="#" class="text-light-green fw-700"> <i class="fas fa-bell"></i>
	Chef
	</a>
	<div class="notification-dropdown">
		<div class="product-detail">
			<a href="homecheflogin.php">
				<div class="img-box">
					<img src="assets/img/chef.jpg" style='width: 75px;height: 75px;' class="rounded" alt="image">
				</div>
				<div class="product-about">
					<p class="text-light-black">Chef Login</p>
					<p class="text-light-white">Chef Login Panel</p>
				</div>
			</a>
		</div>
		<div class="product-detail">
			<a href="homechefregister.php">
				<div class="img-box">
					<img src="assets/img/chef.jpg" style='width: 75px;height: 75px;' class="rounded" alt="image">
				</div>
				<div class="product-about">
					<p class="text-light-black">Chef Register</p>
					<p class="text-light-white">Register as Chef</p>
				</div>
			</a>
		</div>
	</div>
</div>
<!-- Chef Login Register Ends here -->
<!-- Customer Login Registration Menu starts here -->
<div class="cart-btn notification-btn">
	<a href="#" class="text-light-green fw-700"> <i class="fas fa-bell"></i>
	Customer
	</a>
	<div class="notification-dropdown">
		<div class="product-detail">
			<a href="customerlogin.php">
				<div class="img-box">
					<img src="assets/img/customer.png" class="rounded" alt="image">
				</div>
				<div class="product-about">
					<p class="text-light-black">Login</p>
					<p class="text-light-white">Login as Customer</p>
				</div>
			</a>
		</div>
		<div class="product-detail">
			<a href="customerregister.php">
				<div class="img-box">
					<img src="assets/img/customer.png" class="rounded" alt="image">
				</div>
				<div class="product-about">
					<p class="text-light-black">Register</p>
					<p class="text-light-white">Register as Customer</p>
				</div>
			</a>
		</div>
	</div>
</div>
<!-- Customer Login Registration Menu Ends here -->
</div>
<?php
}
?>
					</div>
                    <div class="col-sm-12 mobile-search">
                        <div class="mobile-address">
                            <a href="#" class="delivery-add" data-toggle="modal" data-target="#address-box"> <span class="address">Brooklyn, NY</span>
                            </a>
                        </div>
                        <div class="sorting-addressbox"> <span class="full-address text-light-green">Brooklyn, NY 10041</span>
                            <div class="btns">
                                <div class="filter-btn">
                                    <button type="button"><i class="fas fa-sliders-h text-light-green fs-18"></i>
                  </button> <span class="text-light-green">Sort</span>
                                </div>
                                <div class="filter-btn">
                                    <button type="button"><i class="fas fa-filter text-light-green fs-18"></i>
                  </button> <span class="text-light-green">Filter</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <div class="main-sec"></div>
    <!-- Navigation -->
	
<!-- Location Modal starts here -->
<div id="myLocationModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Select Location</h4>
      </div>
      <div class="modal-body">
		<div class='row' >
	<?php
	$sql ="SELECT * from location";
	$qsql= mysqli_query($con,$sql);
	while($rs = mysqli_fetch_array($qsql))
	{
		echo "<div class='col-lg-3' style='padding-left: 10px;padding-right: 10px;'  ><a href='$pagename?locationid=$rs[0]&pagename=$pagename' class='btn btn-danger' style='width: 100%;'>$rs[locationname]</a>   &nbsp; &nbsp; &nbsp; &nbsp;</div>";
	}
	?>
		</div>
      </div>
    </div>

  </div>
</div>
<!-- Location Modal ends here -->