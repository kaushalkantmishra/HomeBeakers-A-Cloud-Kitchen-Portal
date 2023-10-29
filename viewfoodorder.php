<?php
include("header.php");
if(isset($_GET['delid']))
{
	$sql ="delete from foodorder WHERE orderid='$_GET[delid]'";
	$qsql = mysqli_query($con,$sql);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('Foodorder record deleted successfully...');</script>";
		echo "<script>window.location='viewfoodorder.php';</script>";
	}
	else
	{
		echo mysqli_error($con);
	}
}
?>
    <section class="register-restaurent-sec section-padding bg-light-theme">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sidebar-tabs main-box padding-20 mb-md-40">
                        <div id="add-restaurent-tab" class="step-app">
                            <div class="row">
								<div class="col-xl-12 col-lg-12">
                                    <div class="step-content">
                                        <div class="step-tab-panel active" id="steppanel1">
                                            <div class="general-sec">
<div class="col-12">
<h5 class="text-light-black fw-700">View Food Order</h5>

<table id="datatable" class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Customer</th>
			<th>Payment</th>
			<th>Home Chef</th>
			<th>Item</th>
			<th>Quantity</th>
			<th>Cost</th>
			<th>Description</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	<?php
	$sql ="SELECT foodorder.*,customer.customername,payment.paymenttype,homechef.homechefname,item.itemname from foodorder
	LEFT JOIN customer ON foodorder.customerid=customer.customerid 
	LEFT JOIN payment ON foodorder.paymentid=payment.paymentid
	LEFT JOIN homechef ON foodorder.homechefid=homechef.homechefid
	LEFT JOIN item ON foodorder.itemid=item.itemid";
	$qsql= mysqli_query($con,$sql);
	while($rs = mysqli_fetch_array($qsql))
	{
		echo "<tr>
			<td>$rs[customerid]</td>
			<td>$rs[paymentid]</td>
			<td>$rs[homechefid]</td>
			<td>$rs[itemid]</td>
			<td>$rs[qty]</td>
			<td>$rs[cost]</td>
			<td>$rs[description]</td>
			<td>$rs[status]</td>
			<td>
            <a href='foodorder.php?editid=$rs[0]' class='btn btn-info'>Edit</a>			
			| 
			<a href='viewfoodorder.php?delid=$rs[0]' class='btn btn-warning' onclick='return confirmdelete()' >Delete</a>
			</td>
		</tr>";
	}
	?>
	</tbody>
</table>
			
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
        </div>
    </section>
<?php
include("footer.php");
?>
<script>
function confirmdelete()
{
	if(confirm("Are you sure you want to delete this record?") == true)
	{
		return true;
	}
	else
	{
		return false;
	}
}
</script>	   
                           