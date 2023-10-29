<?php
include("header.php");
if(isset($_GET['delid']))
{
	$sql ="delete from item WHERE itemid='$_GET[delid]'";
	$qsql = mysqli_query($con,$sql);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('Item record deleted successfully...');</script>";
		echo "<script>window.location='viewitem.php';</script>";
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
			<h5 class="text-light-black fw-700">View Item</h5>

<table id="datatable" class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Image</th>
			<th>Home Chef</th>
			<th>Food Category</th>
			<th>Food Type</th>
			<th>Item Name</th>
			<th style="text-align: right;">Item Cost</th>
			<!-- <th>Item Type</th> -->
			<th>Status</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	<?php
	$sql ="SELECT item.*,foodcategory.foodcategoryname,homechef.homechefname from item
	LEFT JOIN foodcategory ON item.foodcategoryid=foodcategory.foodcategoryid 
	LEFT JOIN homechef ON item.homechefid=homechef.homechefid where item.status!='' ";
	if(isset($_SESSION['homechefid']))
	{
		$sql = $sql . "  AND item.homechefid='$_SESSION[homechefid]'";
	}
	$qsql= mysqli_query($con,$sql);
	while($rs = mysqli_fetch_array($qsql))
	{
		if($rs['itemimage'] == "")
		{
			$img = "assets/img/noimage.png";
		}
		else if(file_exists("imgfooditem/".$rs['itemimage']))
		{
			$img = "imgfooditem/".$rs['itemimage'];
		}
		else
		{
			$img = "assets/img/noimage.png";
		}
		echo "<tr>
			<td><img src='$img' style='width: 100px; height: 80px'></td>
			<td>$rs[homechefname]</td>
			<td>$rs[foodcategoryname]</td>
			<td>$rs[foodtype]</td>
			<td>$rs[itemname]</td>
			<td  style='text-align: right;' >₹$rs[itemcost]</td>";
			//echo "<td>$rs[itemtype]</td>";
		echo "<td>$rs[status]</td>
			<td style='width: 100px;'>
			<a href='item.php?editid=$rs[0]' class='btn btn-info' style='width: 100px;'>Edit</a>	
			<a href='viewitem.php?delid=$rs[0]' class='btn btn-warning' onclick='return confirmdelete()' style='width: 100px;' >Delete</a>
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
                           