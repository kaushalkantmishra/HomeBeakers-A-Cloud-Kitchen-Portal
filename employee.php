<?php
include("header.php");
if(isset($_POST['submit']))
	{
	if(isset($_GET['editid']))
	{
		//Update statement starts here
		$sql = "UPDATE employee SET employeename='$_POST[employeename]',locationid='$_POST[locationid]',loginid='$_POST[loginid]',password='$_POST[password]',employeetype='$_POST[employeetype]',status='$_POST[status]'  WHERE employeeid='$_GET[editid]'";
		$qsql = mysqli_query($con,$sql);
		if(mysqli_affected_rows($con) == 1)
		{
			echo "<script>alert('Employee profile updated Successfully');</script>";
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
		$sql = "INSERT INTO employee (employeename,locationid,loginid,password,employeetype,status) VALUES('$_POST[employeename]','$_POST[locationid]','$_POST[loginid]','$_POST[password]','$_POST[employeetype]','$_POST[status]')";
	$qsql = mysqli_query($con,$sql);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('Employee record inserted successfully');</script>";
	
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
	$sqledit = "SELECT * FROM employee WHERE employeeid='$_GET[editid]'";
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
			<h5 class="text-light-black fw-700">Employee</h5>
		</div>
		
		<div class="col-md-12">
			<div class="form-group">
				<label class="text-light-black fw-700" style="width: 100%;">Employee Type<sup class="fs-16">*</sup>
				<label class="errmsg flash" id="erremployeetype"></label>
				</label>
			<select name="employeetype" id="employeetype" class="form-control">
				<option value="">Select  Employee Type</option>
				<?php
				$arr  = array("Admin","Employee");
				foreach($arr as $val)
				{
					if($val == $rsedit['employeetype']){ echo "<option value='$val' selected>$val</option>";}else{echo "<option value='$val'>$val</option>";}
				}
				?>
			</select>
			</div>
		</div>
		
		<div class="col-md-12">
			<div class="form-group">
				<label class="text-light-black fw-700">Employee Name <sup class="fs-16">*</sup>
				<label class="errmsg flash" id="erremployeename"></label>
				</label>
				<input type="text" name="employeename" id="employeename" class="form-control form-control-submit" placeholder="Enter Employee Name" value="<?php echo $rsedit['employeename']; ?>">
			</div>
		</div>
		
		<div class="col-md-12">
			<div class="form-group">
				<label class="text-light-black fw-700">Location<sup class="fs-16">*</sup>
				<label class="errmsg flash" id="errlocationid"></label>
				</label>
			<select name="locationid" id="locationid" class="form-control">
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
				<label class="text-light-black fw-700">Login ID<sup class="fs-16">*</sup>
				<label class="errmsg flash" id="errloginid"></label>
				</label>
				<input type="text" name="loginid" id="loginid" class="form-control form-control-submit" placeholder="Enter Login ID"
				value="<?php echo $rsedit['loginid']; ?>"
				>
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
				<input type="password" name="cpassword" id="cpassword" class="form-control form-control-submit" placeholder="Confirm Password"
				value="<?php echo $rsedit['password']; ?>">
				
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
function validateform()
{
	var i = 0;
	
	var numericExp = /^[0-9]+$/;
	var alphaExp = /^[a-zA-Z]+$/;
	var alphaSpaceExp = /^[a-zA-Z\s]+$/;
	var alphaNumericExp = /^[0-9a-zA-Z]+$/;
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,6}$/;
	   
	$('.errmsg').html('');
	   
	if(!document.getElementById("employeetype").value.match(alphaSpaceExp))
	{
		document.getElementById("erremployeetype").innerHTML = " Entered employee type is not valid..";
		i=1;
	}
	if(document.getElementById("employeetype").value == "")
	{
		document.getElementById("erremployeetype").innerHTML = "Kindly select Employee Type";
		i=1;
	}
	
	if(!document.getElementById("employeename").value.match(alphaSpaceExp))
	{
		document.getElementById("erremployeename").innerHTML = " Entered employee name is not valid..";
		i=1;
	}
	if(document.getElementById("employeename").value == "")
	{
		document.getElementById("erremployeename").innerHTML = "Employee Name should not be empty..";
		i=1;
	}
	
	if(document.getElementById("locationid").value == "")
	{
		document.getElementById("errlocationid").innerHTML = "Kindly select Location..";
		i=1;
	}
	
	if(document.getElementById("loginid").value == "")
	{
		document.getElementById("errloginid").innerHTML = "Kindly enter login id";
		i=1;
	}
	
	
	if(document.getElementById("password").value.length < 6)
	{
		document.getElementById("errpassword").innerHTML = "Password should contain minimum of 6 characters....";
		i=1;
	}
	
	if(document.getElementById("password").value == "")
	{
		document.getElementById("errpassword").innerHTML = "Password should not be empty";
		i=1;
	}

	if(document.getElementById("cpassword").value != document.getElementById("password").value)
	{
		document.getElementById("errcpassword").innerHTML = "Password and Confirm password should not matching";
		i=1;
	}
	
	if(document.getElementById("cpassword").value == "")
	{
		document.getElementById("errcpassword").innerHTML = "Confirm password should not be empty";
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