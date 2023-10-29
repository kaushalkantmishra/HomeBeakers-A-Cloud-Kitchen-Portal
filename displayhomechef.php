<?php
include("header.php");
?>
    <!-- your previous order -->
    <section class="recent-order section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-header-left">
                        <h3 class="text-light-black header-title title">Home Chef Lists</h3>
                    </div>
                </div>
				
			<?php
			$sqlhomecheflist = "SELECT * FROM homechef 	WHERE status='Active' ORDER BY homechefid DESC";
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
			<a href="homebakersdetail.php?homechefid=<?php  echo $rshomecheflist[0]; ?>">
				<img src="<?php echo $img; ?>" class="img-fluid full-width" alt="product-img" style="height: 275px;">
			</a>
		</div>
		<div class="product-caption">
			<h6 class="product-title"><a href="restaurant.php" class="text-light-black "> <?php echo $rshomecheflist['homechefname']; ?></a></h6>
			<p class="text-light-white"><?php echo $rshomecheflist['foodtype']; ?> &nbsp;</p>
			<div class="product-btn">
				<a href="homebakersdetail.php?homechefid=<?php  echo $rshomecheflist[0]; ?>" class="btn-first white-btn full-width text-light-green fw-600">View More...</a>
			</div>
		</div><hr>
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
<?php
include("footer.php");
?>