<?php
include("header.php");
$sqlDELfoodorder ="DELETE FROM foodorder where  status='Pending' AND customerid='$_SESSION[customerid]'";
mysqli_query($con,$sqlDELfoodorder);
echo mysqli_error($con);
$sqlhomechef= "SELECT homechef.*,location.locationname FROM homechef LEFT JOIN location ON homechef.locationid=location.locationid WHERE homechefid='$_GET[homechefid]'";
$qsqlhomechef = mysqli_query($con,$sqlhomechef);
$rshomechef = mysqli_fetch_array($qsqlhomechef);
if($rshomechef["image"] == "")
{
	$imgname = "images/no-logo.png";
}
else if(file_exists("imghomechef/".$rshomechef['image']))
{
	$imgname= "imghomechef/".$rshomechef['image'];
}
else
{
	$imgname = "images/no-logo.png";
}
?>
    <section class="final-order section-padding bg-light-theme">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9">
                    <div class="main-box padding-20">
                        <div class="row mb-xl-20">
                            <div class="col-md-6">
                                <div class="section-header-left">
                                    <h3 class="text-light-black header-title fw-700"><?php echo $rshomechef['homechefname']; ?></h3>
                                </div>
                                <h6 class="text-light-black fw-700 fs-14"><?php echo $rshomechef['description']; ?></h6>
                                <hr>
                                <p class="text-light-green fw-600">Food Type: <?php echo $rshomechef['foodtype']; ?></p>
                               <hr>
                                <p class="text-light-black fw-600 mb-1">Address</p>
                                <p class="text-light-white mb-1"><?php echo $rshomechef['address']; ?>
                                    <br><?php echo $rshomechef['locationname']; ?></p>
                                <p class="text-light-white"><b>Ph. No.</b> <?php echo $rshomechef['contactno']; ?></p>
                                <p class="text-light-white"><b>Email ID: </b> <?php echo $rshomechef['emailid']; ?></p>
                            </div>
                            <div class="col-md-6">
                                <div class="advertisement-img">
                                    <img src="<?php echo $imgname; ?>" class="img-fluid full-width" alt="<?php echo $rshomechef['homechefname']; ?>">
                                </div>
                            </div>
                        </div>
<hr>						
                        <div class="row">
                            <div class="col-12">
                                <div class="payment-sec">
                                    <div class="section-header-left">
                                        <h3 class="text-light-black header-title">Food Item List</h3>
                                    </div>
                                    <div class="row">
					
<?php
	$sql ="SELECT item.*,foodcategory.foodcategoryname,homechef.homechefname from item
	LEFT JOIN foodcategory ON item.foodcategoryid=foodcategory.foodcategoryid 
	LEFT JOIN homechef ON item.homechefid=homechef.homechefid where item.status ='Active'  AND item.homechefid='$_GET[homechefid]' ORDER BY  item.itemid ";
	$qsql= mysqli_query($con,$sql);
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
				<img src="<?php echo $img; ?>" style="width: 350px; height: 300px;" class="img-fluid full-width" alt="product-img">
			</a>
			<div class="overlay">
				<div class="product-tags padding-10">
<?php
/*				
<span class="circle-tag"><img src="assets/img/svg/013-heart-1.svg" alt="tag"></span>
<div class="custom-tag"> <span class="text-custom-white rectangle-tag bg-gradient-red">10%</span></div>
*/
?>
				</div>
			</div>
		</div>
		<div class="product-caption">
			<div class="title-box">
				<h6 class="product-title"><a href="#" class="text-light-black "><?php echo $rs['itemname']; ?></a></h6>
				<div class="tags"> 

<?php
if($rs['foodtype'] == "Vegetarian" )
{
?>
<span class="text-custom-white rectangle-tag bg-green rounded"><i class="fa fa-check-circle" aria-hidden="true"></i></span>
<?php
}
?>
<?php
if($rs['foodtype'] == "Non Vegitarian" )
{
?>
<span class="text-custom-white rectangle-tag bg-red rounded"><i class="fa fa-check-circle" aria-hidden="true"></i></span>
<?php
}
?>
				</div>
			</div>
			<div class="product-details">
				<div class="price-time"> <span class="text-light-black time"><b>Prepared by: <?php echo $rs['homechefname']; ?></b></span>
				</div>
				<div class="rating"> 
					<span class="text-light-white text-right">[<?php echo $rs['foodcategoryname']; ?>]</span>
				</div>
			</div><hr>
			<div class="product-footer">
<div class="col-md-4">
<b>₹<?php echo $rs['itemcost']; ?> </b>
</div>
<div class="col-md-8">
<input type="button" name="submit" value="Add to Order List" class="btn btn-danger" onclick="addtoorderlist('<?php echo $rs[0]; ?>')" >
</div>
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
                    </div>
                </div>
                <div class="col-lg-3" style="position: fixed;right: 0;">
                    <div class="sidebar">
                        <div class="cart-detail-box">
                            <div class="card">
<div class="card-header padding-15 fw-700">
	<p class="text-light-white no-margin fw-500">Your orders </p>
</div>


<div class="card-body no-padding" id="scrollstyle-4"></div>
								
								
								
<div class="card-footer p-0 modify-order">

<a href="#" class="total-amount"> <span class="text-custom-white fw-700">TOTAL</span>
	<span class="text-custom-white fw-700" id="divgrandtotal">₹<?php echo 0; ?></span>
</a>
<?php
if(isset($_SESSION['customerid']))
{
?>
<button class="text-custom-white full-width fw-500 bg-light-green" onclick="window.location='order.php'">Modify Your Order</button>
<?php
}
else
{
?>
<button class="text-custom-white full-width fw-500 bg-light-green" onclick="window.location='customerlogin.php'">Login to Order</button>
<?php
}
?>

</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
       <!-- footer -->
	 
	 <?php
include("footer.php");
?>
<script>
function addtoorderlist(itemid)
{
	if (window.XMLHttpRequest) 
	{
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	} else {
		// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.open("GET","ajaxaddorder.php?itemid="+itemid,true);
	xmlhttp.send();
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("scrollstyle-4").innerHTML = this.responseText;
			document.getElementById("divgrandtotal").innerHTML= "₹" + document.getElementById("grandtotala").value;
		}
	};
}
</script>
<script>
function deleteorder(delorderid)
{
	if (window.XMLHttpRequest) 
	{
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	} else {
		// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.open("GET","ajaxaddorder.php?delorderid="+delorderid,true);
	xmlhttp.send();
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("scrollstyle-4").innerHTML = this.responseText;
			document.getElementById("divgrandtotal").innerHTML= "₹" + document.getElementById("grandtotala").value;
		}
	};
}
//addtoorderlist('<?php echo $_GET['homechefid']; ?>');
</script>
<?php
if(isset($_GET['itemid']))
{
	echo "<script>addtoorderlist('$_GET[itemid]');</script>";
}
?>