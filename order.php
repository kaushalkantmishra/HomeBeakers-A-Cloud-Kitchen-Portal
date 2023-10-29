<?php
include("header.php");
if(isset($_GET['delid']))
{
	$sql ="delete from foodorder WHERE orderid='$_GET[delid]'";
	$qsql = mysqli_query($con,$sql);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('Item deleted from Cart...');</script>";
		echo "<script>window.location='order.php';</script>";
	}
	else
	{
		echo mysqli_error($con);
	}
}
if(isset($_POST['submit']))
{
	if(isset($_GET['editid']))
	{
		//Update statement starts here
		$sql = "UPDATE foodorder SET customerid='$_POST[customerid]',paymentid='$_POST[paymentid]',homechefid='$_POST[homechefid]',itemid='$_POST[itemid]',
		qty='$_POST[qty]',cost='$_POST[cost]',description='$_POST[description]',status='$_POST[status]'  WHERE orderid='$_GET[editid]'";
		$qsql = mysqli_query($con,$sql);
		if(mysqli_affected_rows($con) == 1)
		{
			echo "<script>alert('Food Order Details updated Successfully');</script>";
		}
		else
		{	
		echo mysqli_error($con);
		}
		//Update statement ends here
	}
	else
	{
		//Insert statement starts here
		$sql = "INSERT INTO foodorder (customerid,paymentid,homechefid,itemid,qty,cost,description,status) VALUES('$_POST[customerid]','$_POST[paymentid]','$_POST[homechefid]','$_POST[itemid]','$_POST[qty]','$_POST[cost]','$_POST[description]','$_POST[status]')";
		$qsql = mysqli_query($con,$sql);
		if(mysqli_affected_rows($con) == 1)
		{
			echo "<script>alert('Order Details Inserted Successfully');</script>";
			echo "<script>window.location='foodorder.php';</script>";
		}
		else
		{	
		echo mysqli_error($con);
		}
		//Insert statement ends here
	}
}
?>
<?php
//Update Statement - Step 2 - Select statement starts here
if(isset($_GET['editid']))
{
	$sqledit = "SELECT * FROM foodorder WHERE orderid='$_GET[editid]'";
	$qsqledit = mysqli_query($con,$sqledit);
	$rsedit = mysqli_fetch_array($qsqledit);
}
//Update Statement - Step 2 - Select statement ends here
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
<center><h2> ORDER CART</h2></center>
                                            <div class="general-sec">
<table id="datatable" class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Item</th>
			<th>Cost</th>
			<th>Quantity</th>
			<th>Any Note</th>
			<th>Total cost</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	<?php
	$sql ="SELECT foodorder.*,customer.customername,payment.paymenttype,homechef.homechefname,item.itemname from foodorder
	LEFT JOIN customer ON foodorder.customerid=customer.customerid 
	LEFT JOIN payment ON foodorder.paymentid=payment.paymentid
	LEFT JOIN homechef ON foodorder.homechefid=homechef.homechefid
	LEFT JOIN item ON foodorder.itemid=item.itemid WHERE foodorder.status='Pending' AND foodorder.customerid='$_SESSION[customerid]'";
	$qsql= mysqli_query($con,$sql);
	while($rs = mysqli_fetch_array($qsql))
	{
		echo "<tr>
			<td>$rs[itemname]</td>
			<td>₹" . $rs['cost'] . "</td>
			<td><input type='number' min='1' value='" . round($rs['qty']) . "' name='qty' id='qty' class='form-control' style='width: 100px;' onchange='updateqty($rs[0],this.value,$rs[cost])'  onkeyup='updateqty($rs[0],this.value,$rs[cost])' ></td>
			<td><textarea class='form-control' onchange='updatenote($rs[0],this.value)' onkeyup='updatenote($rs[0],this.value)' >$rs[description]</textarea></td>
			<td id='idtotal$rs[0]'>₹";
			echo $rs['qty'] * $rs['cost'];
		echo "</td>
			<td>
			<a href='order.php?delid=$rs[0]' class='btn btn-warning' onclick='return confirmdelete()' >Delete</a>
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
<hr><center><input type="button" class="btn btn-danger" value="Checkout"  onclick="window.location='payment.php'"></center>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
include("footer.php");
?> 
<script>
function validateform()
{
	var i = 0;
	
	if(document.getElementById("customerid").value == "")
	{
		document.getElementById("errcustomerid").innerHTML = " Kindly select Customer id";
		i=1;
	}
    if(document.getElementById("paymentid").value == "")
	{
		document.getElementById("errpaymentid").innerHTML = " Kindly select Payment id";
		i=1;
	}   	
	 if(document.getElementById("homechefid").value == "")
	{
		document.getElementById("errhomechefid").innerHTML = " Kindly select Homechef id";
		i=1;
	}   	
	if(document.getElementById("itemid").value == "")
	{
		document.getElementById("erritemid").innerHTML = " Kindly select Item id";
		i=1;
	}   
	if(document.getElementById("qty").value == "")
	{
		document.getElementById("errqty").innerHTML = " Kindly select Quantity";
		i=1;
	}   
	if(document.getElementById("cost").value == "")
	{
		document.getElementById("errcost").innerHTML = " Kindly select Cost";
		i=1;
	}   
	if(document.getElementById("status").value == "")
	{
		document.getElementById("errstatus").innerHTML = "Kindly select status..";
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
<script>
function updateqty(orderid,quantity,cost)
{ 
	if (window.XMLHttpRequest) 
	{
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	} else {
		// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			tot = quantity * cost;
			document.getElementById("idtotal"+orderid).innerHTML ="₹" +  tot;
		}
	};
	xmlhttp.open("GET","ajaxupdateorder.php?orderid="+orderid+"&quantity="+quantity+"&cost="+cost,true);
	xmlhttp.send();
}
</script>
<script>
function updatenote(ordernoteid,note)
{ 
	if (window.XMLHttpRequest) 
	{
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	} else {
		// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.open("GET","ajaxupdateorder.php?ordernoteid="+ordernoteid+"&note="+note,true);
	xmlhttp.send();
}
</script>              