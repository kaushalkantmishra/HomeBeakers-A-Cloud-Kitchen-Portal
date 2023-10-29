<?php
include("header.php");
if(isset($_GET['orderid']))
{
	//Processing Packed  
	$sql = "UPDATE foodorder set status='$_GET[status]' WHERE orderid='$_GET[orderid]'";
	$qsql = mysqli_query($con,$sql);
	if(mysqli_affected_rows($con) ==1)
	{
		echo "<SCRIPT>alert('Food order status updated successfully...');</SCRIPT>";
		echo "<script>window.location='viewfoodorders.php';</script>";
	}
}
?>

<!-- contact -->
<div class="contact">
	<div class="container">
		<div class=" contact-w3">	

			<div class="col-md-12 ">
	<h2>View Food Orders</h2>
				<div id="container">
					<!--Horizontal Tab-->
					<div id="parentHorizontalTab">
						<div class="resp-tabs-container hor_1">
							<div>

<table id="myTable" class="table table-striped table-bordered" style="width:100%">
	<thead>
		<tr>
			<th>Bill No.</th>
			<th>Customer</th>
			<th>Item</th>
			<th>Cost</th>
			<th>Quantity</th>
			<th>Total Cost</th>
			<th>Customer note</th>
			<th>Delivery Date Time</th>
			<th>Order Status</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php
	 $sql= "SELECT foodorder.*,customer.customername,payment.paymenttype,homechef.homechefname,item.itemname,customer.contactno,item.itemimage FROM foodorder LEFT JOIN customer ON foodorder.customerid=customer.customerid LEFT JOIN payment on payment.paymentid=foodorder.paymentid LEFT JOIN homechef on homechef.homechefid=foodorder.homechefid LEFT JOIN item on item.itemid=foodorder.itemid WHERE (foodorder.status='Active' OR foodorder.status='Processing' OR foodorder.status='Packed' OR foodorder.status='Delivered') ";
	 
	 if(isset($_SESSION['homechefid']))
	 {
		 $sql = $sql . " AND foodorder.homechefid='$_SESSION[homechefid]'";
	 }
$sql = $sql . " ORDER BY orderid DESC";
	$qsql = mysqli_query($con,$sql);
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
		$sqlbilldetail = "SELECT * FROM payment WHERE paymentid='$rs[paymentid]'";
		$qsqlbilldetail = mysqli_query($con,$sqlbilldetail);
		$rsbilldetail = mysqli_fetch_array($qsqlbilldetail);
		echo "<tr>
			<td>$rs[paymentid]</td>
			<td>$rs[customername]<br>Ph. No. $rs[contactno]</td>
			<td>" . ucfirst($rs['itemname']) . "<br>
			<img src='$img' style='width:100px;height:100px;'>
			</td>
			<td>₹$rs[cost]</td>
			<td>$rs[qty]</td>
			<td>₹" . $rs['cost'] * $rs['qty'] . " </td>
			<td>$rs[description]</td>
			<td>" . date("d-M-Y <br> h:i A",strtotime($rsbilldetail['deliverydatetime'])) . "</td>
			<td>";
		if($rs['status'] == "Active")
		{
			echo "<centeR><b>Ordered</b></center>";
			echo "<img src='images/paid.png' style='width: 75px; height: 75px;' >";
		}
		else if($rs['status'] == "Processing")
		{
			echo "<centeR><b>Processing</b></center>";
			echo "<img src='images/procesing.gif' style='width: 75px; height: 75px;' >";
		}
		else if($rs['status'] == "Packed")
		{
			echo "<centeR><b>Packed</b></center>";
			echo "<img src='images/packed.png' style='width: 75px; height: 75px;' >";
		}
		else
		{
			echo $rs['status'];
		}
		echo "</td><td>";
			if($rs['status'] == "Active")
			{
		echo "<a href='viewfoodorders.php?orderid=$rs[0]&status=Processing' class='btn btn-info' style='width: 100%'  onclick='return confdel()'>Process</a>";
			}
			if($rs['status'] == "Processing")
			{
		echo "<a href='viewfoodorders.php?orderid=$rs[0]&status=Packed' class='btn btn-success' style='width: 100%' onclick='return confdel()' >Pack</a>";
		echo "</td></tr>";
			}
	}
	?>
	</tbody>
</table>
							</div>
						</div>
					</div>
				</div>
				
				<!--Plug-in Initialisation-->
				
			</div>
			
		<div class="clearfix"></div>
	</div>
	</div>
</div>
<!-- //contact -->
<?php
include("footer.php");
?>
<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
<script>
function confdel()
{
	if(confirm("Are you sure?") == true)
	{
		return true;
	}
	else
	{
		return false;
	}
}
</script>