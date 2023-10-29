<?php
include("header.php");
if(isset($_POST['submit']))
{
	if(isset($_GET['editid']))
	{
		//Update statement starts here
		$sql = "UPDATE location SET locationname='$_POST[locationname]',description='$_POST[description]',status='$_POST[status]'  WHERE locationid='$_GET[editid]'";
		$qsql = mysqli_query($con,$sql);
		if(mysqli_affected_rows($con) == 1)
		{
			echo "<script>alert('Location Details updated Successfully');</script>";
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
		$sql = "INSERT INTO location (locationname,description,status) VALUES('$_POST[locationname]','$_POST[description]','$_POST[status]')";
	$qsql = mysqli_query($con,$sql);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('Location inserted successfully');</script>";
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
	$sqledit = "SELECT * FROM location WHERE locationid='$_GET[editid]'";
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
			<h5 class="text-light-black fw-700">Location</h5>
		</div>
		
		<div class="col-md-12">
			<div class="form-group">
				<label class="text-light-black fw-700">Location Name <sup class="fs-16">*</sup>
				<label class="errmsg flash" id="errlocationname"></label>
				</label>
				<input type="text" name="locationname" id="locationname" class="form-control form-control-submit" placeholder="Enter Location Name " value="<?php echo $rsedit['locationname']; ?>">
			</div>
		</div>
		
		
		<div class="col-md-12">
			<div class="form-group">
				<label class="text-light-black fw-700">Description
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
	
	var numericExp = /^[0-9]+$/;
	var alphaExp = /^[a-zA-Z]+$/;
	var alphaSpaceExp = /^[a-zA-Z\s]+$/;
	var alphaNumericExp = /^[0-9a-zA-Z]+$/;
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,6}$/;
	   
	$('.errmsg').html('');
	   
	if(!document.getElementById("locationname").value.match(alphaSpaceExp))
	{
		document.getElementById("errlocationname").innerHTML = " Entered location is not valid..";
		i=1;
	}
	
	
	if(document.getElementById("locationname").value == "")
	{
		document.getElementById("errlocationname").innerHTML = " Kindly select Location";
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
                           