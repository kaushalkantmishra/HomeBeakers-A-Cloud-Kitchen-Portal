<?php
session_start();
error_reporting(0);
include("dbconnection.php");
if(isset($_GET['delorderid']))
{
	$sqlfoodorder ="DELETE FROM foodorder where orderid = '$_GET[delorderid]'";
	$qsqlfoodorder= mysqli_query($con,$sqlfoodorder);
}
if(isset($_GET['itemid']))
{
	$sqlfoodorder ="DELETE FROM foodorder where itemid = '$_GET[itemid]'  AND status='Pending' AND customerid='$_SESSION[customerid]'";
	$qsqlfoodorder= mysqli_query($con,$sqlfoodorder);
	$sqlitem ="SELECT * from item where itemid = '$_GET[itemid]' ";
	$qsqlitem= mysqli_query($con,$sqlitem);
	$rsitem = mysqli_fetch_array($qsqlitem);
	$sql="INSERT INTO foodorder(customerid,paymentid,homechefid,itemid,qty,cost,description,status ) VALUES('$_SESSION[customerid]','0','$rsitem[homechefid]','$_GET[itemid]','1','$rsitem[itemcost]','','Pending')";
	$qsql = mysqli_query($con,$sql);
}
?>
<?php
$slno=1;
$sql ="SELECT foodorder.*,item.itemname,item.itemcost FROM foodorder LEFT JOIN item ON foodorder.itemid=item.itemid WHERE foodorder.status='Pending'  AND foodorder.customerid='$_SESSION[customerid]'";
$qsql= mysqli_query($con,$sql);
echo mysqli_error($con);
$itemcost= 0;
while($rs = mysqli_fetch_array($qsql))
{
?>				
<div class="cat-product-box">
	<div class="cat-product">
		<div class="cat-name">
			<a href="#">
				<p class="text-light-green fw-700"><span class="text-dark-white"><?php echo $slno; ?></span> <?php echo $rs['itemname']; ?></p>
			</a>
		</div>
		<div class="delete-btn">
			<a href="#" class="text-dark-white" onclick="deleteorder('<?php echo $rs[0]; ?>')"> <i class="far fa-trash-alt"></i>
			</a>
		</div>
		<div class="price">
		<a href="#" class="text-dark-white fw-500">₹<?php echo $rs['itemcost']; ?></a>
		</div>
	</div>
</div>
<?php
$slno = $slno +1;
$itemcost = $itemcost + $rs['itemcost'];
}
?>
<input type="hidden" name="grandtotala" id="grandtotala" value="<?php echo $itemcost; ?>" >