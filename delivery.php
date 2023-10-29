<?php
include("header.php");
if(isset($_POST['btnAssignDelivery']))
{
	if(isset($_GET['editid']))
	{
		 $sql ="UPDATE payment SET employeeid='$_POST[employeename]' WHERE paymentid='$_GET[editid]'";
		$qsql = mysqli_query($con,$sql);
		echo mysqli_error($con);
		if(mysqli_affected_rows($con) == 1)
		{
			echo "<script>alert('Delivery boy assigned successfully..');</script>";
			echo "<script>window.location='viewpayment.php';</script>";
		}
		else
		{
			echo mysqli_error($con);
		}
	}
}
	$sql= "SELECT payment.*,location.locationname,customer.customername,employee.employeename , employee.loginid FROM payment LEFT JOIN location ON payment.locationid=location.locationid LEFT JOIN customer on customer.customerid=payment.customerid LEFT JOIN employee on employee.employeeid=payment.employeeid WHERE payment.status='Active' AND payment.paymentid='$_GET[editid]'";
	$qsql = mysqli_query($con,$sql);
	$rs = mysqli_fetch_array($qsql)
?>
  <!----><hr>
                <div class="col-lg-12">
                    <div class="sidebar-tabs main-box padding-20 mb-md-40">
                        <div id="add-restaurent-tab" class="step-app">
                            <div class="row">
								<div class="col-xl-12 col-lg-12">
                                    <div class="step-content">
                                        <div class="step-tab-panel active" id="steppanel1">
                                            <div class="general-sec">
											

	<div class="login">
	
		<div class="main-agileits">
				<div class="form-w3agile">
<h3>Assign Delivery Boy</h3>
<form action="" method="post" name="frmform" onsubmit="return validateform()">
Employee name: <label class="errmsg" id="idemployeename"></label>
<select name="employeename" class="form-control">
	<option value="">Select Delivery Boy</option>
	<?php
	$sqlemployee="select * from employee WHERE status='Active' AND locationid='$rs[locationid]'";
	$qsqlemployee =mysqli_query($con,$sqlemployee);
	while($rsemployee =mysqli_fetch_array($qsqlemployee))
	{
		if($rsemployee['employeeid'] == $rsedit['employeeid'])
		{
		echo "<option value='$rsemployee[employeeid]' selected>$rsemployee[employeename]</option>";
		}
		else
		{
		echo "<option value='$rsemployee[employeeid]'>$rsemployee[employeename]</option>";
		}
	}
	?>
</select>
	<br>
	<center><input type="submit" name="btnAssignDelivery" value="Assign Delivery Boy" class="btn btn-info" style="width:200px;"></center>
</form>
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
            </div>
        </div>
    </section>
<?php
include("footer.php");
?>