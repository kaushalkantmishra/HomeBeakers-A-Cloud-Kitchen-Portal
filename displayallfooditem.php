<?php
include("header.php");
?>
    <!-- Explore collection -->
    <section class="ex-collection section-padding">
        <div class="container">
			
            <div class="row">
                <div class="col-12">
                    <div class="section-header-left">
                        <h3 class="text-light-black header-title title">Explore  latest collections </h3>
                    </div>
                </div>
            </div>			
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="row">
					
<?php
	$sql ="SELECT item.*,foodcategory.foodcategoryname,homechef.homechefname from item
	LEFT JOIN foodcategory ON item.foodcategoryid=foodcategory.foodcategoryid 
	LEFT JOIN homechef ON item.homechefid=homechef.homechefid where item.status!=''";
	if(isset($_SESSION['locationid']))
	{
		$sql = $sql . "	and homechef.locationid='$_SESSION[locationid]' ";
	}
	if(isset($_GET['foodcategoryid']))
	{
		$sql = $sql . " AND item.foodcategoryid='$_GET[foodcategoryid]'";
	}
	$sql = $sql . " ORDER BY  item.itemid ";
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
?>		
<div class="col-lg-4 col-md-6 col-sm-6">
	<div class="product-box mb-xl-20">
		<div class="product-img">
			<a href="restaurant.php">
				<img src="<?php echo $img; ?>" style="width: 350px; height: 300px;" class="img-fluid full-width" alt="product-img">
			</a>
			<div class="overlay">
				<div class="product-tags padding-10">
<?php
/*				
<span class="circle-tag"><img src="assets/img/svg/013-heart-1.svg" alt="tag"></span>
<div class="custom-tag"> <span class="text-custom-white rectangle-tag bg-gradient-red">10%</span></div>
*/
?>
				</div>
			</div>
		</div>
		<div class="product-caption">
			<div class="title-box">
				<h6 class="product-title"><a href="" onclick="return false;" class="text-light-black "> <?php echo $rs['itemname']; ?></a></h6>
				<div class="tags"> 

<?php
if($rs['foodtype'] == "Vegetarian" )
{
?>
<span class="text-custom-white rectangle-tag bg-green rounded"><i class="fa fa-check-circle" aria-hidden="true"></i></span>
<?php
}
?>
<?php
if($rs['foodtype'] == "Non Vegitarian" )
{
?>
<span class="text-custom-white rectangle-tag bg-red rounded"><i class="fa fa-check-circle" aria-hidden="true"></i></span>
<?php
}
?>
				</div>
			</div>
			<div class="product-details">
				<div class="price-time"> <span class="text-light-black time"><b>Prepared by: <?php echo $rs['homechefname']; ?></b></span>
				</div>
				<div class="rating"> 
					<span class="text-light-white text-right">[<?php echo $rs['foodcategoryname']; ?>]</span>
				</div>
			</div><hr>
			<div class="product-footer">
			<div class="col-md-4">
			<b>₹<?php echo $rs['itemcost']; ?></b>
			</div>
			<div class="col-md-8">
<input type="button" name="submit" value="Click here to Order" class="btn btn-danger" onclick="window.location='homebakersdetail.php?homechefid=<?php echo $rs['homechefid']; ?>&itemid=<?php echo $rs[0]; ?>'" >
			</div>
			</div>
		</div>
	</div>
</div>
<?php
	}
?>
   
				   </div>
                </div>
            </div>

		</div>
    </section>
    <!-- Explore collection -->
 
<?php
include("footer.php");
?>