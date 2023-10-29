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
		$sql = "UPDATE offer SET offertype='$_POST[offertype]',offertitle='$_POST[offertitle]',offercode='$_POST[offercode]',offeramt='$_POST[offeramt]',startdate='$_POST[startdate]',enddate='$_POST[enddate]',status='$_POST[status]'  WHERE offerid='$_GET[editid]'";
		$qsql = mysqli_query($con,$sql);
		if(mysqli_affected_rows($con) == 1)
		{
			echo "<script>alert('Offer Details updated Successfully');</script>";
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
	$sql = "INSERT INTO offer (offertype,offertitle,offercode,offeramt,startdate,enddate,status) VALUES('$_POST[offertype]','$_POST[offertitle]','$_POST[offercode]','$_POST[offeramt]','$_POST[startdate]','$_POST[enddate]','$_POST[status]')";
	$qsql = mysqli_query($con,$sql);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('Offer Applied Successfully');</script>";
		echo "<script>window.location='offer.php';</script>";
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
	$sqledit = "SELECT * FROM offer WHERE offerid='$_GET[editid]'";
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
			<h5 class="text-light-black fw-700">Offer details</h5>
		</div>
		
		
		<div class="col-md-12">
			<div class="form-group">
				<label class="text-light-black fw-700">Offer Type <sup class="fs-16">*</sup>
				<label class="errmsg flash" id="erroffertype"></label>
				</label>
				<select name="offertype" id="offertype" class="form-control form-control-submit" placeholder="Enter Offer Type">
					<option value="">Select Offer type</option>
					<?php
					$arr = array("Flat Discount","Percentage discount");
					foreach($arr as $val)					
					{
						if($val == $rsedit['offertype'])
						{
						echo "<option value='$val' selected>$val</option>";
						}
						else
						{
						echo "<option value='$val'>$val</option>";
						}
					}
					?>
				</select>
			</div>
		</div>
		
		<div class="col-md-12">
			<div class="form-group">
				<label class="text-light-black fw-700">Offer Title<sup class="fs-16">*</sup>
				<label class="errmsg flash" id="erroffertitle"></label>
				</label>
				<input type="text" name="offertitle" id="offertitle" class="form-control form-control-submit" placeholder="Enter Offer Title" value="<?php echo $rsedit['offertitle']; ?>">
			</div>
		</div>
		
		<div class="col-md-12">
			<div class="form-group">
				<label class="text-light-black fw-700">Offer Code<sup class="fs-16">*</sup>
				<label class="errmsg flash" id="erroffercode"></label>
				</label>
				<input type="text" name="offercode" id="offercode" class="form-control form-control-submit" placeholder="Enter Offer Code" value="<?php echo $rsedit['offercode']; ?>">
			</div>
		</div>
		
		<div class="col-md-12">
			<div class="form-group">
				<label class="text-light-black fw-700">Offer Amount<sup class="fs-16">*</sup>
				<label class="errmsg flash" id="errofferamt"></label>
				</label>
				<input type="text" name="offeramt" id="offeramt" class="form-control form-control-submit" placeholder="Enter Offer Amount" value="<?php echo $rsedit['offeramt']; ?>">
			</div>
		</div>



		<div class="col-md-12">
			<div class="form-group">
				<label class="text-light-black fw-700">Offer Start Date<sup class="fs-16">*</sup>
				<label class="errmsg flash" id="errstartdate"></label>
				</label>
				<input type="date" class="form-control" name="startdate" id="startdate" value="<?php echo $rsedit['startdate']; ?>">
			</div>
		</div>

	<br>


		<div class="col-md-12">
			<div class="form-group">
				<label class="text-light-black fw-700">Offer End Date<sup class="fs-16">*</sup>
				<label class="errmsg flash" id="errenddate"></label>
				</label>
				<input type="date" class="form-control" name="enddate" id="enddate" value="<?php echo $rsedit['enddate']; ?>">
			</div>
		</div>

	<br>
			
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
	if(document.getElementById("offertype").value == "")
	{
		document.getElementById("erroffertype").innerHTML = " Kindly select Offer type";
		i=1;
	}   
    if(document.getElementById("offertitle").value == "")
	{
		document.getElementById("erroffertitle").innerHTML = " Kindly select Offer title";
		i=1;
	}  	
	if(document.getElementById("offercode").value == "")
	{
		document.getElementById("erroffercode").innerHTML = " Kindly select Offer code";
		i=1;
	}  
	if(document.getElementById("offeramt").value == "")
	{
		document.getElementById("errofferamt").innerHTML = " Kindly select Offer amount";
		i=1;
	}  
	if(document.getElementById("startdate").value == "")
	{
		document.getElementById("errstartdate").innerHTML = " Kindly enter offer start date";
		i=1;
	} 
	if(document.getElementById("enddate").value == "")
	{
		document.getElementById("errenddate").innerHTML = " Kindly enter offer end date";
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