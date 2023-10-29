<?php
include("header.php");
if(isset($_POST['submit']))
{
		if(isset($_SESSION['customerid']))
	{
		//Update statement starts here
		$sql = "UPDATE customer SET customername='$_POST[customername]',emailid='$_POST[emailid]',contactno='$_POST[contactno]',address='$_POST[address]',locationid='$_POST[locationid]',cityid='$_POST[cityid]' WHERE customerid='$_SESSION[customerid]'";
		$qsql = mysqli_query($con,$sql);
		if(mysqli_affected_rows($con) == 1)
		{
			echo "<script>alert('Customer Details updated Successfully');</script>";
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
   $sql = "INSERT INTO customer (customername,companyname,emailid,password,contactno,address,locationid,cityid,status) VALUES('$_POST[customername]',
    '$_POST[companyname]','$_POST[emailid]','$_POST[password]','$_POST[contactno]','$_POST[address]','$_POST[locationid]','$_POST[cityid]','$_POST[status]')";
	$qsql = mysqli_query($con,$sql);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('Customer record inserted successfully');</script>";
		
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
if(isset($_SESSION['customerid']))
{
	$sqledit = "SELECT * FROM customer WHERE customerid='$_SESSION[customerid]'";
	$qsqledit = mysqli_query($con,$sqledit);
	$rsedit = mysqli_fetch_array($qsqledit);
}
//Update Statement - Step 2 - Select statement ends here
?>
    <section class="register-restaurent-sec section-padding bg-light-theme">
        <div class="container-fluid">
            <div class="row">
			    <div class="col-lg-3">
<?php
include("sidebar.php");
?>				
				</div>
                <div class="col-lg-9">
                    <div class="sidebar-tabs main-box padding-20 mb-md-40">
                        <div id="add-restaurent-tab" class="step-app">
                            <div class="row">
								<div class="col-xl-12 col-lg-12">
                                    <div class="step-content">
                                        <div class="step-tab-panel active" id="steppanel1">
                                            <div class="general-sec">
<form method="post" action="">
	<div class="row">
		<div class="col-12">
			<h5 class="text-light-black fw-700">Customer</h5>
		</div>
		
		
		<div class="col-md-12">
			<div class="form-group">
				<label class="text-light-black fw-700">Customer Name <sup class="fs-16">*</sup>
				</label>
				<input type="text" name="customername" id="customername" class="form-control form-control-submit" placeholder="Enter Customer Name" value="<?php echo $rsedit['customername']; ?>">
			</div>
		</div>
		
		
		<div class="col-md-12">
			<div class="form-group">
				<label class="text-light-black fw-700">Email ID<sup class="fs-16">*</sup>
				</label>
				<input type="text" name="emailid" id="emailid" class="form-control form-control-submit" placeholder="Enter Email ID"
				value="<?php echo $rsedit['emailid']; ?>">
			</div>
		</div>
		
		
		<div class="col-md-12">
			<div class="form-group">
				<label class="text-light-black fw-700">Contact No<sup class="fs-16">*</sup>
				</label>
				<input type="text" name="contactno" id="contactno" class="form-control form-control-submit" placeholder="Enter Contact Number" value="<?php echo $rsedit['contactno']; ?>">
			</div>
		</div>
		
		<div class="col-md-12">
			<div class="form-group">
				<label class="text-light-black fw-700">Address <sup class="fs-16">*</sup>
				</label>
				<textarea name="address" id="address" class="form-control form-control-submit" placeholder="Enter Address"><?php echo $rsedit['address']; ?></textarea>
			</div>
		</div>
		
		<div class="col-md-12">
			<div class="form-group">
			<label class="text-light-black fw-700">Location<sup class="fs-16">*</sup></label>
			<select name="locationid" id="locationid" class="form-control" onchange="loadcity(this.value)">
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
		
		<div class="col-md-12">
			<div class="form-group">
				<label class="text-light-black fw-700">City<sup class="fs-16">*</sup></label>
				<div id="divcity"><?php include("ajaxcity.php"); ?></div>
			</div>
		</div>
				
		
	</div>
	<div class="row">
		<div class="col-12">
			<div class="u-line mb-xl-20"></div>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<input type="submit" name="submit" id="submit" value="submit" class="form-control btn btn-danger">
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
                </div>
            </div>
        </div>
    </section>
<?php
include("footer.php");
?>  
<script>
function loadcity(locationid)
{
    if (locationid == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("divcity").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","ajaxcity.php?locationid="+locationid,true);
        xmlhttp.send();
    }
}
</script>                 