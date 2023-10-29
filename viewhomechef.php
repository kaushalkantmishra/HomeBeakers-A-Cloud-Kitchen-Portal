<?php
include("header.php");
if(isset($_GET['editid']))
{
	$sql = "UPDATE homechef SET status='$_GET[st]' WHERE homechefid='$_GET[editid]'";
	$qsql = mysqli_query($con,$sql);
	if(mysqli_affected_rows($qsql) == 1)
	{
		if($_GET['st'] == "Active")
		{
			echo "<script>alert('Chef Account activated successfully...')</script>";
		}
		if($_GET['st'] == "Inactive")
		{
			echo "<script>alert('Chef Account deactivated successfully...')</script>";
		}
	}
}
if(isset($_GET['delid']))
{
	$sql ="delete from homechef WHERE homechefid='$_GET[delid]'";
	$qsql = mysqli_query($con,$sql);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('Homechef record deleted successfully...');</script>";
		echo "<script>window.location='viewhomechef.php';</script>";
	}
	else
	{
		echo mysqli_error($con);
	}
}
?>
    <section class="register-restaurent-sec section-padding bg-light-theme">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sidebar-tabs main-box padding-20 mb-md-40">
                        <div id="add-restaurent-tab" class="step-app">
                            <div class="row">
								<div class="col-xl-12 col-lg-12">
                                    <div class="step-content">
                                        <div class="step-tab-panel active" id="steppanel1">
                                            <div class="general-sec">
<div class="col-12">
			<h5 class="text-light-black fw-700">View Home Chef</h5>

<table id="datatable" class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Image</th>
			<th>Home Chef Name</th>
			<th>Email ID</th>
			<th>Location</th>
			<th>Address</th>
			<th>Food Type</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	<?php
	$sql ="SELECT homechef.*,location.locationname from homechef  LEFT JOIN location ON homechef.locationid=location.locationid ";
	$qsql= mysqli_query($con,$sql);
	while($rs = mysqli_fetch_array($qsql))
	{
		if($rs['image'] == "")
		{
			$img = "assets/img/noimage.png";
		}
		else if(file_exists("imghomechef/".$rs['image']))
		{
			$img = "imghomechef/".$rs['image'];
		}
		else
		{
			$img = "assets/img/noimage.png";
		}
		echo "<tr>
			<td><img src='$img' style='width: 100px; height: 125px;'></td>
			<td>$rs[homechefname]</td>
			<td>$rs[emailid]</td>
			<td>$rs[locationname]</td>
			<td>$rs[address], <br> <b>Ph. No.</b> $rs[contactno]</td>
			<td>$rs[foodtype]</td>
			<td>$rs[status]";
	
	if($rs['status'] == "Active")
	{
		echo "<a href='viewhomechef.php?editid=$rs[0]&st=Inactive' class='btn btn-danger' onclick='return confirmdeactivate()' >Deactivate</a>";
	}
	else
	{
		echo "<a href='viewhomechef.php?editid=$rs[0]&st=Active' class='btn btn-success' onclick='return confirmactivate()' >Activate</a>";
	}
			echo "</td>
			<td>
			  <a href='homechef.php?editid=$rs[0]' class='btn btn-info'>View</a>	
			  | 
			<a href='viewhomechef.php?delid=$rs[0]' class='btn btn-warning' onclick='return confirmdelete()' >Delete</a>
			</td>
		</tr>";
	}
	?>
	</tbody>
</table>
			
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
        </div>
    </section>
<?php
include("footer.php");
?>  
<script>
function confirmdelete()
{
	if(confirm("Are you sure you want to delete this record?") == true)
	{
		return true;
	}
	else
	{
		return false;
	}
}
function confirmactivate() 
{
	if(confirm("Are you sure you want to ACTIVATE this record?") == true)
	{
		return true;
	}
	else
	{
		return false;
	}
}
function confirmdeactivate()
{
	if(confirm("Are you sure you want to DEACTIVATE this record?") == true)
	{
		return true;
	}
	else
	{
		return false;
	}
}
</script>	 
                           