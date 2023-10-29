<?php
include("header.php");
if(isset($_SESSION['homechefid']))
{
	if($rshomechefprofile['address'] == "")
	{
			echo "<script>alert('Kindly update profile detail..');</script>";
			echo "<script>window.location='homechefprofile.php';</script>";
	}
}
if(isset($_POST['submit']))
{
	$itemimage = rand() . $_FILES['itemimage']['name'];
	move_uploaded_file($_FILES['itemimage']['tmp_name'],"imgfooditem/".$itemimage);
	if(isset($_GET['editid']))
	{
		//Update statement starts here
		$sql = "UPDATE item SET homechefid='$_POST[homechefid]',foodcategoryid='$_POST[foodcategoryid]',foodtype='$_POST[foodtype]',itemname='$_POST[itemname]',
		itemcost='$_POST[itemcost]'";
		if($_FILES['itemimage']['name'] != "")
		{
		$sql = $sql . ",itemimage='$itemimage'";
		}
		$sql = $sql . ",itemdescription='$_POST[itemdescription]',itemtype='$_POST[itemtype]',status='$_POST[status]' 
		WHERE itemid='$_GET[editid]'";
		$qsql = mysqli_query($con,$sql);
		if(mysqli_affected_rows($con) == 1)
		{
			echo "<script>alert('Item Details updated Successfully');</script>";
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
		 $sqleitem = "SELECT * FROM item WHERE itemname='$_POST[itemname]' AND homechefid='$_POST[homechefid]'";
		$qsqleitem = mysqli_query($con,$sqleitem);
		if(mysqli_num_rows($qsqleitem) >= 1)
		{
			echo "<script>alert('Item already exists..');</script>";
		}
		else
		{
			$sql = "INSERT INTO item (homechefid,foodcategoryid,foodtype,itemname,itemcost,itemimage,itemdescription,itemtype,status) VALUES('$_POST[homechefid]',
		   '$_POST[foodcategoryid]','$_POST[foodtype]','$_POST[itemname]','$_POST[itemcost]','$itemimage','$_POST[itemdescription]','$_POST[itemtype]','$_POST[status]')";
			$qsql = mysqli_query($con,$sql);
			if(mysqli_affected_rows($con) == 1)
			{
				echo "<script>alert('Item detail inserted successfully');</script>";
				echo "<script>window.location='item.php';</script>";
			}
			else
			{	
			echo mysqli_error($con);
			}
		}
		//Insert statement ends here
	}
}
?>
<?php
//Update Statement - Step 2 - Select statement starts here
if(isset($_GET['editid']))
{
	$sqledit = "SELECT * FROM item WHERE itemid='$_GET[editid]'";
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
			<h5 class="text-light-black fw-700">Item</h5>
		</div>
		
<?php
if(isset($_SESSION['homechefid']))
{
?>
<input type="hidden" name="homechefid" id="homechefid" value="<?php echo $_SESSION['homechefid']; ?>">
<?php
}
else
{
?>
		<div class="col-md-12">
			<div class="form-group">
				<label class="text-light-black fw-700">Home Chef<sup class="fs-16">*</sup>
				<label class="errmsg flash" id="errhomechefid"></label>
				</label>
			<select name="homechefid" id="homechefid" class="form-control">
				<option value="">Select Home Chef</option>
				<?php
				$sqllocation ="SELECT * FROM homechef where status='Active'";
				$qsqllocation=mysqli_query($con,$sqllocation);
				while($rslocation = mysqli_fetch_array($qsqllocation))
				{
					if($rslocation['homechefid']  == $rsedit['homechefid'])
					{
					echo "<option value='$rslocation[homechefid]' selected>$rslocation[homechefname]</option>";
					}
					else
					{
					echo "<option value='$rslocation[homechefid]'>$rslocation[homechefname]</option>";
					}
				}
				?>
			</select>
			</div>
		</div>	
<?php
}
?>
		
		<div class="col-md-12">
			<div class="form-group">
				<label class="text-light-black fw-700">Food Category<sup class="fs-16">*</sup>
				<label class="errmsg flash" id="errfoodcategoryid"></label>
				</label>
			<select name="foodcategoryid" id="foodcategoryid" class="form-control">
				<option value="">Select Food Category</option>
				<?php
				$sqlfoodcategory ="SELECT * FROM foodcategory where foodcategorystatus='Active'";
				$qsqlfoodcategory=mysqli_query($con,$sqlfoodcategory);
				while($rsfoodcategory = mysqli_fetch_array($qsqlfoodcategory))
				{
					if($rsfoodcategory['foodcategoryid']  == $rsedit['foodcategoryid'])
					{
					echo "<option value='$rsfoodcategory[foodcategoryid]' selected>$rsfoodcategory[foodcategoryname]</option>";
					}
					else
					{
					echo "<option value='$rsfoodcategory[foodcategoryid]'>$rsfoodcategory[foodcategoryname]</option>";
					}
				}
				?>
			</select>
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
				$arr  = array("Vegetarian","Non Vegitarian");
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
				<label class="text-light-black fw-700">Item Name <sup class="fs-16">*</sup>
				<label class="errmsg flash" id="erritemname"></label>
				</label>
				<input type="text" name="itemname" id="itemname" class="form-control form-control-submit" placeholder="Enter Item Name" value="<?php echo $rsedit['itemname']; ?>">
			</div>
		</div>
		
		<div class="col-md-12">
			<div class="form-group">
				<label class="text-light-black fw-700">Item Cost<sup class="fs-16">*</sup>
				<label class="errmsg flash" id="erritemcost"></label>
				</label>
				<input type="text" name="itemcost" id="itemcost" class="form-control form-control-submit" placeholder="Enter Item Cost" value="<?php echo $rsedit['itemcost']; ?>">
			</div>
		</div>
		 
		<div class="col-md-12">
			<div class="form-group">
				<label class="text-light-black fw-700">Item Image<sup class="fs-16">*</sup>
				<label class="errmsg flash" id="erritemimage"></label>
				</label>
				<input type="file" name="itemimage" id="itemimage" class="form-control form-control-submit" placeholder="Insert Item Image" >
<?php
if(isset($_GET['editid']))
{
		if($rsedit['itemimage'] == "")
		{
			$img = "assets/img/noimage.png";
		}
		else if(file_exists("imgfooditem/".$rsedit['itemimage']))
		{
			$img = "imgfooditem/".$rsedit['itemimage'];
		}
		else
		{
			$img = "assets/img/noimage.png";
		}
	echo "<img src='$img' style='width: 200px; height: 160px;' >";
}
?>	
			</div>
		</div>
		
		
		
		<div class="col-md-12">
			<div class="form-group">
				<label class="text-light-black fw-700">Item Description
				</label>
				<textarea name="itemdescription" id="itemdescription" class="form-control form-control-submit" placeholder="Enter Item Description"><?php echo $rsedit['itemdescription']; ?></textarea>
			</div>
		</div>
		
<?php
/*		
		<div class="col-md-12">
			<div class="form-group">
				<label class="text-light-black fw-700">Item Type<sup class="fs-16">*</sup>
				</label>
				<select name="itemtype" id="itemtype" class="form-control">
					<option value="">Select Item Type</option>
					<?php
					$arr  = array("Active","Inactive");
					foreach($arr as $val)
					{
						if($val == $rsedit[itemtype]){ echo "<option value='$val' selected>$val</option>";}else{echo "<option value='$val'>$val</option>";}
					}
					?>
				</select>
			</div>
		</div>
*/
?>
				
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
	
	
	var numericExp = /^[0-9.]+$/;
	var alphaExp = /^[a-zA-Z]+$/;
	var alphaSpaceExp = /^[a-zA-Z\s]+$/;
	var alphaNumericExp = /^[0-9a-zA-Z]+$/;
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,6}$/;
	   
	$('.errmsg').html('');
	   
	
	
	if(document.getElementById("homechefid").value == "")
	{
		document.getElementById("errhomechefid").innerHTML = " Kindly select Homechef name";
		i=1;
	}  
	if(document.getElementById("foodcategoryid").value == "")
	{
		document.getElementById("errfoodcategoryid").innerHTML = " Kindly select food category";
		i=1;
	}  
	if(document.getElementById("foodtype").value == "")
	{
		document.getElementById("errfoodtype").innerHTML = " Kindly select food type..";
		i=1;
	}  
	if(!document.getElementById("itemname").value.match(alphaSpaceExp))
	{
		document.getElementById("erritemname").innerHTML = " Entered item name is not valid..";
		i=1;
	}
	if(document.getElementById("itemname").value == "")
	{
		document.getElementById("erritemname").innerHTML = " Kindly enter item name";
		i=1;
	}  
	if(!document.getElementById("itemcost").value.match(numericExp))
	{
		document.getElementById("erritemcost").innerHTML = " Entered item cost is not valid..";
		i=1;
	}
	if(document.getElementById("itemcost").value == "")
	{
		document.getElementById("erritemcost").innerHTML = " Kindly enter item cost";
		i=1;
	} 
	if(document.getElementById("itemimage").value == "")
	{
		document.getElementById("erritemimage").innerHTML = " Kindly upload image";
		i=1;
	} 
	if(document.getElementById("itemimage").value == "")
	{
		document.getElementById("erritemimage").innerHTML = " Kindly upload image";
		i=1;
	} 
	if(document.getElementById("status").value == "")
	{
		document.getElementById("errstatus").innerHTML = " Kindly select the status";
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
	
                           