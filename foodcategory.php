<?php
include("header.php");
if(!isset($_SESSION['employeeid']))
{
	echo "<script>window.location='index.php';</script>";
}
if(isset($_POST['submit']))
{
	$foodcategoryimage = rand() . $_FILES['foodcategoryimage']['name'];
	move_uploaded_file($_FILES['foodcategoryimage']['tmp_name'],"imgfoodcategory/".$foodcategoryimage);
	if(isset($_GET['editid']))
	{
		//Update statement starts here
		$sql = "UPDATE foodcategory SET foodcategoryname='$_POST[foodcategoryname]',foodcategorydescription='$_POST[foodcategorydescription]'";
		if($_FILES['foodcategoryimage']['name'] != "")
		{
		$sql = $sql . ",foodcategoryimage='$foodcategoryimage'";
		}
		$sql = $sql  . ",foodcategorystatus='$_POST[foodcategorystatus]'   WHERE foodcategoryid='$_GET[editid]'";
		$qsql = mysqli_query($con,$sql);
		if(mysqli_affected_rows($con) == 1)
		{
			echo "<script>alert('Food Category Details updated Successfully');</script>";
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
		$sql = "INSERT INTO foodcategory (foodcategoryname,foodcategorydescription,foodcategoryimage,foodcategorystatus) VALUES('$_POST[foodcategoryname]','$_POST[foodcategorydescription]','$foodcategoryimage','$_POST[foodcategorystatus]')";
	$qsql = mysqli_query($con,$sql);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('Successfull');</script>";
		
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
	$sqledit = "SELECT * FROM foodcategory WHERE foodcategoryid='$_GET[editid]'";
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
			<h5 class="text-light-black fw-700">Food Category</h5>
		</div>
		
		
		<div class="col-md-12">
			<div class="form-group">
				<label class="text-light-black fw-700">Food Category Name <sup class="fs-16">*</sup>
				<label class="errmsg flash" id="errfoodcategoryname"></label>
				</label>
				<input type="text" name="foodcategoryname" id="foodcategoryname" class="form-control form-control-submit" placeholder="Enter the Category Name" value="<?php echo $rsedit['foodcategoryname']; ?>">
			</div>
		</div>

               
                        <div class="col-md-12">
			<div class="form-group">
				<label class="text-light-black fw-700">Food Category Description <sup class="fs-16">*</sup>
				</label>
				<textarea name="foodcategorydescription" id="foodcategorydescription" class="form-control form-control-submit" placeholder="Enter Category Description"><?php echo $rsedit['foodcategorydescription']; ?></textarea>
			</div>
		</div>
		
		
		<div class="col-md-12">
			<div class="form-group">
				<label class="text-light-black fw-700">Food Category Image<sup class="fs-16">*</sup>
				<label class="errmsg flash" id="errfoodcategoryimage"></label>
				</label>
				<input type="file" name="foodcategoryimage" id="foodcategoryimage" class="form-control form-control-submit" placeholder="Insert Image">
<?php
if(isset($_GET['editid']))
{
		if($rsedit['foodcategoryimage'] == "")
		{
			$img = "assets/img/noimage.png";
		}
		else if(file_exists("imgfoodcategory/".$rsedit['foodcategoryimage']))
		{
			$img = "imgfoodcategory/".$rsedit['foodcategoryimage'];
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
				<label class="text-light-black fw-700"> Food Category Status<sup class="fs-16">*</sup>
				<label class="errmsg flash" id="errfoodcategorystatus"></label>
				</label>
			<select name="foodcategorystatus" id="foodcategorystatus" class="form-control">
				<option value="">Select Status</option>
				<?php
				$arr  = array("Active","Inactive");
				foreach($arr as $val)
				{
					if($val == $rsedit['foodcategorystatus']){ echo "<option value='$val' selected>$val</option>";}else{echo "<option value='$val'>$val</option>";}
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
<?php
if(isset($_GET['editid']))
{
?>
 <script>
function validateform()
{
	var i = 0;
	
	var numericExp = /^[0-9]+$/;
	var alphaExp = /^[a-zA-Z]+$/;
	var alphaSpaceExp = /^[a-zA-Z\s]+$/;
	var alphaSpaceNumericExp = /^[a-zA-Z0-9\s]+$/;
	var alphaNumericExp = /^[0-9a-zA-Z]+$/;
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,6}$/;
	   
	$('.errmsg').html('');
	
	if(!document.getElementById("foodcategoryname").value.match(alphaSpaceNumericExp))
	{
		document.getElementById("errfoodcategoryname").innerHTML = " Entered food category name is not valid..";
		i=1;
	}
	
	
	if(document.getElementById("foodcategoryname").value == "")
	{
		document.getElementById("errfoodcategoryname").innerHTML = "Kindly enter the food category name";
		i=1;
	}
	
if(document.getElementById("foodcategorystatus").value == "")
	{
		document.getElementById("errfoodcategorystatus").innerHTML = "Kindly Select the status";
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
<?php
}
else
{
?>
<script>
function validateform()
{
	var i = 0;
	
	var numericExp = /^[0-9]+$/;
	var alphaExp = /^[a-zA-Z]+$/;
	var alphaSpaceExp = /^[a-zA-Z\s]+$/;
	var alphaSpaceNumericExp = /^[a-zA-Z0-9\s]+$/;
	var alphaNumericExp = /^[0-9a-zA-Z]+$/;
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,6}$/;
	   
	$('.errmsg').html('');
	
	if(!document.getElementById("foodcategoryname").value.match(alphaSpaceNumericExp))
	{
		document.getElementById("errfoodcategoryname").innerHTML = " Entered food category name is not valid..";
		i=1;
	}
	
	
	if(document.getElementById("foodcategoryname").value == "")
	{
		document.getElementById("errfoodcategoryname").innerHTML = "Kindly enter the food category name";
		i=1;
	}
	
	if(document.getElementById("foodcategoryimage").value == "")
	{
		document.getElementById("errfoodcategoryimage").innerHTML = "Kindly upload the food image";
		i=1;
	}
	
if(document.getElementById("foodcategorystatus").value == "")
	{
		document.getElementById("errfoodcategorystatus").innerHTML = "Kindly Select the status";
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
<?php
}
?>