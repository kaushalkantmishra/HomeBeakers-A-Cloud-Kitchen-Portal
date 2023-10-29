<?php
include("header.php");
if(isset($_POST['submit']))
{
		if(isset($_GET['editid']))
	{
		//Update statement starts here
		$sql = "UPDATE customer SET customername='$_POST[customername]',emailid='$_POST[emailid]',		password='$_POST[password]',contactno='$_POST[contactno]',address='$_POST[address]',locationid='$_POST[locationid]',
		cityid='$_POST[cityid]',status='$_POST[status]'  WHERE customerid='$_GET[editid]'";
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
   $sql = "INSERT INTO customer (customername,emailid,password,contactno,address,locationid,cityid,status) VALUES('$_POST[customername]',
    '$_POST[emailid]','$_POST[password]','$_POST[contactno]','$_POST[address]','$_POST[locationid]','$_POST[cityid]','$_POST[status]')";
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
if(isset($_GET['editid']))
{
	$sqledit = "SELECT * FROM customer WHERE customerid='$_GET[editid]'";
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
<form method="post" action="" onsubmit="return validateform()">
	<div class="row">
		<div class="col-12">
			<h5 class="text-light-black fw-700">Customer</h5>
		</div>
		
		
		<div class="col-md-12">
			<div class="form-group">
				<label class="text-light-black fw-700">Customer Name <sup class="fs-16">*</sup>
				<label class="errmsg flash" id="errcustomername"></label>
				</label>
				<input type="text" name="customername" id="customername" class="form-control form-control-submit" placeholder="Enter Customer Name" value="<?php echo $rsedit['customername']; ?>">
			</div>
		</div>
		
		
		<div class="col-md-12">
			<div class="form-group">
				<label class="text-light-black fw-700">Email ID<sup class="fs-16">*</sup>
				<label class="errmsg flash" id="erremailid"></label>
				</label>
				<input type="text" name="emailid" id="emailid" class="form-control form-control-submit" placeholder="Enter Email ID"
				value="<?php echo $rsedit['emailid']; ?>">
			</div>
		</div>
		
		<div class="col-md-12">
			<div class="form-group">
				<label class="text-light-black fw-700">Password<sup class="fs-16">*</sup>
				<label class="errmsg flash" id="errpassword"></label>
				</label>
				<input type="password" name="password" id="password" class="form-control form-control-submit" placeholder="Enter Password"
				value="<?php echo $rsedit['password']; ?>">
			</div>
		</div>
		
		<div class="col-md-12">
			<div class="form-group">
				<label class="text-light-black fw-700">Confirm Password<sup class="fs-16">*</sup>
				<label class="errmsg flash" id="errcpassword"></label>
				</label>
				<input type="password" name="cpassword" id="cpassword" class="form-control form-control-submit" placeholder="Re-Enter Password" value="<?php echo $rsedit['password']; ?>">
			</div>
		</div>
		
		<div class="col-md-12">
			<div class="form-group">
				<label class="text-light-black fw-700">Contact No<sup class="fs-16">*</sup>
				<label class="errmsg flash" id="errcontactno"></label>
				</label>
				<input type="text" name="contactno" id="contactno" class="form-control form-control-submit" placeholder="Enter Contact Number" value="<?php echo $rsedit['contactno']; ?>">
			</div>
		</div>
		
		<div class="col-md-12">
			<div class="form-group">
				<label class="text-light-black fw-700">Address <sup class="fs-16">*</sup>
				<label class="errmsg flash" id="erraddress"></label>
				</label>
				<textarea name="address" id="address" class="form-control form-control-submit" placeholder="Enter Address"><?php echo $rsedit['address']; ?></textarea>
			</div>
		</div>
		
		<div class="col-md-12">
			<div class="form-group">
			<label class="text-light-black fw-700">Location<sup class="fs-16">*</sup>
			<label class="errmsg flash" id="errlocationid"></label>
			</label>
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
				<label class="text-light-black fw-700">City<sup class="fs-16">*</sup>
				<label class="errmsg flash" id="errcity"></label>
				</label>
				<div id="divcity"><?php include("ajaxcity.php"); ?></div>
			</div>
		</div>
				
		<div class="col-md-12">
			<div class="form-group">
				<label class="text-light-black fw-700">Status<sup class="fs-16">*</sup>
				<label class="errmsg flash" id="errstatus"></label>
				</label>
			<select name="status" id="status" class="form-control">
				<option value="">Select Status</option>
				<?php
				$arr  = array("Active","Inactive");
				foreach($arr as $val)
				{
					if($val == $rsedit['status']){ echo "<option value='$val' selected>$val</option>";}else{echo "<option value='$val'>$val</option>";}
				}
				?>
			</select>
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
        xmlhttp.open("GET","ajaxcity.php?locationid="+locationid,true);
        xmlhttp.send();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("divcity").innerHTML = this.responseText;
            }
        };
    }
}
</script>
<script>
function validateform()
{
	var i = 0;
	
	
	var numericExp = /^[0-9]+$/;
	var alphaExp = /^[a-zA-Z]+$/;
	var alphaSpaceExp = /^[a-zA-Z\s]+$/;
	var alphaNumericExp = /^[0-9a-zA-Z]+$/;
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,6}$/;
	   
	$('.errmsg').html('');
	   
	if(!document.getElementById("customername").value.match(alphaSpaceExp))
	{
		document.getElementById("errcustomername").innerHTML = " Entered customer name is not valid..";
		i=1;
	}
	
	if(document.getElementById("customername").value == "")
	{
		document.getElementById("errcustomername").innerHTML = " Enter Customer name";
		i=1;
	}  
	if(!document.getElementById("emailid").value.match(emailExp))
	{
		document.getElementById("erremailid").innerHTML = " Entered email id is not valid..";
		i=1;
	}
	if(document.getElementById("emailid").value == "")
	{
		document.getElementById("erremailid").innerHTML = " Enter email id";
		i=1;
	}
if(document.getElementById("password").value.length < 6)
	{
		document.getElementById("errpassword").innerHTML = "Password should contain more than 6 characters....";
		i=1;
	}
	
	if(document.getElementById("password").value == "")
	{
		document.getElementById("errpassword").innerHTML = "Password should not be empty...";
		i=1;
	}

	if(document.getElementById("cpassword").value != document.getElementById("password").value)
	{
		document.getElementById("errcpassword").innerHTML = "Password and Confirm password should not matching..";
		i=1;
	}
	
	if(document.getElementById("cpassword").value == "")
	{
		document.getElementById("errcpassword").innerHTML = "Confirm password should not be empty..";
		i=1;
	}
	if(document.getElementById("contactno").value.length != 10)
		{
		document.getElementById("errcontactno").innerHTML = "Contact number should contain 10 digits..";
		i=1;
		}
	if(!document.getElementById("contactno").value.match(numericExp))
	{
		document.getElementById("errcontactno").innerHTML = " Entered contactno is not valid..";
		i=1;
	}
	if(document.getElementById("contactno").value == "")
	{
		document.getElementById("errcontactno").innerHTML = " Kindly Enter contact no";
		i=1;
	}  
	if(document.getElementById("address").value == "")
	{
		document.getElementById("erraddress").innerHTML = " Kindly Enter Address";
		i=1;
	} 
	if(document.getElementById("locationid").value == "")
	{
		document.getElementById("errlocationid").innerHTML = "Kindly select Location..";
		i=1;
	}
	
	if(document.getElementById("cityid").value == "")
	{
		document.getElementById("errcity").innerHTML = "Kindly select City";
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
	
	
	