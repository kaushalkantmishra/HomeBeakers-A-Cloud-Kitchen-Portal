<?php
include("header.php");
if(isset($_GET['delid']))
{
	$sql ="delete from foodcategory WHERE foodcategoryid='$_GET[delid]'";
	$qsql = mysqli_query($con,$sql);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('Foodcategory record deleted successfully...');</script>";
		echo "<script>window.location='viewfoodcategory.php';</script>";
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
			<h5 class="text-light-black fw-700">View Food Category</h5>

<table id="datatable" class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Image</th>
			<th>Food Category Name</th>
			<th>Food Category Description</th>
			<th>Food Category Status</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	<?php
	$sql ="SELECT * from foodcategory";
	$qsql= mysqli_query($con,$sql);
	while($rs = mysqli_fetch_array($qsql))
	{
		if($rs['foodcategoryimage'] == "")
		{
			$img = "assets/img/noimage.png";
		}
		else if(file_exists("imgfoodcategory/".$rs['foodcategoryimage']))
		{
			$img = "imgfoodcategory/".$rs['foodcategoryimage'];
		}
		else
		{
			$img = "assets/img/noimage.png";
		}
		echo "<tr>
			<td><img src='$img' style='width: 150px;height: 100px;' > </td>
			<td>$rs[foodcategoryname]</td>
			<td>$rs[foodcategorydescription]</td>
			<td>$rs[foodcategorystatus]</td>
			<td>
			<a href='foodcategory.php?editid=$rs[0]' class='btn btn-info'>Edit</a>
			| 
			<a href='viewfoodcategory.php?delid=$rs[0]' class='btn btn-warning' onclick='return confirmdelete()' >Delete</a>
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
                           