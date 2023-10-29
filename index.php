<?php
include("header.php");
?>
	 <!-- slider -->
    <section class="about-us-slider swiper-container p-relative">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide-item">
                <img src="assets/img/about/blog/1920x700/banner-1.jpg" class="img-fluid full-width" alt="Banner">
<div class="transform-center">
	<div class="container">
		<div class="row justify-content-start">
			<div class="col-lg-7 align-self-center">
				<div class="right-side-content">
					<h1 class="text-custom-white fw-600">Home Bakers</h1>
					<h3 class="text-custom-white fw-400">with the largest delivery platform in India...</h3>
				</div>
			</div>
		</div>
	</div>
</div>
                <div class="overlay overlay-bg"></div>
            </div>
            <div class="swiper-slide slide-item">
                <img src="assets/img/about/blog/1920x700/banner-2.jpg" class="img-fluid full-width" alt="Banner">
                <div class="transform-center">
<div class="container">
	<div class="row justify-content-center">
		<div class="col-lg-8 align-self-center">
			<div class="right-side-content text-center">
				<h1 class="text-custom-white fw-600">Home Bakers</h1>
				<h3 class="text-custom-white fw-400">with the largest delivery platform in India...</h3>
			</div>
		</div>
	</div>
</div>
                </div>
                <div class="overlay overlay-bg"></div>
            </div>
            <div class="swiper-slide slide-item">
                <img src="assets/img/about/blog/1920x700/banner-3.jpg" class="img-fluid full-width" alt="Banner">
                <div class="transform-center">
<div class="container">
	<div class="row justify-content-end">
		<div class="col-lg-7 align-self-center">
			<div class="right-side-content text-right">
				<h1 class="text-custom-white fw-600">Home Bakers</h1>
				<h3 class="text-custom-white fw-400">with the largest delivery platform in India...</h3>
			</div>
		</div>
	</div>
</div>
                </div>
                <div class="overlay overlay-bg"></div>
            </div>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </section>
    <!-- slider -->
    <!-- Browse by category -->
    <section class="browse-cat u-line section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-header-left">
                        <h3 class="text-light-black header-title title">Browse by Category <span class="fs-14"><a href="#"><?php $sqlfoodcategory ="SELECT * from foodcategory";
$qsqlfoodcategory = mysqli_query($con,$sqlfoodcategory); echo mysqli_num_rows($qsqlfoodcategory); ?> categories</a></span></h3>
                    </div>
                </div>
                <div class="col-12">
                    <div class="category-slider swiper-container">
                        <div class="swiper-wrapper">
<?php
while($rsfoodcategory  = mysqli_fetch_array($qsqlfoodcategory))
{
		if($rsfoodcategory['foodcategoryimage'] == "")
		{
			$img = "assets/img/noimage.png";
		}
		else if(file_exists("imgfoodcategory/".$rsfoodcategory['foodcategoryimage']))
		{
			$img = "imgfoodcategory/".$rsfoodcategory['foodcategoryimage'];
		}
		else
		{
			$img = "assets/img/noimage.png";
		}
?>			
<div class="swiper-slide">
	<a href="displayallfooditem.php?foodcategoryid=<?php echo $rsfoodcategory[0]; ?>" class="categories">
		<div class="icon text-custom-white bg-light-green ">
			<img src="<?php echo $img; ?>" class="rounded-circle" alt="categories">
		</div> <span class="text-light-black cat-name"><?php echo $rsfoodcategory['foodcategoryname']; ?></span>
	</a>
</div>
<?php
}
?>
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Browse by category -->
    <!-- your previous order -->
    <section class="recent-order section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-header-left">
                        <h3 class="text-light-black header-title title">Popular Home Chef<span class="fs-14"><a href="displayhomechef.php">See all Home Chefs..</a></span></h3>
                    </div>
                </div>
				
			<?php
			$sqlhomecheflist = "SELECT * FROM homechef 	WHERE status='Active'";
			if(isset($_SESSION['locationid']))
			{
			$sqlhomecheflist = $sqlhomecheflist . " AND locationid='$_SESSION[locationid]' ";
			}
			$sqlhomecheflist = $sqlhomecheflist . " ORDER BY rand() LIMIT 4";
			$qsqlhomecheflist = mysqli_query($con,$sqlhomecheflist);
			while($rshomecheflist = mysqli_fetch_array($qsqlhomecheflist))
			{
				if($rshomecheflist['image'] == "")
				{
					$img = "assets/img/noimage.png";
				}
				else if(file_exists("imghomechef/".$rshomecheflist['image']))
				{
					$img = "imghomechef/".$rshomecheflist['image'];
				}
				else
				{
					$img = "assets/img/noimage.png";
				}					
			?>
<div class="col-lg-3 col-md-6 col-sm-6">
	<div class="product-box mb-md-20">
		<div class="product-img">
			<a href="homebakersdetail.php?homechefid=<?php echo $rshomecheflist[0]; ?>">
				<img src="<?php echo $img; ?>" class="img-fluid full-width" alt="product-img" style="height: 275px;">
			</a>
		</div>
		<div class="product-caption">
			<h6 class="product-title"><a href="homebakersdetail.php?homechefid=<?php echo $rshomecheflist[0]; ?>" class="text-light-black "> <?php echo $rshomecheflist['homechefname']; ?></a></h6>
			<p class="text-light-white"><?php echo $rshomecheflist['foodtype']; ?> &nbsp;</p>
			<div class="product-btn">
				<a href="homebakersdetail.php?homechefid=<?php echo $rshomecheflist[0]; ?>" class="btn-first white-btn full-width text-light-green fw-600">View More...</a>
			</div>
		</div>
	</div>
</div>
			<?php
			}
			?>
				
				
            </div>
        </div>
    </section>
    <!-- your previous order -->
<HR>	
    <!-- Explore collection -->
    <section class="ex-collection section-padding">
        <div class="container">
		
            <div class="row">
                <div class="col-12">
                    <div class="section-header-left">
                        <h3 class="text-light-black header-title title">Explore  latest collections <span class="fs-14"><a href="displayallfooditem.php">View More...</a></span></h3>
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
$sql = $sql . "	AND homechef.locationid='$_SESSION[locationid]' ";

	}
	$sql = $sql . " ORDER BY rand() LIMIT 9";
	$qsql= mysqli_query($con,$sql);
	echo mysqli_error($con);
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
				<h6 class="product-title"><a href="restaurant.php" class="text-light-black "> <?php echo $rs['itemname']; ?></a></h6>
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