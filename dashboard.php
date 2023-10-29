<?php
include("header.php");
if(!isset($_SESSION["employeeid"]))
{
	echo "<script>window.location='stafflogin.php';</script>";
}
?>	
<!-- Explore collection -->
    <section class="ex-collection section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-header-left">
                        <h3 class="text-light-black header-title title">Dashboard</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-8">
				
<?php
if($_SESSION["employeetype"] == "Admin")
{
?>	
				
                    <div class="row">
					
					
					
<div class="col-lg-4 col-md-6 col-sm-6">
	<div class="product-box mb-xl-20">
		<div class="product-img">
<a href="viewcity.php">
	<img src="assets/img/city.png" class="img-fluid full-width" alt="product-img" style="height: 250px;">
</a>
		</div>
		<div class="product-caption">
			<div class="title-box">
				<h6 class="product-title"><a href="viewcity.php" class="text-light-black "> City</a></h6>
				<div class="tags">
<span class="text-custom-white rectangle-tag bg-red"><?php
$sqlcity = "SELECT * FROM city ";
$qsqlcity = mysqli_query($con,$sqlcity);
echo mysqli_num_rows($qsqlcity);
?> records</span>
				</div>
			</div>
		</div>
	</div>
</div>

					
<div class="col-lg-4 col-md-6 col-sm-6">
	<div class="product-box mb-xl-20">
		<div class="product-img">
<a href="viewcustomer.php">
	<img src="assets/img/customer.png" class="img-fluid full-width" alt="product-img" style="height: 250px;">
</a>
		</div>
		<div class="product-caption">
			<div class="title-box">
				<h6 class="product-title"><a href="viewcustomer.php" class="text-light-black "> Customer</a></h6>
				<div class="tags">
<span class="text-custom-white rectangle-tag bg-red"><?php
$sqlcity = "SELECT * FROM customer ";
$qsqlcity = mysqli_query($con,$sqlcity);
echo mysqli_num_rows($qsqlcity);
?> records</span>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6">
	<div class="product-box mb-xl-20">
		<div class="product-img">
<a href="viewemployee.php">
	<img src="assets/img/employee.jpg" class="img-fluid full-width" alt="product-img" style="height: 250px;">
</a>
		</div>
		<div class="product-caption">
			<div class="title-box">
				<h6 class="product-title"><a href="viewemployee.php" class="text-light-black "> Employee</a></h6>
				<div class="tags">
<span class="text-custom-white rectangle-tag bg-red"><?php
$sqlcity = "SELECT * FROM employee ";
$qsqlcity = mysqli_query($con,$sqlcity);
echo mysqli_num_rows($qsqlcity);
?> records</span>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6">
	<div class="product-box mb-xl-20">
		<div class="product-img">
<a href="viewfoodcategory.php">
	<img src="assets/img/fc.png" class="img-fluid full-width" alt="product-img" style="height: 250px;">
</a>
		</div>
		<div class="product-caption">
			<div class="title-box">
				<h6 class="product-title"><a href="viewfoodcategory.php" class="text-light-black "> Food Category</a></h6>
				<div class="tags">
<span class="text-custom-white rectangle-tag bg-red"><?php
$sqlcity = "SELECT * FROM foodcategory ";
$qsqlcity = mysqli_query($con,$sqlcity);
echo mysqli_num_rows($qsqlcity);
?> records</span>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6">
	<div class="product-box mb-xl-20">
		<div class="product-img">
<a href="viewfoodorder.php">
	<img src="assets/img/fo.png" class="img-fluid full-width" alt="product-img" style="height: 250px;">
</a>
		</div>
		<div class="product-caption">
			<div class="title-box">
				<h6 class="product-title"><a href="viewfoodorder.php" class="text-light-black "> Food Order</a></h6>
				<div class="tags">
<span class="text-custom-white rectangle-tag bg-red"><?php
$sqlcity = "SELECT * FROM foodorder ";
$qsqlcity = mysqli_query($con,$sqlcity);
echo mysqli_num_rows($qsqlcity);
?> records</span>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6">
	<div class="product-box mb-xl-20">
		<div class="product-img">
<a href="viewhomechef.php">
	<img src="assets/img/hc.png" class="img-fluid full-width" alt="product-img" style="height: 250px;">
</a>
		</div>
		<div class="product-caption">
			<div class="title-box">
				<h6 class="product-title"><a href="viewhomechef.php" class="text-light-black "> Home Chef</a></h6>
				<div class="tags">
<span class="text-custom-white rectangle-tag bg-red"><?php
$sqlcity = "SELECT * FROM homechef ";
$qsqlcity = mysqli_query($con,$sqlcity);
echo mysqli_num_rows($qsqlcity);
?> records</span>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6">
	<div class="product-box mb-xl-20">
		<div class="product-img">
<a href="viewitem.php">
	<img src="assets/img/i.png" class="img-fluid full-width" alt="product-img" style="height: 250px;">
</a>
		</div>
		<div class="product-caption">
			<div class="title-box">
				<h6 class="product-title"><a href="viewitem.php" class="text-light-black "> Item</a></h6>
				<div class="tags">
<span class="text-custom-white rectangle-tag bg-red"><?php
$sqlcity = "SELECT * FROM item ";
$qsqlcity = mysqli_query($con,$sqlcity);
echo mysqli_num_rows($qsqlcity);
?> records</span>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6">
	<div class="product-box mb-xl-20">
		<div class="product-img">
<a href="viewlocation.php">
	<img src="assets/img/l.png" class="img-fluid full-width" alt="product-img" style="height: 250px;">
</a>
		</div>
		<div class="product-caption">
			<div class="title-box">
				<h6 class="product-title"><a href="viewlocation.php" class="text-light-black ">Location</a></h6>
				<div class="tags">
<span class="text-custom-white rectangle-tag bg-red"><?php
$sqlcity = "SELECT * FROM location ";
$qsqlcity = mysqli_query($con,$sqlcity);
echo mysqli_num_rows($qsqlcity);
?> records</span>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6">
	<div class="product-box mb-xl-20">
		<div class="product-img">
<a href="viewoffer.php">
	<img src="assets/img/o.png" class="img-fluid full-width" alt="product-img" style="height: 250px;">
</a>
		</div>
		<div class="product-caption">
			<div class="title-box">
				<h6 class="product-title"><a href="viewoffer.php" class="text-light-black ">Offer</a></h6>
				<div class="tags">
<span class="text-custom-white rectangle-tag bg-red"><?php
$sqlcity = "SELECT * FROM offer ";
$qsqlcity = mysqli_query($con,$sqlcity);
echo mysqli_num_rows($qsqlcity);
?> records</span>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6">
	<div class="product-box mb-xl-20">
		<div class="product-img">
<a href="viewpayment.php">
	<img src="assets/img/p.png" class="img-fluid full-width" alt="product-img" style="height: 250px;">
</a>
		</div>
		<div class="product-caption">
			<div class="title-box">
				<h6 class="product-title"><a href="viewpayment.php" class="text-light-black ">Payment</a></h6>
				<div class="tags">
<span class="text-custom-white rectangle-tag bg-red"><?php
$sqlcity = "SELECT * FROM payment ";
$qsqlcity = mysqli_query($con,$sqlcity);
echo mysqli_num_rows($qsqlcity);
?> records</span>
				</div>
			</div>
		</div>
	</div>
</div>







						
					</div>
               
<?php
}
?>		   
<?php
if($_SESSION["employeetype"] == "Employee")
{
	$sql= "SELECT payment.*,location.locationname,customer.customername,employee.employeename , employee.loginid FROM payment LEFT JOIN location ON payment.locationid=location.locationid LEFT JOIN customer on customer.customerid=payment.customerid LEFT JOIN employee on employee.employeeid=payment.employeeid WHERE payment.status='Active' ";
	 if(isset($_SESSION['homechefid']))
	 {
		 $sql = $sql . " AND  payment.homechefid='$_SESSION[homechefid]'";
	 }
	 if($_SESSION["employeetype"] == "Employee")
	{
		$sql = $sql . " AND payment.employeeid='$_SESSION[employeeid]'";
	}
	 $sql = $sql . " AND payment.employeeid='$_SESSION[employeeid]'";
	$sql = $sql . "	ORDER BY payment.paymentid DESC";
	//echo $sql;
	$qsql = mysqli_query($con,$sql);
	
?>
<table id="myTable" class="table table-striped table-bordered" style="width:100%">
	<thead>
		<tr>
			<th>Bill No.</th>
			<th>Customer</th>
			<th>Payment Detail</th>
			<th>Order Date Time</th>
			<th>Delivery Date Time</th>
			<th>Order Tracking</th>
			<th>Address</th>
			<th>Paid Amount</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	<?php
	while($rs = mysqli_fetch_array($qsql))
	{
		$foodorderqty =0;
		$orderstatus="";
		$sqlfoodorder= "SELECT foodorder.*,customer.customername,payment.paymenttype,homechef.homechefname,item.itemname,item.itemimage  FROM foodorder LEFT JOIN customer ON foodorder.customerid=customer.customerid LEFT JOIN payment on payment.paymentid=foodorder.paymentid LEFT JOIN homechef on homechef.homechefid=foodorder.homechefid LEFT JOIN item on item.itemid=foodorder.itemid WHERE foodorder.paymentid='$rs[0]' AND foodorder.status='Active'";
		$qsqlfoodorder = mysqli_query($con,$sqlfoodorder);
		$foodordertotitemqty = mysqli_num_rows($qsqlfoodorder);
										
		$sqlpending= "SELECT foodorder.*,customer.customername,payment.paymenttype,homechef.homechefname,item.itemname,item.itemimage  FROM foodorder LEFT JOIN customer ON foodorder.customerid=customer.customerid LEFT JOIN payment on payment.paymentid=foodorder.paymentid LEFT JOIN homechef on homechef.homechefid=foodorder.homechefid LEFT JOIN item on item.itemid=foodorder.itemid WHERE foodorder.paymentid='$rs[0]' AND foodorder.status='Packed' ";
		$qsqlpending = mysqli_query($con,$sqlpending);
		$noitemqty = mysqli_num_rows($qsqlpending);
		if($noitemqty >=1)
		{
			$orderstatus="<b>Packed</b>";
		}	
		
		$sqlpending= "SELECT foodorder.*,customer.customername,payment.paymenttype,homechef.homechefname,item.itemname,item.itemimage  FROM foodorder LEFT JOIN customer ON foodorder.customerid=customer.customerid LEFT JOIN payment on payment.paymentid=foodorder.paymentid LEFT JOIN homechef on homechef.homechefid=foodorder.homechefid LEFT JOIN item on item.itemid=foodorder.itemid WHERE foodorder.paymentid='$rs[0]' AND foodorder.status='Delivery Process' ";
		$qsqlpending = mysqli_query($con,$sqlpending);
		$noitemqty = mysqli_num_rows($qsqlpending);
		if($noitemqty >=1)
		{
			$orderstatus="<b>Delivery Process</b>";
		}	
		
		$sqlpending= "SELECT foodorder.*,customer.customername,payment.paymenttype,homechef.homechefname,item.itemname,item.itemimage  FROM foodorder LEFT JOIN customer ON foodorder.customerid=customer.customerid LEFT JOIN payment on payment.paymentid=foodorder.paymentid LEFT JOIN homechef on homechef.homechefid=foodorder.homechefid LEFT JOIN item on item.itemid=foodorder.itemid WHERE foodorder.paymentid='$rs[0]'  AND foodorder.status='Processing'";
		$qsqlpending = mysqli_query($con,$sqlpending);
		if(mysqli_num_rows($qsqlpending) >=1)
		{
			$orderstatus="<b>Processing</b>";
		}
			
		$sqlDelivered= "SELECT foodorder.*,customer.customername,payment.paymenttype,homechef.homechefname,item.itemname,item.itemimage  FROM foodorder LEFT JOIN customer ON foodorder.customerid=customer.customerid LEFT JOIN payment on payment.paymentid=foodorder.paymentid LEFT JOIN homechef on homechef.homechefid=foodorder.homechefid LEFT JOIN item on item.itemid=foodorder.itemid WHERE foodorder.paymentid='$rs[0]' AND foodorder.status='Delivered' ";
		$qsqlDelivered= mysqli_query($con,$sqlDelivered);
		$noitemqty = mysqli_num_rows($qsqlDelivered);
		if($noitemqty >=1)
		{
			$orderstatus="<b>Delivered</b>";
		}
		if($orderstatus != "<b>Delivered</b>")
		{
		echo "<tr>
			<td>$rs[paymentid]</td>
			<td>$rs[customername]</td>
			<td><b>Payment type - $rs[paymenttype]</b><br>$rs[paymentdetail]</td>
			<td>$rs[orderdatetime]</td>
			<td>$rs[deliverydatetime]</td>
			<td>";
			echo "<b>Order status:</b>" . $orderstatus ;
			if($rs['employeename'] != "")
			{
				$deliveryboy=$rs['employeename'];
				echo "<hr><b>Delivery Boy :</b> "  . $rs['employeename'] . " ($rs[loginid])";
			}
			echo "</td>
			<td>$rs[address]<br>$rs[locationname]<br>$rs[cityid]<br>Phone No.$rs[contactno]</td>
			<td>₹$rs[paidamount]</td>
			<td><a href='paymentreceipt.php?paymentid=$rs[0]' class='btn btn-info' style='width:70px;'>View</a>";
			if($orderstatus=="<b>Delivered</b>")
			{
			}
			else
			{
				if($rs['employeename'] == "")
				{
					if(trim($orderstatus)=="<b>Packed</b>")
					{
						echo "<a href='delivery.php?editid=$rs[0]' class='btn btn-success' >Assign Delivery Boy</a>";
					}
				}			
				if($rs['employeename'] != "")
				{
					if($orderstatus="<b>Delivery Process</b>")
					{
		echo "<br><img src='images/delivery-boy.gif' style='width:150px;height:105px;cursor: pointer;'>";
		echo "<button type='button' class='btn btn-success' onclick='to_open(`$rs[employeename]`)'>Track</button> | <a href='viewpayment.php?editid=$rs[0]&st=Delivered' class='btn btn-success'>Delivered</a>";
					}
					else
					{
						echo "<a href='viewpayment.php?editid=$rs[0]&st=Delivery Process' class='btn btn-success'>Delivery Process</a>";
					}
				}
			}
		echo "</td></tr>";
		}
	}
	?>
	<tbody>
	</table>
<?php
}
?>		   
			   </div>
            </div>
        </div>
    </section>
    <!-- Explore collection -->
<?php
include("footer.php");
?>