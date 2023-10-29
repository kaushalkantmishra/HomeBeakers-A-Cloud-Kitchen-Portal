<?php
error_reporting(0);
include("dbconnection.php");
$sqlcity ="SELECT * FROM city where status='Active' AND (locationid='$_GET[locationid]' OR cityid='$rsedit[cityid]')";
?>
<select name="cityid" id="cityid" class="form-control">
	<option value="">Select City</option>
	<?php
	$qsqlcity=mysqli_query($con,$sqlcity);
	while($rscity = mysqli_fetch_array($qsqlcity))
	{
		if($rscity['cityid']  == $rsedit['cityid'])
		{
		echo "<option value='$rscity[cityid]' selected>$rscity[city]</option>";
		}
		else
		{
		echo "<option value='$rscity[cityid]'>$rscity[city]</option>";
		}
	}
	?>
</select>