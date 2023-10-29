<?php
include("header.php");
if(isset($_POST['submit']))
{
		//Update statement starts here
		$sql = "UPDATE customer SET password='$_POST[password]'  WHERE customerid='$_SESSION[customerid]' AND password='$_POST[oldpassword]'";
		$qsql = mysqli_query($con,$sql);
		echo mysqli_error($con);
		if(mysqli_affected_rows($con) == 1)
		{
			echo "<script>alert('Customer password updated Successfully');</script>";
		}
		else
		{	
			echo "<script>alert('You have entered invalid old password');</script>";
		}
		//Update statement ends here
}
	
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
<form method="post" action=""  onsubmit="return validateform()">
	<div class="row">
		<div class="col-12">
			<h5 class="text-light-black fw-700">Customer</h5>
		</div>
		
		<div class="col-md-12">
			<div class="form-group">
				<label class="text-light-black fw-700">Old Password<sup class="fs-16">*</sup>
				<label class="errmsg flash" id="erropassword"></label>
				</label>
				</label>
				<input type="password" name="oldpassword" id="oldpassword" class="form-control form-control-submit" placeholder="Enter Old Password">
			</div>
		</div>
		
		<div class="col-md-12">
			<div class="form-group">
				<label class="text-light-black fw-700">New Password<sup class="fs-16">*</sup>
				<label class="errmsg flash" id="errpassword"></label>
				</label>
				</label>
				<input type="password" name="password" id="password" class="form-control form-control-submit" placeholder="Enter New Password">
			</div>
		</div>
		
		<div class="col-md-12">
			<div class="form-group">
				<label class="text-light-black fw-700">Confirm Password<sup class="fs-16">*</sup>
				<label class="errmsg flash" id="errconfirmpassword"></label>
				</label>
				<input type="password" name="confirmpassword" id="confirmpassword" class="form-control form-control-submit" placeholder="Re-Enter Password" >
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
	if(document.getElementById("oldpassword").value == "")
	{
		document.getElementById("erropassword").innerHTML = "Old Password should not be empty...";
		i=1;
	}	
	
	if(document.getElementById("password").value == "")
	{
		document.getElementById("errpassword").innerHTML = "Password should not be empty...";
		i=1;
	}

	if(document.getElementById("confirmpassword").value != document.getElementById("password").value)
	{
		document.getElementById("errconfirmpassword").innerHTML = "Password and Confirm password should not matching..";
		i=1;
	}
	
	if(document.getElementById("confirmpassword").value == "")
	{
		document.getElementById("errconfirmpassword").innerHTML = "Confirm password should not be empty..";
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