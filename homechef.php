<?php
include("header.php");
if(isset($_POST['submit']))
{
	$description = mysqli_real_escape_string($con,$_POST['description']);
	$image = rand() . $_FILES['image']['name'];
	move_uploaded_file($_FILES['image']['tmp_name'],"imghomechef/".$image);
	if(isset($_GET['editid']))
	{
		//Update statement starts here
		$sql = "UPDATE homechef SET homechefname='$_POST[homechefname]',emailid='$_POST[emailid]',password='$_POST[password]',locationid='$_POST[locationid]',
		address='$_POST[address]',contactno='$_POST[contactno]',foodtype='$_POST[foodtype]'";
		if($_FILES['image']['name'] != "")
		{
		$sql = $sql . ",image='$image'";
		}
		$sql = $sql . ",description='$description',
		status='$_POST[status]' WHERE homechefid='$_GET[editid]'";
		$qsql = mysqli_query($con,$sql);
		if(mysqli_affected_rows($con) == 1)
		{
			echo "<script>alert('Home Chef Details updated Successfully');</script>";
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
		$sql = "INSERT INTO homechef (homechefname,emailid,password,locationid,address,contactno,foodtype,image,description,status) 
VALUES('$_POST[homechefname]','$_POST[emailid]','$_POST[password]','$_POST[locationid]','$_POST[address]','$_POST[contactno]','$_POST[foodtype]','$image','$description','$_POST[status]')";
	$qsql = mysqli_query($con,$sql);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('Homechef record added successfully..');</script>";
		echo "<script>window.location='homechef.php';</script>";
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
	$sqledit = "SELECT * FROM homechef WHERE homechefid='$_GET[editid]'";
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
											
<form method="post" action="" enctype="multipart/form-data" onsubmit="return validateform()">
	<div class="row">
		<div class="col-12">
			<h5 class="text-light-black fw-700">Home chef</h5>
		</div>
		
		
		<div class="col-md-12">
			<div class="form-group">
				<label class="text-light-black fw-700">Home chef Name <sup class="fs-16">*</sup>
				<label class="errmsg flash" id="errhomechefname"></label>
				</label>
				<input type="text" name="homechefname" id="homechefname" class="form-control form-control-submit" placeholder="Enter Homechef Name"value="<?php echo $rsedit['homechefname']; ?>">
			</div>
		</div>
		
		<div class="col-md-12">
			<div class="form-group">
				<label class="text-light-black fw-700">Email ID <sup class="fs-16">*</sup>
				<label class="errmsg flash" id="erremailid"></label>
				</label>
				<input type="text" name="emailid" id="emailid" class="form-control form-control-submit" placeholder="Enter Login ID" value="<?php echo $rsedit['emailid']; ?>">
			</div>
		</div>
		
		
		<div class="col-md-12">
			<div class="form-group">
				<label class="text-light-black fw-700">Password<sup class="fs-16">*</sup>
				<label class="errmsg flash" id="errpassword"></label>
				</label>
				<input type="password" name="password" id="password" class="form-control form-control-submit" placeholder="Enter Password" value="<?php echo $rsedit['password']; ?>">
			</div>
		</div>
		
		<div class="col-md-12">
			<div class="form-group">
				<label class="text-light-black fw-700">Confirm Password<sup class="fs-16">*</sup>
				<label class="errmsg flash" id="errcpassword"></label>
				</label>
				<input type="password" name="cpassword" id="cpassword" class="form-control form-control-submit" placeholder="Confirm Password" value="<?php echo $rsedit['password']; ?>">
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
				<label class="text-light-black fw-700">Contact No<sup class="fs-16">*</sup>
				<label class="errmsg flash" id="errcontactno"></label>
				</label>
				<input type="text" name="contactno" id="contactno" class="form-control form-control-submit" placeholder="Enter Contact Number" value="<?php echo $rsedit['contactno']; ?>">
			</div>
		</div>
		
		<div class="col-md-12">
			<div class="form-group">
				<label class="text-light-black fw-700">Food Type <sup class="fs-16">*</sup>
				<label class="errmsg flash" id="errfoodtype"></label>
				</label>
				<select name="foodtype" id="foodtype" class="form-control">
				<option value="">Select Food Type</option>
				<?php
				$arr  = array("Vegetarian","Non-Vegetarian","Both");
				foreach($arr as $val)
				{
					if($val == $rsedit['foodtype']){ echo "<option value='$val' selected>$val</option>";}else{echo "<option value='$val'>$val</option>";}
				}
				?>
				</select>
			</div>
		</div>

	<div class="col-md-12">
			<div class="form-group">
				<label class="text-light-black fw-700">Image <sup class="fs-16">*</sup>
				<label class="errmsg flash" id="errimage"></label>
				</label>
				<input type="file" name="image" id="image" class="form-control form-control-submit">
				
			</div>
		</div>	

            <div class="col-md-12">
			<div class="form-group">
				<label class="text-light-black fw-700">Description <sup class="fs-16">*</sup>
				<label class="errmsg flash" id="errdescription"></label>
				</label>
				<textarea type="text" name="description" id="description" class="form-control form-control-submit" placeholder="Enter Description"><?php echo $rsedit['description']; ?></textarea>
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
	   
	if(!document.getElementById("homechefname").value.match(alphaSpaceExp))
	{
		document.getElementById("errhomechefname").innerHTML = " Entered chef name is not valid..";
		i=1;
	}
	if(document.getElementById("homechefname").value == "")
	{
		document.getElementById("errhomechefname").innerHTML = " Kindly select Homechef name";
		i=1;
	}
	if(!document.getElementById("emailid").value.match(emailExp))
	{
		document.getElementById("erremailid").innerHTML = " Entered Email ID is not valid..";
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
	if(document.getElementById("contactno").value.length != 10)
		{
		document.getElementById("errcontactno").innerHTML = "Contact number should contain 10 digits..";
		errcondition = "false";
		}
	if(!document.getElementById("contactno").value.match(numericExp))
	{
		document.getElementById("errcontactno").innerHTML = " Entered Contact number is not valid..";
		i=1;
	}
	if(document.getElementById("contactno").value == "")
	{
		document.getElementById("errcontactno").innerHTML = " Kindly Enter contact no";
		i=1;
	}  
	if(document.getElementById("foodtype").value == "")
	{
		document.getElementById("errfoodtype").innerHTML = " Kindly select food type";
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