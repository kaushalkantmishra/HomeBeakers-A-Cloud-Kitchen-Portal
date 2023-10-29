<?php
include("header.php");
?>
    <!-- Browse by category -->
    <div class="most-popular section-padding">
        <div class="container-fluid">
            <div class="row">
                <aside class="col-lg-3 mb-md-40">
                    <div class="filter-sidebar mb-5">
                        <h4 class="text-light-black fw-600 title-2">Filters<small class="fs-12"><a href="#" class="text-light-black fw-500">Clear all</a></small></h4>
                        <div class="sidebar-tab">
                            <ul class="nav nav-pills mb-xl-20">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="pill" href="#restaurents">Restaurants</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="pill" href="#caterings">Caterings</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="restaurents">
                                    <div class="siderbar-innertab">
                                        <ul class="nav nav-pills">
                                            <li class="nav-item"> <a class="nav-link active" data-toggle="pill" href="#delivery-restaurents">Delivery</a>
                                            </li>
                                            <li class="nav-item"> <a class="nav-link" data-toggle="pill" href="#pickup-restaurents">Pickup</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="delivery-restaurents">
                                            <p class="text-light-black delivery-type p-relative">Delivery my food <a href="#">Today, ASAP</a>
                                            </p>
                                            <div class="filters">
                                                <div class="card">
                                                    <div class="card-header"> <a class="card-link text-light-black fw-700 fs-16" data-toggle="collapse" href="#deliverycollapseOne">
                                  Feature
                                </a>
                                                    </div>
                                                    <div id="deliverycollapseOne" class="collapse show">
                                                        <div class="card-body">
                                                            <form>
                                                                <label class="custom-checkbox">
                                  <input type="checkbox" name="#"> <span class="checkmark"></span> New <span class="text-light-white">(3)</span>
                                </label>
                                                                <label class="custom-checkbox">
                                  <input type="checkbox" name="#"> <span class="checkmark"></span> Order Tracking <span class="text-light-white">(6)</span>
                                </label>
                                                                <label class="custom-checkbox">
                                  <input type="checkbox" name="#"> <span class="checkmark"></span> Open Now [6:05am] <span class="text-light-white">(10)</span>
                                </label>
                                                                <label class="custom-checkbox">
                                  <input type="checkbox" name="#"> <span class="checkmark"></span> Free Delivery <span class="text-light-white">(6)</span>
                                </label>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header"> <a class="card-link text-light-black fw-700 fs-16" data-toggle="collapse" href="#deliverycollapseTwo">
                                Rating
                              </a>
                                                    </div>
                                                    <div id="deliverycollapseTwo" class="collapse show">
                                                        <div class="card-body">
                                                            <div class="rating">
                                                                <button class="text-yellow"><i class="fas fa-star"></i>
                                </button>
                                                                <button class="text-yellow"><i class="fas fa-star"></i>
                                </button>
                                                                <button class="text-yellow"><i class="fas fa-star"></i>
                                </button>
                                                                <button class="text-yellow"><i class="fas fa-star"></i>
                                </button>
                                                                <button class="text-yellow"><i class="fas fa-star"></i>
                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header"> <a class="card-link text-light-black fw-700 fs-16" data-toggle="collapse" href="#deliverycollapseThree">
                                  Price
                                </a>
                                                    </div>
                                                    <div id="deliverycollapseThree" class="collapse show">
                                                        <div class="card-body">
                                                            <div class="rating">
                                                                <button class="text-success">$</button>
                                                                <button class="text-success">$$</button>
                                                                <button class="text-success">$$$</button>
                                                                <button class="text-success">$$$$</button>
                                                                <button class="text-success">$$$$$</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header"> <a class="card-link text-light-black fw-700 fs-16" data-toggle="collapse" href="#deliverycollapseFour">
                                  Delivery time
                                </a>
                                                    </div>
                                                    <div id="deliverycollapseFour" class="collapse show">
                                                        <div class="card-body">
                                                            <div class="delivery-slider">
                                                                <input type="text" class="delivery-range-slider" value="" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pickup-restaurents">
                                            <p class="text-light-black delivery-type p-relative">Pick my food <a href="#">Today, ASAP</a>
                                            </p>
                                            <div class="filters">
                                                <div class="card">
                                                    <div class="card-header"> <a class="card-link text-light-black fw-700 fs-16" data-toggle="collapse" href="#pickupcollapseOne">
                                  Feature
                                </a>
                                                    </div>
                                                    <div id="pickupcollapseOne" class="collapse show">
                                                        <div class="card-body">
                                                            <form>
                                                                <label class="custom-checkbox">
                                  <input type="checkbox" name="#"> <span class="checkmark"></span> Coupons <span class="text-light-white">(1)</span>
                                </label>
                                                                <label class="custom-checkbox">
                                  <input type="checkbox" name="#"> <span class="checkmark"></span> New <span class="text-light-white">(26)</span>
                                </label>
                                                                <label class="custom-checkbox">
                                  <input type="checkbox" name="#"> <span class="checkmark"></span> Open Now [7:08am] <span class="text-light-white">(236)</span>
                                </label>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header"> <a class="card-link text-light-black fw-700 fs-16" data-toggle="collapse" href="#pickupcollapseTwo">
                                Rating
                              </a>
                                                    </div>
                                                    <div id="pickupcollapseTwo" class="collapse show">
                                                        <div class="card-body">
                                                            <div class="rating">
                                                                <button class="text-yellow"><i class="fas fa-star"></i>
                                </button>
                                                                <button class="text-yellow"><i class="fas fa-star"></i>
                                </button>
                                                                <button class="text-yellow"><i class="fas fa-star"></i>
                                </button>
                                                                <button class="text-yellow"><i class="fas fa-star"></i>
                                </button>
                                                                <button class="text-yellow"><i class="fas fa-star"></i>
                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header"> <a class="card-link text-light-black fw-700 fs-16" data-toggle="collapse" href="#pickupcollapseThree">
                                  Price
                                </a>
                                                    </div>
                                                    <div id="pickupcollapseThree" class="collapse show">
                                                        <div class="card-body">
                                                            <div class="rating">
                                                                <button class="text-success">$</button>
                                                                <button class="text-success">$$</button>
                                                                <button class="text-success">$$$</button>
                                                                <button class="text-success">$$$$</button>
                                                                <button class="text-success">$$$$$</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header"> <a class="card-link text-light-black fw-700 fs-16" data-toggle="collapse" href="#pickupcollapseFour">
                                  Distance
                                </a>
                                                    </div>
                                                    <div id="pickupcollapseFour" class="collapse show">
                                                        <div class="card-body">
                                                            <div class="delivery-slider">
                                                                <input type="text" class="distance-range-slider" value="" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="caterings">
                                    <div class="siderbar-innertab">
                                        <ul class="nav nav-pills">
                                            <li class="nav-item"> <a class="nav-link active" data-toggle="pill" href="#delivery-caterings">Delivery</a>
                                            </li>
                                            <li class="nav-item"> <a class="nav-link disabled" data-toggle="pill" href="#pickup-caterings">Pickup</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="delivery-caterings">
                                            <p class="text-light-black delivery-type p-relative">Delivery my food <a href="#">Today, ASAP</a>
                                            </p>
                                            <div class="filters">
                                                <div class="card">
                                                    <div class="card-header"> <a class="card-link text-light-black fw-700 fs-16" data-toggle="collapse" href="#delivery-cateringscollapseOne">
                                  Feature
                                </a>
                                                    </div>
                                                    <div id="delivery-cateringscollapseOne" class="collapse show">
                                                        <div class="card-body">
                                                            <form>
                                                                <label class="custom-checkbox">
                                  <input type="checkbox" name="#"> <span class="checkmark"></span> Coupons <span class="text-light-white">(2)</span>
                                </label>
                                                                <label class="custom-checkbox">
                                  <input type="checkbox" name="#"> <span class="checkmark"></span> New <span class="text-light-white">(3)</span>
                                </label>
                                                                <label class="custom-checkbox">
                                  <input type="checkbox" name="#"> <span class="checkmark"></span> Order Tracking <span class="text-light-white">(6)</span>
                                </label>
                                                                <label class="custom-checkbox">
                                  <input type="checkbox" name="#"> <span class="checkmark"></span> Open Now [6:05am] <span class="text-light-white">(10)</span>
                                </label>
                                                                <label class="custom-checkbox">
                                  <input type="checkbox" name="#"> <span class="checkmark"></span> Free Delivery <span class="text-light-white">(6)</span>
                                </label>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header"> <a class="card-link text-light-black fw-700 fs-16" data-toggle="collapse" href="#delivery-cateringscollapseTwo">
                                Rating
                              </a>
                                                    </div>
                                                    <div id="delivery-cateringscollapseTwo" class="collapse show">
                                                        <div class="card-body">
                                                            <div class="rating">
                                                                <button class="text-yellow"><i class="fas fa-star"></i>
                                </button>
                                                                <button class="text-yellow"><i class="fas fa-star"></i>
                                </button>
                                                                <button class="text-yellow"><i class="fas fa-star"></i>
                                </button>
                                                                <button class="text-yellow"><i class="fas fa-star"></i>
                                </button>
                                                                <button class="text-yellow"><i class="fas fa-star"></i>
                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header"> <a class="card-link text-light-black fw-700 fs-16" data-toggle="collapse" href="#delivery-cateringscollapseThree">
                                  Price
                                </a>
                                                    </div>
                                                    <div id="delivery-cateringscollapseThree" class="collapse show">
                                                        <div class="card-body">
                                                            <div class="rating">
                                                                <button class="text-success">$</button>
                                                                <button class="text-success">$$</button>
                                                                <button class="text-success">$$$</button>
                                                                <button class="text-success">$$$$</button>
                                                                <button class="text-success">$$$$$</button>
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
                    <div class="advertisement-slider swiper-container p-relative h-auto mb-md-40">
                        <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial-wrapper">
                                        <div class="testimonial-box">
                                            <div class="testimonial-img p-relative">
                                                <a href="restaurant.php">
                                                    <img src="assets/img/blog/438x180/shop-1.jpg" class="img-fluid full-width" alt="testimonial-img">
                                                </a>
                                                <div class="overlay">
                                                    <div class="brand-logo">
                                                        <img src="assets/img/logo-4.jpg" class="img-fluid" alt="logo">
                                                    </div>
                                                    <div class="add-fav text-success">
                                                        <img src="assets/img/svg/013-heart-1.svg" alt="tag">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="testimonial-caption padding-15">
                                                <p class="text-light-white text-uppercase no-margin fs-12">Featured</p>
                                                <h5 class="fw-600"><a href="restaurant.php" class="text-light-black">GSA King Tomato Farm</a></h5>
                                                <div class="testimonial-user-box">
                                                    <img src="assets/img/blog-details/40x40/user-1.png" class="rounded-circle" alt="#">
                                                    <div class="testimonial-user-name">
                                                        <p class="text-light-black fw-600">Sarra</p> <i class="fas fa-trophy text-black"></i><span class="text-light-black">Top Reviewer</span>
                                                    </div>
                                                </div>
                                                <div class="ratings"> <span class="text-yellow fs-16">
                                                              <i class="fas fa-star"></i>
                                                            </span>
                                                                                    <span class="text-yellow fs-16">
                                                              <i class="fas fa-star"></i>
                                                            </span>
                                                                                    <span class="text-yellow fs-16">
                                                              <i class="fas fa-star"></i>
                                                            </span>
                                                                                    <span class="text-yellow fs-16">
                                                              <i class="fas fa-star"></i>
                                                            </span>
                                                                                    <span class="text-yellow fs-16">
                                                              <i class="fas fa-star"></i>
                                                            </span>
                                                </div>
                                                <p class="text-light-black">Delivery was fast and friendly...</p>
                                                <p class="text-light-white fw-100"><strong class="text-light-black fw-700">Local delivery: </strong> From $7.99 (4.0 mi)</p>
                                                <a href="checkout.php" class="btn-second btn-submit">Order Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-wrapper">
                                        <div class="testimonial-box">
                                            <div class="testimonial-img p-relative">
                                                <a href="restaurant.php">
                                                    <img src="assets/img/blog/438x180/shop-2.jpg" class="img-fluid full-width" alt="testimonial-img">
                                                </a>
                                                <div class="overlay">
                                                    <div class="brand-logo">
                                                        <img src="assets/img/user/user-2.png" class="img-fluid" alt="logo">
                                                    </div>
                                                    <div class="add-fav text-success"><img src="assets/img/svg/013-heart-1.svg" alt="tag">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="testimonial-caption padding-15">
                                                <p class="text-light-white text-uppercase no-margin fs-12">Featured</p>
                                                <h5 class="fw-600"><a href="restaurant.php" class="text-light-black">GSA King Tomato Farm</a></h5>
                                                <div class="testimonial-user-box">
                                                    <img src="assets/img/blog-details/40x40/user-2.png" class="rounded-circle" alt="#">
                                                    <div class="testimonial-user-name">
                                                        <p class="text-light-black fw-600">Sarra</p> <i class="fas fa-trophy text-black"></i><span class="text-light-black">Top Reviewer</span>
                                                    </div>
                                                </div>
                                                <div class="ratings"> <span class="text-yellow fs-16">
                                                      <i class="fas fa-star"></i>
                                                    </span>
                                                                            <span class="text-yellow fs-16">
                                                      <i class="fas fa-star"></i>
                                                    </span>
                                                                            <span class="text-yellow fs-16">
                                                      <i class="fas fa-star"></i>
                                                    </span>
                                                                            <span class="text-yellow fs-16">
                                                      <i class="fas fa-star"></i>
                                                    </span>
                                                                            <span class="text-yellow fs-16">
                                                      <i class="fas fa-star"></i>
                                                    </span>
                                                </div>
                                                <p class="text-light-black">Delivery was fast and friendly...</p>
                                                <p class="text-light-white fw-100"><strong class="text-light-black fw-700">Local delivery: </strong> From $7.99 (4.0 mi)</p>
                                                <a href="checkout.php" class="btn-second btn-submit">Order Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-wrapper">
                                        <div class="testimonial-box">
                                            <div class="testimonial-img p-relative">
                                                <a href="restaurant.php">
                                                    <img src="assets/img/blog/438x180/shop-2.jpg" class="img-fluid full-width" alt="testimonial-img">
                                                </a>
                                                <div class="overlay">
                                                    <div class="brand-logo">
                                                        <img src="assets/img/user/user-1.png" class="img-fluid" alt="logo">
                                                    </div>
                                                    <div class="add-fav text-success"><img src="assets/img/svg/013-heart-1.svg" alt="tag">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="testimonial-caption padding-15">
                                                <p class="text-light-white text-uppercase no-margin fs-12">Featured</p>
                                                <h5 class="fw-600"><a href="restaurant.php" class="text-light-black">GSA King Tomato Farm</a></h5>
                                                <div class="testimonial-user-box">
                                                    <img src="assets/img/blog-details/40x40/user-3.png" class="rounded-circle" alt="#">
                                                    <div class="testimonial-user-name">
                                                        <p class="text-light-black fw-600">Sarra</p> <i class="fas fa-trophy text-black"></i><span class="text-light-black">Top Reviewer</span>
                                                    </div>
                                                </div>
                                                <div class="ratings"> <span class="text-yellow fs-16">
                                                  <i class="fas fa-star"></i>
                                                </span>
                                                                        <span class="text-yellow fs-16">
                                                  <i class="fas fa-star"></i>
                                                </span>
                                                                        <span class="text-yellow fs-16">
                                                  <i class="fas fa-star"></i>
                                                </span>
                                                                        <span class="text-yellow fs-16">
                                                  <i class="fas fa-star"></i>
                                                </span>
                                                                        <span class="text-yellow fs-16">
                                                  <i class="fas fa-star"></i>
                                                </span>
                                                </div>
                                                <p class="text-light-black">Delivery was fast and friendly...</p>
                                                <p class="text-light-white fw-100"><strong class="text-light-black fw-700">Local delivery: </strong> From $7.99 (4.0 mi)</p>
                                                <a href="checkout.php" class="btn-second btn-submit">Order Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </aside>
                <div class="col-lg-9 browse-cat border-0">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-header-left">
                                <h3 class="text-light-black header-title title-2">Most popular near you <small><a href="#" class="text-dark-white fw-600">29 restaurant</a></small></h3>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="popular-item-slider swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="restaurant.php" class="categories">
                                            <div class="icon text-custom-white bg-light-green ">
                                                <img src="assets/img/restaurants/125x125/cuisine-11.jpg" class="rounded-circle" alt="categories">
                                            </div> <span class="text-light-black cat-name">Great Burger</span>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="restaurant.php" class="categories">
                                            <div class="icon text-custom-white bg-light-green ">
                                                <img src="assets/img/restaurants/125x125/cuisine-10.jpg" class="rounded-circle" alt="categories">
                                            </div> <span class="text-light-black cat-name">Flavor Town</span>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="restaurant.php" class="categories">
                                            <div class="icon text-custom-white bg-light-green ">
                                                <img src="assets/img/restaurants/125x125/cuisine-9.jpg" class="rounded-circle" alt="categories">
                                            </div> <span class="text-light-black cat-name">Big Bites</span>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="restaurant.php" class="categories">
                                            <div class="icon text-custom-white bg-light-green ">
                                                <img src="assets/img/restaurants/125x125/cuisine-8.jpg" class="rounded-circle" alt="categories">
                                            </div> <span class="text-light-black cat-name">Smile N’ Delight</span>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="restaurant.php" class="categories">
                                            <div class="icon text-custom-white bg-light-green ">
                                                <img src="assets/img/restaurants/125x125/cuisine-7.jpg" class="rounded-circle" alt="categories">
                                            </div> <span class="text-light-black cat-name">Lil Johnny’s</span>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="restaurant.php" class="categories">
                                            <div class="icon text-custom-white bg-light-green ">
                                                <img src="assets/img/restaurants/125x125/cuisine-6.jpg" class="rounded-circle" alt="categories">
                                            </div> <span class="text-light-black cat-name">Choice Foods</span>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="restaurant.php" class="categories">
                                            <div class="icon text-custom-white bg-light-green ">
                                                <img src="assets/img/restaurants/125x125/cuisine-5.jpg" class="rounded-circle" alt="categories">
                                            </div> <span class="text-light-black cat-name">Great Burger</span>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="restaurant.php" class="categories">
                                            <div class="icon text-custom-white bg-light-green ">
                                                <img src="assets/img/restaurants/125x125/cuisine-4.jpg" class="rounded-circle" alt="categories">
                                            </div> <span class="text-light-black cat-name">Flavor Town</span>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="restaurant.php" class="categories">
                                            <div class="icon text-custom-white bg-light-green ">
                                                <img src="assets/img/restaurants/125x125/cuisine-3.jpg" class="rounded-circle" alt="categories">
                                            </div> <span class="text-light-black cat-name">Big Bites</span>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="restaurant.php" class="categories">
                                            <div class="icon text-custom-white bg-light-green ">
                                                <img src="assets/img/restaurants/125x125/cuisine-2.jpg" class="rounded-circle" alt="categories">
                                            </div> <span class="text-light-black cat-name">Smile N’ Delight</span>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="restaurant.php" class="categories">
                                            <div class="icon text-custom-white bg-light-green ">
                                                <img src="assets/img/restaurants/125x125/cuisine-1.jpg" class="rounded-circle" alt="categories">
                                            </div> <span class="text-light-black cat-name">Lil Johnny’s</span>
                                        </a>
                                    </div>
                                </div>
                                <!-- Add Arrows -->
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                            <div class="sort-tag-filter padding-15">
                                <div class="restaurent-tags"> <span class="tags">open now <span class="close">x</span></span> <span class="tags">new <span class="close">x</span></span>
                                </div>
                                <div class="sorting"> <span class="text-dark-white fs-16 fw-600">Sort: </span>
                                    <select>
                    <option>Default</option>
                    <option>Price</option>
                    <option>Rating</option>
                    <option>Distance</option>
                  </select>
                                </div>
                            </div>
                            <div class="product-list-view">
                                <div class="product-list-info">
                                    <div class="product-list-img">
                                        <a href="restaurant.php">
                                            <img src="assets/img/restaurants/90x90/shop-3.jpg" class="img-fluid" alt="#">
                                        </a>
                                    </div>
                                </div>
                                <div class="product-right-col">
                                    <div class="product-list-details">
                                        <div class="product-list-title">
                                            <div class="product-info">
                                                <h6><a href="restaurant.php" class="text-light-black fw-600">Lil Johnny’s</a></h6>
                                                <p class="text-light-white fs-12">American Bagels</p>
                                            </div>
                                        </div>
                                        <div class="product-detail-right-box">
                                            <div class="product-list-rating text-center">
                                                <div class="ratings"> <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                    <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                    <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                    <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                    <span class="text-yellow"><i class="fas fa-star-half-alt"></i></span>
                                                </div>
                                                <div class="rating-text">
                                                    <p class="text-light-white fs-12">3845 ratings</p>
                                                </div>
                                            </div>
                                            <div class="product-list-tags"> <span class="text-custom-white rectangle-tag bg-gradient-red">
                          10%
                        </span>
                                                <span class="rectangle-tag bg-gradient-green text-custom-white">
                          Trending
                        </span>
                                            </div>
                                            <div class="product-price-icon"> <span class="text-success fs-16">$</span>
                                                <span class="text-success fs-16">$</span>
                                                <span class="text-success fs-16">$</span>
                                                <span class="text-success fs-16">$</span>
                                                <span class="text-success fs-16">$</span>
                                            </div>
                                            <div class="product-list-label"> <span class="rectangle-tag bg-gradient-red text-custom-white">Label</span>
                                                <span class="rectangle-tag bg-dark text-custom-white">Combo</span>
                                            </div>
                                            <div class="product-list-price">
                                                <div class="price">
                                                    <h6 class="text-light-black no-margin">$0</h6>
                                                    <span class="text-light-white">Minimum</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-list-bottom">
                                        <div class="product-list-type"> <span class="text-light-white new">New</span>
                                            <span class="text-custom-white square-tag">
                        <img src="assets/img/svg/004-leaf.svg" alt="tag">
                      </span>
                                            <span class="text-custom-white square-tag">
                        <img src="assets/img/svg/006-chili.svg" alt="tag">
                      </span>
                                            <span class="text-custom-white square-tag">
                        <img src="assets/img/svg/005-chef.svg" alt="tag">
                      </span>
                                            <span class="text-custom-white square-tag">
                        <img src="assets/img/svg/008-protein.svg" alt="tag">
                      </span>
                                            <span class="text-custom-white square-tag">
                        <img src="assets/img/svg/009-lemon.svg" alt="tag">
                      </span>
                                        </div>
                                        <div class="mob-tags-label"> <span class="text-custom-white rectangle-tag bg-gradient-red">
                          10%
                        </span>
                                            <span class="rectangle-tag bg-gradient-green text-custom-white">
                        Trending
                      </span>
                                            <span class="rectangle-tag bg-gradient-red text-custom-white">Label</span>
                                            <span class="rectangle-tag bg-dark text-custom-white">Combo</span>
                                        </div>
                                        <div class="product-list-time"> <span class="circle-tag">
                        <img src="assets/img/svg/013-heart-1.svg" alt="tag">
                      </span>
                                            <ul>
                                                <li class="text-light-white">1.18 mi</li>
                                                <li class="text-light-white">30-40 mins</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-list-view">
                                <div class="product-list-info">
                                    <div class="product-list-img">
                                        <a href="restaurant.php">
                                            <img src="assets/img/restaurants/90x90/shop-5.jpg" class="img-fluid" alt="#">
                                        </a>
                                    </div>
                                </div>
                                <div class="product-right-col">
                                    <div class="product-list-details">
                                        <div class="product-list-title">
                                            <div class="product-info">
                                                <h6><a href="restaurant.php" class="text-light-black fw-600">Big Bites</a></h6>
                                                <p class="text-light-white fs-12">American Bagels</p>
                                            </div>
                                        </div>
                                        <div class="product-detail-right-box">
                                            <div class="product-list-rating text-center">
                                                <div class="ratings"> <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                    <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                    <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                    <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                    <span class="text-yellow"><i class="fas fa-star-half-alt"></i></span>
                                                </div>
                                                <div class="rating-text">
                                                    <p class="text-light-white fs-12">3845 ratings</p>
                                                </div>
                                            </div>
                                            <div class="product-list-tags"> <span class="text-custom-white rectangle-tag bg-gradient-red">
                          10%
                        </span>
                                                <span class="rectangle-tag bg-gradient-green text-custom-white">
                          Trending
                        </span>
                                            </div>
                                            <div class="product-price-icon"> <span class="text-success fs-16">$</span>
                                                <span class="text-success fs-16">$</span>
                                                <span class="text-success fs-16">$</span>
                                                <span class="text-success fs-16">$</span>
                                                <span class="text-success fs-16">$</span>
                                            </div>
                                            <div class="product-list-label"> <span class="rectangle-tag bg-gradient-red text-custom-white">Label</span>
                                                <span class="rectangle-tag bg-dark text-custom-white">Combo</span>
                                            </div>
                                            <div class="product-list-price">
                                                <div class="price">
                                                    <h6 class="text-light-black no-margin">$0</h6>
                                                    <span class="text-light-white">Minimum</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-list-bottom">
                                        <div class="product-list-type"> <span class="text-light-white new">New</span>
                                            <span class="text-custom-white square-tag">
                        <img src="assets/img/svg/004-leaf.svg" alt="tag">
                      </span>
                                            <span class="text-custom-white square-tag">
                        <img src="assets/img/svg/006-chili.svg" alt="tag">
                      </span>
                                            <span class="text-custom-white square-tag">
                        <img src="assets/img/svg/005-chef.svg" alt="tag">
                      </span>
                                            <span class="text-custom-white square-tag">
                        <img src="assets/img/svg/008-protein.svg" alt="tag">
                      </span>
                                            <span class="text-custom-white square-tag">
                        <img src="assets/img/svg/009-lemon.svg" alt="tag">
                      </span>
                                        </div>
                                        <div class="mob-tags-label"> <span class="text-custom-white rectangle-tag bg-gradient-red">
                          10%
                        </span>
                                            <span class="rectangle-tag bg-gradient-green text-custom-white">
                        Trending
                      </span>
                                            <span class="rectangle-tag bg-gradient-red text-custom-white">Label</span>
                                            <span class="rectangle-tag bg-dark text-custom-white">Combo</span>
                                        </div>
                                        <div class="product-list-time"> <span class="circle-tag">
                        <img src="assets/img/svg/013-heart-1.svg" alt="tag">
                      </span>
                                            <ul>
                                                <li class="text-light-white">1.18 mi</li>
                                                <li class="text-light-white">30-40 mins</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-list-view mb-xl-20">
                                <div class="product-list-info">
                                    <div class="product-list-img">
                                        <a href="restaurant.php">
                                            <img src="assets/img/restaurants/90x90/shop-6.jpg" class="img-fluid" alt="#">
                                        </a>
                                    </div>
                                </div>
                                <div class="product-right-col">
                                    <div class="product-list-details">
                                        <div class="product-list-title">
                                            <div class="product-info">
                                                <h6><a href="restaurant.php" class="text-light-black fw-600">NewYork Bagels</a></h6>
                                                <p class="text-light-white fs-12">American Bagels</p>
                                            </div>
                                        </div>
                                        <div class="product-detail-right-box">
                                            <div class="product-list-rating text-center">
                                                <div class="ratings"> <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                    <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                    <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                    <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                    <span class="text-yellow"><i class="fas fa-star-half-alt"></i></span>
                                                </div>
                                                <div class="rating-text">
                                                    <p class="text-light-white fs-12">3845 ratings</p>
                                                </div>
                                            </div>
                                            <div class="product-list-tags"> <span class="text-custom-white rectangle-tag bg-gradient-red">
                          10%
                        </span>
                                                <span class="rectangle-tag bg-gradient-green text-custom-white">
                          Trending
                        </span>
                                            </div>
                                            <div class="product-price-icon"> <span class="text-success fs-16">$</span>
                                                <span class="text-success fs-16">$</span>
                                                <span class="text-success fs-16">$</span>
                                                <span class="text-success fs-16">$</span>
                                                <span class="text-success fs-16">$</span>
                                            </div>
                                            <div class="product-list-label"> <span class="rectangle-tag bg-gradient-red text-custom-white">Label</span>
                                                <span class="rectangle-tag bg-dark text-custom-white">Combo</span>
                                            </div>
                                            <div class="product-list-price">
                                                <div class="price">
                                                    <h6 class="text-light-black no-margin">$0</h6>
                                                    <span class="text-light-white">Minimum</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-list-bottom">
                                        <div class="product-list-type"> <span class="text-light-white new">New</span>
                                            <span class="text-custom-white square-tag">
                        <img src="assets/img/svg/004-leaf.svg" alt="tag">
                      </span>
                                            <span class="text-custom-white square-tag">
                        <img src="assets/img/svg/006-chili.svg" alt="tag">
                      </span>
                                            <span class="text-custom-white square-tag">
                        <img src="assets/img/svg/005-chef.svg" alt="tag">
                      </span>
                                            <span class="text-custom-white square-tag">
                        <img src="assets/img/svg/008-protein.svg" alt="tag">
                      </span>
                                            <span class="text-custom-white square-tag">
                        <img src="assets/img/svg/009-lemon.svg" alt="tag">
                      </span>
                                        </div>
                                        <div class="mob-tags-label"> <span class="text-custom-white rectangle-tag bg-gradient-red">
                          10%
                        </span>
                                            <span class="rectangle-tag bg-gradient-green text-custom-white">
                        Trending
                      </span>
                                            <span class="rectangle-tag bg-gradient-red text-custom-white">Label</span>
                                            <span class="rectangle-tag bg-dark text-custom-white">Combo</span>
                                        </div>
                                        <div class="product-list-time"> <span class="circle-tag">
                        <img src="assets/img/svg/013-heart-1.svg" alt="tag">
                      </span>
                                            <ul>
                                                <li class="text-light-white">1.18 mi</li>
                                                <li class="text-light-white">30-40 mins</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="section-header-left">
                                <h3 class="text-light-black header-title title">Offers near you</h3>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="near-offer-slider swiper-container  mb-xl-20">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="product-box">
                                            <div class="product-img">
                                                <a href="restaurant.php">
                                                    <img src="assets/img/restaurants/255x150/shop-1.jpg" class="img-fluid full-width" alt="product-img">
                                                </a>
                                            </div>
                                            <div class="product-caption">
                                                <div class="title-box">
                                                    <h6 class="product-title"><a href="restaurant.php" class="text-light-black"> Great Burger</a></h6>
                                                </div>
                                                <p class="text-light-white">American, Fast Food</p>
                                                <div class="product-details">
                                                    <div class="price-time"> <span class="text-light-black time">30-40 min</span>
                                                        <span class="text-light-white price">$10 min</span>
                                                    </div>
                                                    <div class="rating"> <span>
                              <i class="fas fa-star text-yellow"></i>
                              <i class="fas fa-star text-yellow"></i>
                              <i class="fas fa-star text-yellow"></i>
                              <i class="fas fa-star text-yellow"></i>
                              <i class="fas fa-star text-yellow"></i>
                            </span>
                                                        <span class="text-light-white text-right">4225 ratings</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-footer-2">
                                                <div class="discount"> <span class="text-success fs-12">$3 off</span>
                                                </div>
                                                <div class="discount-coupon"> <span class="text-light-white fs-12">First order only</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-box">
                                            <div class="product-img">
                                                <a href="restaurant.php">
                                                    <img src="assets/img/restaurants/255x150/shop-2.jpg" class="img-fluid full-width" alt="product-img">
                                                </a>
                                            </div>
                                            <div class="product-caption">
                                                <div class="title-box">
                                                    <h6 class="product-title"><a href="restaurant.php" class="text-light-black">Flavor Town</a></h6>
                                                </div>
                                                <p class="text-light-white">Breakfast, Lunch & Dinner</p>
                                                <div class="product-details">
                                                    <div class="price-time"> <span class="text-light-black time">30-40 min</span>
                                                        <span class="text-light-white price">$10 min</span>
                                                    </div>
                                                    <div class="rating"> <span>
                              <i class="fas fa-star text-yellow"></i>
                              <i class="fas fa-star text-yellow"></i>
                              <i class="fas fa-star text-yellow"></i>
                              <i class="fas fa-star text-yellow"></i>
                              <i class="fas fa-star text-yellow"></i>
                            </span>
                                                        <span class="text-light-white text-right">5689 ratings</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-footer-2">
                                                <div class="discount"> <span class="text-success fs-12">$5 off</span>
                                                </div>
                                                <div class="discount-coupon"> <span class="text-light-white fs-12">First order only</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-box">
                                            <div class="product-img">
                                                <a href="restaurant.php">
                                                    <img src="assets/img/restaurants/255x150/shop-3.jpg" class="img-fluid full-width" alt="product-img">
                                                </a>
                                            </div>
                                            <div class="product-caption">
                                                <div class="title-box">
                                                    <h6 class="product-title"><a href="restaurant.php" class="text-light-black">Big Bites</a></h6>
                                                </div>
                                                <p class="text-light-white">Pizzas, Fast Food</p>
                                                <div class="product-details">
                                                    <div class="price-time"> <span class="text-light-black time">30-40 min</span>
                                                        <span class="text-light-white price">$10 min</span>
                                                    </div>
                                                    <div class="rating"> <span>
                              <i class="fas fa-star text-yellow"></i>
                              <i class="fas fa-star text-yellow"></i>
                              <i class="fas fa-star text-yellow"></i>
                              <i class="fas fa-star text-yellow"></i>
                              <i class="fas fa-star text-yellow"></i>
                            </span>
                                                        <span class="text-light-white text-right">8225 ratings</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-footer-2">
                                                <div class="discount"> <span class="text-success fs-12">$3 off</span>
                                                </div>
                                                <div class="discount-coupon"> <span class="text-light-white fs-12">First order only</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-box">
                                            <div class="product-img">
                                                <a href="restaurant.php">
                                                    <img src="assets/img/restaurants/255x150/shop-6.jpg" class="img-fluid full-width" alt="product-img">
                                                </a>
                                            </div>
                                            <div class="product-caption">
                                                <div class="title-box">
                                                    <h6 class="product-title"><a href="restaurant.php" class="text-light-black">Smile N’ Delight</a></h6>
                                                </div>
                                                <p class="text-light-white">Desserts, Beverages</p>
                                                <div class="product-details">
                                                    <div class="price-time"> <span class="text-light-black time">30-40 min</span>
                                                        <span class="text-light-white price">$10 min</span>
                                                    </div>
                                                    <div class="rating"> <span>
                              <i class="fas fa-star text-yellow"></i>
                              <i class="fas fa-star text-yellow"></i>
                              <i class="fas fa-star text-yellow"></i>
                              <i class="fas fa-star text-yellow"></i>
                              <i class="fas fa-star text-yellow"></i>
                            </span>
                                                        <span class="text-light-white text-right">425 ratings</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-footer-2">
                                                <div class="discount"> <span class="text-success fs-12">$5 off</span>
                                                </div>
                                                <div class="discount-coupon"> <span class="text-light-white fs-12">First order only</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-box">
                                            <div class="product-img">
                                                <a href="restaurant.php">
                                                    <img src="assets/img/restaurants/255x150/shop-34.jpg" class="img-fluid full-width" alt="product-img">
                                                </a>
                                            </div>
                                            <div class="product-caption">
                                                <div class="title-box">
                                                    <h6 class="product-title"><a href="restaurant.php" class="text-light-black">Lil Johnny’s</a></h6>
                                                </div>
                                                <p class="text-light-white">Continental & Mexican</p>
                                                <div class="product-details">
                                                    <div class="price-time"> <span class="text-light-black time">30-40 min</span>
                                                        <span class="text-light-white price">$10 min</span>
                                                    </div>
                                                    <div class="rating"> <span>
                              <i class="fas fa-star text-yellow"></i>
                              <i class="fas fa-star text-yellow"></i>
                              <i class="fas fa-star text-yellow"></i>
                              <i class="fas fa-star text-yellow"></i>
                              <i class="fas fa-star text-yellow"></i>
                            </span>
                                                        <span class="text-light-white text-right">4225 ratings</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-footer-2">
                                                <div class="discount"> <span class="text-success fs-12">$3 off</span>
                                                </div>
                                                <div class="discount-coupon"> <span class="text-light-white fs-12">First order only</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-box">
                                            <div class="product-img">
                                                <a href="restaurant.php">
                                                    <img src="assets/img/restaurants/255x150/shop-40.jpg" class="img-fluid full-width" alt="product-img">
                                                </a>
                                            </div>
                                            <div class="product-caption">
                                                <div class="title-box">
                                                    <h6 class="product-title"><a href="restaurant.php" class="text-light-black">Choice Foods</a></h6>
                                                </div>
                                                <p class="text-light-white">Indian, Chinese, Tandoor</p>
                                                <div class="product-details">
                                                    <div class="price-time"> <span class="text-light-black time">30-40 min</span>
                                                        <span class="text-light-white price">$10 min</span>
                                                    </div>
                                                    <div class="rating"> <span>
                              <i class="fas fa-star text-yellow"></i>
                              <i class="fas fa-star text-yellow"></i>
                              <i class="fas fa-star text-yellow"></i>
                              <i class="fas fa-star text-yellow"></i>
                              <i class="fas fa-star text-yellow"></i>
                            </span>
                                                        <span class="text-light-white text-right">4225 ratings</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-footer-2">
                                                <div class="discount"> <span class="text-success fs-12">$3 off</span>
                                                </div>
                                                <div class="discount-coupon"> <span class="text-light-white fs-12">First order only</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Add Arrows -->
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="product-list-view">
                                <div class="product-list-info">
                                    <div class="product-list-img">
                                        <a href="restaurant.php">
                                            <img src="assets/img/restaurants/90x90/shop-6.jpg" class="img-fluid" alt="#">
                                        </a>
                                    </div>
                                </div>
                                <div class="product-right-col">
                                    <div class="product-list-details">
                                        <div class="product-list-title">
                                            <div class="product-info">
                                                <h6><a href="restaurant.php" class="text-light-black fw-600">Sigma Bagels</a></h6>
                                                <p class="text-light-white fs-12">American Bagels</p>
                                            </div>
                                        </div>
                                        <div class="product-detail-right-box">
                                            <div class="product-list-rating text-center">
                                                <div class="ratings"> <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                    <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                    <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                    <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                    <span class="text-yellow"><i class="fas fa-star-half-alt"></i></span>
                                                </div>
                                                <div class="rating-text">
                                                    <p class="text-light-white fs-12">3845 ratings</p>
                                                </div>
                                            </div>
                                            <div class="product-list-tags"> <span class="text-custom-white rectangle-tag bg-gradient-red">
                          10%
                        </span>
                                                <span class="rectangle-tag bg-gradient-green text-custom-white">
                          Trending
                        </span>
                                            </div>
                                            <div class="product-price-icon"> <span class="text-success fs-16">$</span>
                                                <span class="text-success fs-16">$</span>
                                                <span class="text-success fs-16">$</span>
                                                <span class="text-success fs-16">$</span>
                                                <span class="text-success fs-16">$</span>
                                            </div>
                                            <div class="product-list-label"> <span class="rectangle-tag bg-gradient-red text-custom-white">Label</span>
                                                <span class="rectangle-tag bg-dark text-custom-white">Combo</span>
                                            </div>
                                            <div class="product-list-price">
                                                <div class="price">
                                                    <h6 class="text-light-black no-margin">$0</h6>
                                                    <span class="text-light-white">Minimum</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-list-bottom">
                                        <div class="product-list-type"> <span class="text-light-white new">New</span>
                                            <span class="text-custom-white square-tag">
                        <img src="assets/img/svg/004-leaf.svg" alt="tag">
                      </span>
                                            <span class="text-custom-white square-tag">
                        <img src="assets/img/svg/006-chili.svg" alt="tag">
                      </span>
                                            <span class="text-custom-white square-tag">
                        <img src="assets/img/svg/005-chef.svg" alt="tag">
                      </span>
                                            <span class="text-custom-white square-tag">
                        <img src="assets/img/svg/008-protein.svg" alt="tag">
                      </span>
                                            <span class="text-custom-white square-tag">
                        <img src="assets/img/svg/009-lemon.svg" alt="tag">
                      </span>
                                        </div>
                                        <div class="mob-tags-label"> <span class="text-custom-white rectangle-tag bg-gradient-red">
                          10%
                        </span>
                                            <span class="rectangle-tag bg-gradient-green text-custom-white">
                        Trending
                      </span>
                                            <span class="rectangle-tag bg-gradient-red text-custom-white">Label</span>
                                            <span class="rectangle-tag bg-dark text-custom-white">Combo</span>
                                        </div>
                                        <div class="product-list-time"> <span class="circle-tag">
                        <img src="assets/img/svg/013-heart-1.svg" alt="tag">
                      </span>
                                            <ul>
                                                <li class="text-light-white">1.18 mi</li>
                                                <li class="text-light-white">30-40 mins</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-list-view">
                                <div class="product-list-info">
                                    <div class="product-list-img">
                                        <a href="restaurant.php">
                                            <img src="assets/img/restaurants/90x90/shop-1.jpg" class="img-fluid" alt="#">
                                        </a>
                                    </div>
                                </div>
                                <div class="product-right-col">
                                    <div class="product-list-details">
                                        <div class="product-list-title">
                                            <div class="product-info">
                                                <h6><a href="restaurant.php" class="text-light-black fw-600">Sunset Soup</a></h6>
                                                <p class="text-light-white fs-12">American Bagels</p>
                                            </div>
                                        </div>
                                        <div class="product-detail-right-box">
                                            <div class="product-list-rating text-center">
                                                <div class="ratings"> <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                    <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                    <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                    <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                    <span class="text-yellow"><i class="fas fa-star-half-alt"></i></span>
                                                </div>
                                                <div class="rating-text">
                                                    <p class="text-light-white fs-12">3845 ratings</p>
                                                </div>
                                            </div>
                                            <div class="product-list-tags"> <span class="text-custom-white rectangle-tag bg-gradient-red">
                          10%
                        </span>
                                                <span class="rectangle-tag bg-gradient-green text-custom-white">
                          Trending
                        </span>
                                            </div>
                                            <div class="product-price-icon"> <span class="text-success fs-16">$</span>
                                                <span class="text-success fs-16">$</span>
                                                <span class="text-success fs-16">$</span>
                                                <span class="text-success fs-16">$</span>
                                                <span class="text-success fs-16">$</span>
                                            </div>
                                            <div class="product-list-label"> <span class="rectangle-tag bg-gradient-red text-custom-white">Label</span>
                                                <span class="rectangle-tag bg-dark text-custom-white">Combo</span>
                                            </div>
                                            <div class="product-list-price">
                                                <div class="price">
                                                    <h6 class="text-light-black no-margin">$0</h6>
                                                    <span class="text-light-white">Minimum</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-list-bottom">
                                        <div class="product-list-type"> <span class="text-light-white new">New</span>
                                            <span class="text-custom-white square-tag">
                        <img src="assets/img/svg/004-leaf.svg" alt="tag">
                      </span>
                                            <span class="text-custom-white square-tag">
                        <img src="assets/img/svg/006-chili.svg" alt="tag">
                      </span>
                                            <span class="text-custom-white square-tag">
                        <img src="assets/img/svg/005-chef.svg" alt="tag">
                      </span>
                                            <span class="text-custom-white square-tag">
                        <img src="assets/img/svg/008-protein.svg" alt="tag">
                      </span>
                                            <span class="text-custom-white square-tag">
                        <img src="assets/img/svg/009-lemon.svg" alt="tag">
                      </span>
                                        </div>
                                        <div class="mob-tags-label"> <span class="text-custom-white rectangle-tag bg-gradient-red">
                          10%
                        </span>
                                            <span class="rectangle-tag bg-gradient-green text-custom-white">
                        Trending
                      </span>
                                            <span class="rectangle-tag bg-gradient-red text-custom-white">Label</span>
                                            <span class="rectangle-tag bg-dark text-custom-white">Combo</span>
                                        </div>
                                        <div class="product-list-time"> <span class="circle-tag">
                        <img src="assets/img/svg/013-heart-1.svg" alt="tag">
                      </span>
                                            <ul>
                                                <li class="text-light-white">1.18 mi</li>
                                                <li class="text-light-white">30-40 mins</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-list-view">
                                <div class="product-list-info">
                                    <div class="product-list-img">
                                        <a href="restaurant.php">
                                            <img src="assets/img/restaurants/90x90/shop-8.jpg" class="img-fluid" alt="#">
                                        </a>
                                    </div>
                                </div>
                                <div class="product-right-col">
                                    <div class="product-list-details">
                                        <div class="product-list-title">
                                            <div class="product-info">
                                                <h6><a href="restaurant.php" class="text-light-black fw-600">Crispy Chicky</a></h6>
                                                <p class="text-light-white fs-12">American Bagels</p>
                                            </div>
                                        </div>
                                        <div class="product-detail-right-box">
                                            <div class="product-list-rating text-center">
                                                <div class="ratings"> <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                    <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                    <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                    <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                    <span class="text-yellow"><i class="fas fa-star-half-alt"></i></span>
                                                </div>
                                                <div class="rating-text">
                                                    <p class="text-light-white fs-12">3845 ratings</p>
                                                </div>
                                            </div>
                                            <div class="product-list-tags"> <span class="text-custom-white rectangle-tag bg-gradient-red">
                          10%
                        </span>
                                                <span class="rectangle-tag bg-gradient-green text-custom-white">
                          Trending
                        </span>
                                            </div>
                                            <div class="product-price-icon"> <span class="text-success fs-16">$</span>
                                                <span class="text-success fs-16">$</span>
                                                <span class="text-success fs-16">$</span>
                                                <span class="text-success fs-16">$</span>
                                                <span class="text-success fs-16">$</span>
                                            </div>
                                            <div class="product-list-label"> <span class="rectangle-tag bg-gradient-red text-custom-white">Label</span>
                                                <span class="rectangle-tag bg-dark text-custom-white">Combo</span>
                                            </div>
                                            <div class="product-list-price">
                                                <div class="price">
                                                    <h6 class="text-light-black no-margin">$0</h6>
                                                    <span class="text-light-white">Minimum</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-list-bottom">
                                        <div class="product-list-type"> <span class="text-light-white new">New</span>
                                            <span class="text-custom-white square-tag">
                        <img src="assets/img/svg/004-leaf.svg" alt="tag">
                      </span>
                                            <span class="text-custom-white square-tag">
                        <img src="assets/img/svg/006-chili.svg" alt="tag">
                      </span>
                                            <span class="text-custom-white square-tag">
                        <img src="assets/img/svg/005-chef.svg" alt="tag">
                      </span>
                                            <span class="text-custom-white square-tag">
                        <img src="assets/img/svg/008-protein.svg" alt="tag">
                      </span>
                                            <span class="text-custom-white square-tag">
                        <img src="assets/img/svg/009-lemon.svg" alt="tag">
                      </span>
                                        </div>
                                        <div class="mob-tags-label"> <span class="text-custom-white rectangle-tag bg-gradient-red">
                          10%
                        </span>
                                            <span class="rectangle-tag bg-gradient-green text-custom-white">
                        Trending
                      </span>
                                            <span class="rectangle-tag bg-gradient-red text-custom-white">Label</span>
                                            <span class="rectangle-tag bg-dark text-custom-white">Combo</span>
                                        </div>
                                        <div class="product-list-time"> <span class="circle-tag">
                        <img src="assets/img/svg/013-heart-1.svg" alt="tag">
                      </span>
                                            <ul>
                                                <li class="text-light-white">1.18 mi</li>
                                                <li class="text-light-white">30-40 mins</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-list-view">
                                <div class="product-list-info">
                                    <div class="product-list-img">
                                        <a href="restaurant.php">
                                            <img src="assets/img/restaurants/90x90/shop-1.jpg" class="img-fluid" alt="#">
                                        </a>
                                    </div>
                                </div>
                                <div class="product-right-col">
                                    <div class="product-list-details">
                                        <div class="product-list-title">
                                            <div class="product-info">
                                                <h6><a href="restaurant.php" class="text-light-black fw-600">Small Bites</a></h6>
                                                <p class="text-light-white fs-12">American Bagels</p>
                                            </div>
                                        </div>
                                        <div class="product-detail-right-box">
                                            <div class="product-list-rating text-center">
                                                <div class="ratings"> <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                    <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                    <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                    <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                    <span class="text-yellow"><i class="fas fa-star-half-alt"></i></span>
                                                </div>
                                                <div class="rating-text">
                                                    <p class="text-light-white fs-12">3845 ratings</p>
                                                </div>
                                            </div>
                                            <div class="product-list-tags"> <span class="text-custom-white rectangle-tag bg-gradient-red">
                          10%
                        </span>
                                                <span class="rectangle-tag bg-gradient-green text-custom-white">
                          Trending
                        </span>
                                            </div>
                                            <div class="product-price-icon"> <span class="text-success fs-16">$</span>
                                                <span class="text-success fs-16">$</span>
                                                <span class="text-success fs-16">$</span>
                                                <span class="text-success fs-16">$</span>
                                                <span class="text-success fs-16">$</span>
                                            </div>
                                            <div class="product-list-label"> <span class="rectangle-tag bg-gradient-red text-custom-white">Label</span>
                                                <span class="rectangle-tag bg-dark text-custom-white">Combo</span>
                                            </div>
                                            <div class="product-list-price">
                                                <div class="price">
                                                    <h6 class="text-light-black no-margin">$0</h6>
                                                    <span class="text-light-white">Minimum</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-list-bottom">
                                        <div class="product-list-type"> <span class="text-light-white new">New</span>
                                            <span class="text-custom-white square-tag">
                        <img src="assets/img/svg/004-leaf.svg" alt="tag">
                      </span>
                                            <span class="text-custom-white square-tag">
                        <img src="assets/img/svg/006-chili.svg" alt="tag">
                      </span>
                                            <span class="text-custom-white square-tag">
                        <img src="assets/img/svg/005-chef.svg" alt="tag">
                      </span>
                                            <span class="text-custom-white square-tag">
                        <img src="assets/img/svg/008-protein.svg" alt="tag">
                      </span>
                                            <span class="text-custom-white square-tag">
                        <img src="assets/img/svg/009-lemon.svg" alt="tag">
                      </span>
                                        </div>
                                        <div class="mob-tags-label"> <span class="text-custom-white rectangle-tag bg-gradient-red">
                          10%
                        </span>
                                            <span class="rectangle-tag bg-gradient-green text-custom-white">
                        Trending
                      </span>
                                            <span class="rectangle-tag bg-gradient-red text-custom-white">Label</span>
                                            <span class="rectangle-tag bg-dark text-custom-white">Combo</span>
                                        </div>
                                        <div class="product-list-time"> <span class="circle-tag">
                        <img src="assets/img/svg/013-heart-1.svg" alt="tag">
                      </span>
                                            <ul>
                                                <li class="text-light-white">1.18 mi</li>
                                                <li class="text-light-white">30-40 mins</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-list-view">
                                <div class="product-list-info">
                                    <div class="product-list-img">
                                        <a href="restaurant.php">
                                            <img src="assets/img/restaurants/90x90/shop-2.jpg" class="img-fluid" alt="#">
                                        </a>
                                    </div>
                                </div>
                                <div class="product-right-col">
                                    <div class="product-list-details">
                                        <div class="product-list-title">
                                            <div class="product-info">
                                                <h6><a href="restaurant.php" class="text-light-black fw-600">Sunset Pizza</a></h6>
                                                <p class="text-light-white fs-12">American Bagels</p>
                                            </div>
                                        </div>
                                        <div class="product-detail-right-box">
                                            <div class="product-list-rating text-center">
                                                <div class="ratings"> <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                    <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                    <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                    <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                    <span class="text-yellow"><i class="fas fa-star-half-alt"></i></span>
                                                </div>
                                                <div class="rating-text">
                                                    <p class="text-light-white fs-12">3845 ratings</p>
                                                </div>
                                            </div>
                                            <div class="product-list-tags"> <span class="text-custom-white rectangle-tag bg-gradient-red">
                          10%
                        </span>
                                                <span class="rectangle-tag bg-gradient-green text-custom-white">
                          Trending
                        </span>
                                            </div>
                                            <div class="product-price-icon"> <span class="text-success fs-16">$</span>
                                                <span class="text-success fs-16">$</span>
                                                <span class="text-success fs-16">$</span>
                                                <span class="text-success fs-16">$</span>
                                                <span class="text-success fs-16">$</span>
                                            </div>
                                            <div class="product-list-label"> <span class="rectangle-tag bg-gradient-red text-custom-white">Label</span>
                                                <span class="rectangle-tag bg-dark text-custom-white">Combo</span>
                                            </div>
                                            <div class="product-list-price">
                                                <div class="price">
                                                    <h6 class="text-light-black no-margin">$0</h6>
                                                    <span class="text-light-white">Minimum</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-list-bottom">
                                        <div class="product-list-type"> <span class="text-light-white new">New</span>
                                            <span class="text-custom-white square-tag">
                        <img src="assets/img/svg/004-leaf.svg" alt="tag">
                      </span>
                                            <span class="text-custom-white square-tag">
                        <img src="assets/img/svg/006-chili.svg" alt="tag">
                      </span>
                                            <span class="text-custom-white square-tag">
                        <img src="assets/img/svg/005-chef.svg" alt="tag">
                      </span>
                                            <span class="text-custom-white square-tag">
                        <img src="assets/img/svg/008-protein.svg" alt="tag">
                      </span>
                                            <span class="text-custom-white square-tag">
                        <img src="assets/img/svg/009-lemon.svg" alt="tag">
                      </span>
                                        </div>
                                        <div class="mob-tags-label"> <span class="text-custom-white rectangle-tag bg-gradient-red">
                          10%
                        </span>
                                            <span class="rectangle-tag bg-gradient-green text-custom-white">
                        Trending
                      </span>
                                            <span class="rectangle-tag bg-gradient-red text-custom-white">Label</span>
                                            <span class="rectangle-tag bg-dark text-custom-white">Combo</span>
                                        </div>
                                        <div class="product-list-time"> <span class="circle-tag">
                        <img src="assets/img/svg/013-heart-1.svg" alt="tag">
                      </span>
                                            <ul>
                                                <li class="text-light-white">1.18 mi</li>
                                                <li class="text-light-white">30-40 mins</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-pagination">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous"> <span aria-hidden="true">&laquo;</span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">2</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next"> <span aria-hidden="true">&raquo;</span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Browse by category -->
        <!-- footer -->
    <div class="footer-top section-padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 col-sm-4 col-6 mb-sm-20">
                    <div class="icon-box"> <span class="text-light-green"><i class="flaticon-credit-card-1"></i></span>
                        <span class="text-light-black">100% Payment<br>Secured</span>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-6 mb-sm-20">
                    <div class="icon-box"> <span class="text-light-green"><i class="flaticon-wallet-1"></i></span>
                        <span class="text-light-black">Support lots<br> of Payments</span>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-6 mb-sm-20">
                    <div class="icon-box"> <span class="text-light-green"><i class="flaticon-help"></i></span>
                        <span class="text-light-black">24 hours / 7 days<br>Support</span>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-6">
                    <div class="icon-box"> <span class="text-light-green"><i class="flaticon-truck"></i></span>
                        <span class="text-light-black">Free Delivery<br>with $50</span>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-6">
                    <div class="icon-box"> <span class="text-light-green"><i class="flaticon-guarantee"></i></span>
                        <span class="text-light-black">Best Price<br>Guaranteed</span>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-6">
                    <div class="icon-box"> <span class="text-light-green"><i class="flaticon-app-file-symbol"></i></span>
                        <span class="text-light-black">Mobile Apps<br>Ready</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
include("footer.php");
?>