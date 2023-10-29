<?php
include("header.php");
if(!isset($_SESSION["homechefid"]))
{
	echo "<script>window.location='homecheflogin.php';</script>";
}
?>
 <!-- your previous order -->
    <section class="recent-order section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-header-left">
                        <h3 class="text-light-black header-title title">Your previous orders <span class="fs-14"><a href="order-details.php">See all past orders</a></span></h3>
                    </div>
                </div>
				
<?php
	$sql= "SELECT foodorder.*,customer.customername,payment.paymenttype,homechef.homechefname,item.itemname,item.itemimage  FROM foodorder LEFT JOIN customer ON foodorder.customerid=customer.customerid LEFT JOIN payment on payment.paymentid=foodorder.paymentid LEFT JOIN homechef on homechef.homechefid=foodorder.homechefid LEFT JOIN item on item.itemid=foodorder.itemid WHERE homechef.homechefid='$_SESSION[homechefid]' ORDER BY orderid DESC";
	$qsql = mysqli_query($con,$sql);
	$totamt = 0;
	while($rs = mysqli_fetch_array($qsql))
	{
	?>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product-box mb-md-20">
                        <div class="product-img">
                            <a href="#">
                                <img src="<?php echo "imgfooditem/".$rs['itemimage']; ?>" class="img-fluid full-width" alt="product-img" style="height: 150px;">
                            </a>
                        </div>
                        <div class="product-caption">
                            <h6 class="product-title"><a href="restaurant.php" class="text-light-black "> <?php echo $rs['itemname']; ?></a></h6>
                            <p class="text-light-white">Qty: <?php echo $rs['qty'] . " |  ₹".$rs['cost']; ?></p>
                            <div class="product-btn">
                                <a href="paymentreceipt.php?paymentid=<?php echo $rs['paymentid']; ?>" class="btn-first white-btn full-width text-light-green fw-600">Track Order</a>
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
                        <h3 class="text-light-black header-title title">My collections</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="row">
					
	<?php
	$sql ="SELECT item.*,foodcategory.foodcategoryname,homechef.homechefname from item
	LEFT JOIN foodcategory ON item.foodcategoryid=foodcategory.foodcategoryid 
	LEFT JOIN homechef ON item.homechefid=homechef.homechefid where item.status!='' ";
	if(isset($_SESSION['homechefid']))
	{
		$sql = $sql . "  AND item.homechefid='$_SESSION[homechefid]'";
	}
	$qsql= mysqli_query($con,$sql);
	if(mysqli_num_rows($qsql) == 0)
	{
		echo '<div class="col-lg-4 col-md-6 col-sm-6"><center><b style="color:  red;">No items added</b></center></div>';
	}
	while($rs = mysqli_fetch_array($qsql))
	{
		
		if($rs['itemimage'] == "")
		{
			$img = "assets/img/noimage.png";
		}
		else if(file_exists("imgfooditem/".$rs['itemimage']))
		{
			$img = "imgfooditem/".$rs['itemimage'];
		}
		else
		{
			$img = "assets/img/noimage.png";
		}
		?>
<div class="col-lg-4 col-md-6 col-sm-6">
	<div class="product-box mb-xl-20">
		<div class="product-img">
			<a href="restaurant.php">
				<img src="<?php echo $img; ?>" class="img-fluid full-width" alt="product-img">
			</a>
			<div class="overlay">
				<div class="product-tags padding-10"> 
<?php
/*		
<span class="circle-tag">
<img src="assets/img/svg/013-heart-1.svg" alt="tag">
</span>*/
?>

					<div class="custom-tag"> 
					
<?php
/*
<span class="text-custom-white rectangle-tag bg-gradient-red">
  10%
</span>
*/
?>
					</div>
				</div>
			</div>
		</div>
		<div class="product-caption">
			<div class="title-box">
				<h6 class="product-title"><a href="restaurant.php" class="text-light-black "> <?php echo $rs['itemname']; ?></a></h6>

	
<div class="tags"> <span class="text-custom-white rectangle-tag bg-red"><?php echo $rs['foodtype']; ?></span></div>
			
			</div>
			<?php /*<p class="text-light-white"><?php echo $rs['foodtype']; ?></p> */ ?>
			<div class="product-details">
				<div class="price-time"> 
					<?php /* <span class="text-light-black time">30-40 min</span> */ ?>
					<span class="text-light-white price" style="font-size: 22px;">₹<?php echo $rs['itemcost']; ?></span>
				</div>
				<div class="rating"> 
				
	<?php /*
<span>
	<i class="fas fa-star text-yellow"></i>
	<i class="fas fa-star text-yellow"></i>
	<i class="fas fa-star text-yellow"></i>
	<i class="fas fa-star text-yellow"></i>
	<i class="fas fa-star text-yellow"></i>
</span>
<span class="text-light-white text-right">4225 ratings</span>*/ ?>
<?php
/*
<a href="" class="btn btn-info">Click Here to Order</a>
*/
?>
<a href="" onclick="return false;" class="btn btn-info"  data-toggle="modal" data-target="#myModal<?php $rs[0]; ?>" >View More...</a>
				</div>
			</div>
			<div class="product-footer"> 

<?php
/*
<span class="text-custom-white square-tag">
	<img src="assets/img/svg/004-leaf.svg" alt="tag">
</span>
<span class="text-custom-white square-tag">
	<img src="assets/img/svg/006-chili.svg" alt="tag">
</span>
<span class="text-custom-white square-tag">
	<img src="assets/img/svg/005-chef.svg" alt="tag">
</span>
<span class="text-custom-white square-tag">
	<img src="assets/img/svg/008-protein.svg" alt="tag">
</span>
<span class="text-custom-white square-tag">
	<img src="assets/img/svg/009-lemon.svg" alt="tag">
</span>
*/
?>
			</div>
		</div>
	</div>
</div>

<div id="myModal<?php $rs[0]; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><?php echo $rs['itemname']; ?></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <p><?php echo $rs['itemdescription']; ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<?php
	}
?>
				   </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Explore collection -->
    
<?php
include("footer.php");
?>