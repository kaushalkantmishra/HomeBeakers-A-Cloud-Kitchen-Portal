<?php
include("header.php");
if(!isset($_SESSION['employeeid']))
{
	echo "<script>window.location='index.php';</script>";
}
if(isset($_POST['submit']))
{
	if(isset($_GET['editid']))
	{
		//Update statement starts here
		$sql = "UPDATE city SET locationid='$_POST[locationid]',city='$_POST[city]',description='$_POST[description]',status='$_POST[status]'  WHERE cityid='$_GET[editid]'";
		$qsql = mysqli_query($con,$sql);
		if(mysqli_affected_rows($con) == 1)
		{
			echo "<script>alert('City Details updated Successfully');</script>";
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
		$sql = "INSERT INTO city (locationid,city,description,status) VALUES('$_POST[locationid]','$_POST[city]','$_POST[description]','$_POST[status]')";
		$qsql = mysqli_query($con,$sql);
		if(mysqli_affected_rows($con) == 1)
		{
			echo "<script>alert('City Details Inserted Successfully');</script>";
			echo "<script>window.location='city.php';</script>";
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
	$sqledit = "SELECT * FROM city WHERE cityid='$_GET[editid]'";
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
			<h5 class="text-light-black fw-700">City</h5>
		</div>
		
		<div class="col-md-12">
			<div class="form-group">
				<label class="text-light-black fw-700">Location <sup class="fs-16">*</sup>
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
				<label class="text-light-black fw-700">City <sup class="fs-16">*</sup>
				<label class="errmsg flash" id="errcity"></label>
				</label>
				<input type="text" name="city" id="city" class="form-control form-control-submit" placeholder="Enter City" value="<?php echo $rsedit['city']; ?>">
			</div>
		</div>
		
		<div class="col-md-12">
			<div class="form-group">
				<label class="text-light-black fw-700">Description 
				<label class="errmsg flash" id="errdescription"></label>
				</label>
				<textarea name="description" id="description" class="form-control form-control-submit" placeholder="Enter description"><?php echo $rsedit['description']; ?></textarea>
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
	$('.errmsg').html('');
	
	if(document.getElementById("locationid").value == "")
	{
		document.getElementById("errlocationid").innerHTML = "Kindly select location";
		i=1;
	}
	if(document.getElementById("city").value == "")
	{
		document.getElementById("errcity").innerHTML = "Kindly enter city";
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
	
                           