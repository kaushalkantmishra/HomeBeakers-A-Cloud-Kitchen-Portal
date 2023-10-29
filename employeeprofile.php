<?php
include("header.php");
if(isset($_POST['submit']))
	{
	if(isset($_SESSION['employeeid']))
	{
		//Update statement starts here
		$sql = "UPDATE employee SET employeename='$_POST[employeename]',locationid='$_POST[locationid]',loginid='$_POST[loginid]',employeetype='$_POST[employeetype]'  WHERE employeeid='$_SESSION[employeeid]'";
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
if(isset($_SESSION['employeeid']))
{
	$sqledit = "SELECT * FROM employee WHERE employeeid='$_SESSION[employeeid]'";
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
			<h5 class="text-light-black fw-700">Employee</h5>
		</div>
		

		
		<div class="col-md-12">
			<div class="form-group">
				<label class="text-light-black fw-700">Employee Type<sup class="fs-16">*</sup>
				</label>
			<select name="employeetype" id="employeetype" class="form-control">
				<?php
				$arr  = array("Admin","Employee");
				foreach($arr as $val)
				{
					if($val == $rsedit['employeetype']){ echo "<option value='$val' selected>$val</option>";}
				}
				?>
			</select>
			</div>
		</div>
				
		
		<div class="col-md-12">
			<div class="form-group">
				<label class="text-light-black fw-700">Employee Name <sup class="fs-16">*</sup>
				</label>
				<input type="text" name="employeename" id="employeename" class="form-control form-control-submit" placeholder="Enter Employee Name" value="<?php echo $rsedit['employeename']; ?>">
			</div>
		</div>
		
			<div class="col-md-12">
			<div class="form-group">
				<label class="text-light-black fw-700">Location<sup class="fs-16">*</sup>
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
				</label>
				<input type="text" name="loginid" id="loginid" class="form-control form-control-submit" placeholder="Enter Login ID"
				value="<?php echo $rsedit['loginid']; ?>"
				>
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
                           