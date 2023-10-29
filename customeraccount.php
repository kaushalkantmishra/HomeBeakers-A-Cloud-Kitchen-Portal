<?php
include("header.php");
if(!isset($_SESSION["customerid"]))
{
	echo "<script>window.location='customerlogin.php';</script>";
}
?>
 <!-- your previous order -->
    <section class="recent-order section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-header-left">
                        <h3 class="text-light-black header-title title">Your previous orders...</h3>
                    </div>
                </div>
<?php
$sql = "SELECT payment.*,homechef.homechefname,homechef.image, location.locationname  FROM payment LEFT JOIN homechef ON payment.homechefid=homechef.homechefid LEFT JOIN location ON location.locationid=homechef.locationid WHERE payment.customerid='$_SESSION[customerid]' ORDER BY payment.paymentid LIMIT 4";
$qsql = mysqli_query($con,$sql);
while($rs = mysqli_fetch_array($qsql))
{

		if($rs['image'] == "")
		{
			$img = "assets/img/noimage.png";
		}
		else if(file_exists("imghomechef/".$rs['image']))
		{
			$img = "imghomechef/".$rs['image'];
		}
		else
		{
			$img = "assets/img/noimage.png";
		}
?>
<div class="col-lg-3 col-md-6 col-sm-6">
	<div class="product-box mb-md-20">
		<div class="product-img">
			<a href="paymentreceipt.php?paymentid=<?php echo $rs[0]; ?>">
				<img src="<?php echo $img; ?>" class="img-fluid full-width" alt="product-img" style="height: 250px;">
			</a>
		</div>
		<div class="product-caption">
			<h6 class="product-title"><a href="homebakersdetail.php?homechefid=<?php echo $rs[0]; ?>" class="text-light-black" target="_blank" > <?php echo $rs['homechefname']; ?></a></h6>
			<p class="text-light-white"><?php echo $rs['locationname']; ?></p>
			<div class="product-btn">
				<a href="paymentreceipt.php?paymentid=<?php echo $rs[0]; ?>" target="_blank" class="btn-first white-btn full-width text-light-green fw-600">Track Order</a>
			</div>
		</div>
	</div>
</div>
<?php
}
?>				
            </div>
        </div>
    </section>
    <!-- your previous order -->
<hr>	
<!-- Explore collection -->
    <section class="ex-collection section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-header-left">
                        <h3 class="text-light-black header-title title">Explore our collections</h3>
                    </div>
                </div>
            </div>
            <div class="row">
		<div class="col-md-4 kic-top1">
			<a href="customerprofile.php">
				<img src="images/profile.png" class="img-responsive" style="width: 100%;height: 300px;">
			</a>
			<h6>My Profile</h6>
			<p>Update customer profile..</p>
		</div>
		<div class="col-md-4 kic-top1">
			<a href="customerpassword.php">
				<img src="images/changepassword.png" class="img-responsive" alt="" style="width: 100%;height: 300px;">
			</a>
			<h6>Change Password</h6>
			<p>Reset password here..</p>
		</div>
		<div class="col-md-4 kic-top1">
			<a href="viewfoodorderpayment.php">
				<img src="images/foodorders.png" class="img-responsive" alt="" style="width: 100%;height: 300px;">
			</a>
			<h6>My Orders</h6>
			<p>View order details</p>
		</div>
            </div>

        </div>
    </section>
    <!-- Explore collection -->

<?php
include("footer.php");
?>