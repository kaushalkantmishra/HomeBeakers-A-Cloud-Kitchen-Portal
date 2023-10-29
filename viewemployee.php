<?php
include("header.php");
if(isset($_GET['delid']))
{
	$sql ="delete from employee WHERE employeeid='$_GET[delid]'";
	$qsql = mysqli_query($con,$sql);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('Employee record deleted successfully...');</script>";
		echo "<script>window.location='viewemployee.php';</script>";
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
			<h5 class="text-light-black fw-700">View Employee</h5>

<table id="datatable" class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Employee Type</th>
			<th>Employee Name</th>
			<th>Location</th>
			<th>Login ID</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	<?php
	$sql ="SELECT employee.*,location.locationname from employee LEFT JOIN location ON employee.locationid=location.locationid ";
	$qsql= mysqli_query($con,$sql);
	while($rs = mysqli_fetch_array($qsql))
	{
		echo "<tr>
			<td>$rs[employeetype]</td>
			<td>$rs[employeename]</td>
			<td>$rs[locationname]</td>
			<td>$rs[loginid]</td>
			<td>$rs[status]</td>
			<td>
			<a href='employee.php?editid=$rs[0]' class='btn btn-info'>Edit</a>
			| 
			<a href='viewemployee.php?delid=$rs[0]' class='btn btn-warning' onclick='return confirmdelete()' >Delete</a>
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
</script>	  
                           