<hr>   
   <footer class="section-padding bg-light-theme pt-0 u-line">
        <div class="u-line instagram-slider swiper-container">
            <ul class="hm-list hm-instagram swiper-wrapper">
			<?php
			$sqlhomecheflist = "SELECT * FROM homechef 	WHERE status='Active'";
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
                <li class="swiper-slide">
				<a href="#"><img src="<?php echo $img; ?>" style="height: 100px;" alt="<?php echo $rshomecheflist['homechefname']; ?>"></a>
                </li>
			<?php
			}
			?>
            </ul>
        </div>
    </footer>
    <!-- footer -->
    <div class="footer-top section-padding bg-black">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-3 mb-sm-20">
                    <div class="icon-box"> <span class="text-light-green"><i class="flaticon-credit-card-1"></i></span>
                        <span class="text-custom-white">100% Payment<br>Secured</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-3 mb-sm-20">
                    <div class="icon-box"> <span class="text-light-green"><i class="flaticon-help"></i></span>
                        <span class="text-custom-white">24 hours / 7 days<br>Service</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-3">
                    <div class="icon-box"> <span class="text-light-green"><i class="flaticon-truck"></i></span>
                        <span class="text-custom-white">Free Delivery</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-3">
                    <div class="icon-box"> <span class="text-light-green"><i class="flaticon-guarantee"></i></span>
                        <span class="text-custom-white">Best Price<br>Guaranteed</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="payment-logo mb-md-20"> <span class="text-light-white fs-14 mr-3">We are accept</span>
                        <div class="payemt-icon">
                            <img src="assets/img/card-front.jpg" alt="#">
                            <img src="assets/img/visa.jpg" alt="#">
                            <img src="assets/img/amex-card-front.png" alt="#">
                            <img src="assets/img/mastercard.png" alt="#">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 text-center medewithlove align-self-center">
					 © 2023 Home Bakers. All Rights Reserved | Designed and Devloped by :kaushal kant,Devanand,vikram,vivek.
            
                </div>
				<?php
				if(!isset($_SESSION['employeeid']))
				{
					if(!isset($_SESSION['homechefid']))
					{
					?>
	<div class="col-lg-2">
		<div class="copyright-text"> <span class="text-light-black"><a href="stafflogin.php" class='btn btn-primary'>Staff Login</a> </span>
		</div>
	</div>
					<?php
					}
				}
				?>
            </div>
        </div>
    </div>
    <!-- footer -->
    <!-- modal boxes -->
    <div class="modal fade" id="address-box">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title fw-700">Change Address</h4>
                </div>
                <div class="modal-body">
                    <div class="location-picker">
                        <input type="text" class="form-control" placeholder="Enter a new address">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="search-box">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="search-box p-relative full-width">
                        <input type="text" class="form-control" placeholder="Pizza, Burger, Chinese">
                    </div>
                </div>
                <div class="modal-body"></div>
            </div>
        </div>
    </div>
    <!-- product popup -->
    <div class="modal fade restaurent-popup" id="restaurent-popup">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <img src="https://via.placeholder.com/800x200" class="img-fluid full-width" alt="#">
                </div>
                <div class="modal-body">
                    <div class="name padding-10">
                        <h3 class="text-light-black fw-700 mb-2">Sausage Egg McMuffin - Meal</h3>
                        <h5 class="text-light-black fw-600 no-margin">$7.40</h5>
                    </div>
                    <div class="padding-10">
                        <p class="text-light-black no-margin">600-770 Cal.</p>
                    </div>
                    <div class="u-line">
                        <div class="product-quantity padding-10"> <span class="text-light-black fw-700 fs-16">Quantity</span>
                            <div class="input-group quantity">
                                <div class="input-group-append">
                                    <button class="minus-btn" type="button" name="button"> <i class="fas fa-minus"></i>
                  </button>
                                </div>
                                <input type="text" class="text-center" name="name" value="1">
                                <div class="input-group-prepend">
                                    <button class="plus-btn" type="button" name="button"><i class="fas fa-plus"></i>
                  </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- sub product -->
                    <div class="additional-product">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="no-margin">
                                    <a class="card-link collapsed text-light-black fw-700" data-toggle="collapse" href="#additionalOne">
                                        <span>Select Breakfast Drink
                      <span class="text-light-white fw-500 fs-12 padding-tb-10">Select one (Required)</span></span>
                                    </a>
                                </h5>
                            </div>
                            <div id="additionalOne" class="collapse">
                                <div class="card-body padding-10">
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="no-margin">
                                    <a class="card-link collapsed text-light-black fw-700" data-toggle="collapse" href="#additionalTwo">
                                        <span>Select Breakfast Drink
                      <span class="text-light-white fw-500 fs-12 padding-tb-10">Select one (Required)</span></span>
                                    </a>
                                </h5>
                            </div>
                            <div id="additionalTwo" class="collapse">
                                <div class="card-body padding-10">
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="no-margin">
                                    <a class="card-link collapsed text-light-black fw-700" data-toggle="collapse" href="#additionalThree">
                                        <span>Select Breakfast Drink
                      <span class="text-light-white fw-500 fs-12 padding-tb-10">Select one (Required)</span></span>
                                    </a>
                                </h5>
                            </div>
                            <div id="additionalThree" class="collapse">
                                <div class="card-body padding-10">
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="no-margin">
                                    <a class="card-link collapsed text-light-black fw-700" data-toggle="collapse" href="#additionalFour">
                                        <span>Select Breakfast Drink
                      <span class="text-light-white fw-500 fs-12 padding-tb-10">Select one (Required)</span></span>
                                    </a>
                                </h5>
                            </div>
                            <div id="additionalFour" class="collapse">
                                <div class="card-body padding-10">
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- sub product -->
                </div>
                <div class="modal-footer padding-10">
                    <button class="btn-second btn-submit">Add Bag : $7.40</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Place all Scripts Here -->
    <!-- jQuery -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="assets/js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Range Slider -->
    <script src="assets/js/ion.rangeSlider.min.js"></script>
    <!-- Swiper Slider -->
    <script src="assets/js/swiper.min.js"></script>
    <!-- Nice Select -->
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <!-- magnific popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnd9JwZvXty-1gHZihMoFhJtCXmHfeRQg"></script>
    <!-- sticky sidebar -->
    <script src="assets/js/sticksy.js"></script>
    <!-- Munch Box Js -->
    <script src="assets/js/munchbox.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <!-- /Place all Scripts Here -->
	<script>
	$(document).ready( function () {
    $('#datatable').DataTable();
	} );
	</script>
<?php
if(isset($_SESSION['customerid']))
{
	if(!isset($_SESSION['locationid']))
	{
	?>
	<script type="text/javascript">
		$(window).on('load',function(){
			$('#myLocationModal').modal('show');
		});
		$('#myLocationModal').modal({
		backdrop: 'static',
		keyboard: false
		})
	</script>
	<?php
	}
}
?>
</body>


<!-- munchbox/restaurant.html  05 Dec 2019 10:14:41 GMT -->
</html>