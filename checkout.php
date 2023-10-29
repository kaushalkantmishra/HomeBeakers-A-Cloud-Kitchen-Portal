<?php
include("header.php");
?>
    <section class="final-order section-padding bg-light-theme">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9">
                    <div class="main-box padding-20">
                        <div class="row mb-xl-20">
                            <div class="col-md-6">
                                <div class="section-header-left">
                                    <h3 class="text-light-black header-title fw-700">Review and place order</h3>
                                </div>
                                <h6 class="text-light-black fw-700 fs-14">Review address, payments, and tip to complete your purchase</h6>
                                <h6 class="text-light-black fw-700 mb-2">Your order setting</h6>
                                <p class="text-light-green fw-600">Delivery, ASAP (60-70m)</p>
                                <p class="text-light-white title2 mb-1">Jhon Deo <span><a href="#">Change Details</a></span>
                                </p>
                                <p class="text-light-black fw-600 mb-1">Home</p>
                                <p class="text-light-white mb-1">314 79th st 70 Brooklyn, NY 11209
                                    <br>Cross Street, Rite Aid</p>
                                <p class="text-light-white">(347) 1234567890</p>
                            </div>
                            <div class="col-md-6">
                                <div class="advertisement-img">
                                    <img src="assets/img/checkout.jpg" class="img-fluid full-width" alt="advertisement-img">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="payment-sec">
                                    <div class="section-header-left">
                                        <h3 class="text-light-black header-title">Delivery Instructions</h3>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control form-control-submit" rows="4" placeholder="Delivery Details"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="custom-checkbox">
                      <input type="checkbox" name="#"> <span class="checkmark"></span> Spare me the napkins and plasticware. I'm trying to save the earth.</label>
                                    </div>
                                    <div class="section-header-left">
                                        <h3 class="text-light-black header-title">Payment information</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div id="accordion">
                                                <div class="card">
                                                    <div class="card-header"> <a class="collapsed card-link fw-500 fs-14" data-toggle="collapse" href="#collapseOne">
                              Pay with a Gift Card
                            </a>
                                                    </div>
                                                    <div id="collapseOne" class="collapse" data-parent="#accordion">
                                                        <div class="card-body no-padding payment-option-tab">
                                                            <div class="form-group">
                                                                <div class="credit-card gift-card p-relative">
                                                                    <input type="text" name="#" class="form-control-submit fs-16" value="AC2B76">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header"> <a class="collapsed card-link fw-500 fs-14" data-toggle="collapse" href="#collapseTwo">
                              Add a promo code
                            </a>
                                                    </div>
                                                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                                        <div class="card-body no-padding payment-option-tab">
                                                            <div class="form-group">
                                                                <div class="credit-card promocode p-relative input-group">
                                                                    <input type="text" name="#" class="form-control-submit fs-16" placeholder="AC2B76">
                                                                    <button type="submit" class="btn-second btn-submit ml-1">Apply</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="payment-option-tab">
                                                    <ul class="nav nav-tabs">
                                                        <li class="nav-item"> <a class="nav-link fw-600 active" data-toggle="tab" href="#savecreditcard">Saved credit card</a>
                                                        </li>
                                                        <li class="nav-item"> <a class="nav-link fw-600" data-toggle="tab" href="#newcreditcard">New credit card</a>
                                                        </li>
                                                        <li class="nav-item"> <a class="nav-link fw-600" data-toggle="tab" href="#cash">Cash</a>
                                                        </li>
                                                        <li class="nav-item"> <a class="nav-link fw-600" data-toggle="tab" href="#paypal">PayPal<sup>TM</sup></a>
                                                        </li>
                                                        <li class="nav-item"> <a class="nav-link fw-600" data-toggle="tab" href="#amexcheckout">Amex Express Checkout</a>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content">
                                                        <div class="tab-pane active" id="savecreditcard">
                                                            <div class="form-group">
                                                                <div class="credit-card p-relative">
                                                                    <input type="text" name="#" class="form-control form-control-submit" value="VISA....1877,exp 12/21">
                                                                </div>
                                                            </div>
                                                            <div class="section-header-left">
                                                                <h3 class="text-light-black header-title">Add a tip for your driver</h3>
                                                            </div>
                                                            <div class="driver-tip-sec mb-xl-20">
                                                                <ul class="nav nav-tabs">
                                                                    <li class="nav-item"> <a class="nav-link fw-600 active" data-toggle="tab" href="#savetipcard">Tip with Credit Card</a>
                                                                    </li>
                                                                    <li class="nav-item"> <a class="nav-link fw-600 disabled" data-toggle="tab" href="#cashtip">Tip with Cash</a>
                                                                    </li>
                                                                </ul>
                                                                <div class="tab-content">
                                                                    <div class="tab-pane active" id="savetipcard">
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="tip-percentage">
                                                                                    <form>
                                                                                        <label class="radio-inline text-light-green fw-600">
                                              <input type="radio" name="tip-percentage" checked> <span>15%</span>
                                            </label>
                                                                                        <label class="radio-inline text-light-green fw-600">
                                              <input type="radio" name="tip-percentage"> <span>25%</span>
                                            </label>
                                                                                        <label class="radio-inline text-light-green fw-600">
                                              <input type="radio" name="tip-percentage"> <span>25%</span>
                                            </label>
                                                                                        <label class="radio-inline text-light-green fw-600">
                                              <input type="radio" name="tip-percentage"> <span>30%</span>
                                            </label>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="custom-tip">
                                                                                    <div class="input-group mb-3">
                                                                                        <div class="input-group-prepend"> <span class="input-group-text text-light-green fw-500">Custom tip</span>
                                                                                        </div>
                                                                                        <input type="text" class="form-control form-control-submit" placeholder="Custom tip">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="section-header-left">
                                                                <h3 class="text-light-black header-title">Donate the change</h3>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="custom-checkbox">
                                  <input type="checkbox" name="#"> <span class="checkmark"></span>
                                  Donate $0.77 to No kid Hungry. By checking this box you agree to the Donate the Change <a href="#">Terms of use</a>  <span class="ml-2"><a href="#">Learn More</a></span>
                                </label>
                                                            </div>
                                                            <div class="form-group">
                                                                <button type="submit" class="btn-first green-btn text-custom-white full-width fw-500">Place Your Order</button>
                                                            </div>
                                                            <p class="text-center text-light-black no-margin">By placing your order, you agree to Munchbox's <a href="#">terms of use</a> and <a href="#">privacy agreement</a>
                                                            </p>
                                                        </div>
                                                        <div class="tab-pane fade" id="newcreditcard">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="text-light-white fw-700">Card Number</label>
                                                                        <div class="credit-card card-front p-relative">
                                                                            <input type="text" name="#" class="form-control form-control-submit" placeholder="1234 5678 9101 1234">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="form-group">
                                                                        <label class="text-light-white fw-700">Expires on</label>
                                                                        <input type="text" name="#" class="form-control form-control-submit" placeholder="12/21">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label class="text-light-white fw-700">Security Code</label>
                                                                        <div class="credit-card card-back p-relative">
                                                                            <input type="text" name="#" class="form-control form-control-submit" placeholder="123">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label class="text-light-white fw-700">ZIP Code</label>
                                                                        <input type="text" name="#" class="form-control form-control-submit" placeholder="123456">
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="custom-checkbox">
                                      <input type="checkbox" name="#"> <span class="checkmark"></span>
                                      Save Credit card</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="section-header-left">
                                                                <h3 class="text-light-black header-title">Add a tip for your driver</h3>
                                                            </div>
                                                            <div class="driver-tip-sec mb-xl-20">
                                                                <ul class="nav nav-tabs">
                                                                    <li class="nav-item"> <a class="nav-link fw-600 active" data-toggle="tab" href="#tipnewcard">Tip with Credit Card</a>
                                                                    </li>
                                                                    <li class="nav-item"> <a class="nav-link fw-600 disabled" data-toggle="tab" href="#newcashtip">Tip with Cash</a>
                                                                    </li>
                                                                </ul>
                                                                <div class="tab-content">
                                                                    <div class="tab-pane active" id="tipnewcard">
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="tip-percentage">
                                                                                    <form>
                                                                                        <label class="radio-inline text-light-green fw-600">
                                              <input type="radio" name="tip-percentage" checked> <span>15%</span>
                                            </label>
                                                                                        <label class="radio-inline text-light-green fw-600">
                                              <input type="radio" name="tip-percentage"> <span>25%</span>
                                            </label>
                                                                                        <label class="radio-inline text-light-green fw-600">
                                              <input type="radio" name="tip-percentage"> <span>25%</span>
                                            </label>
                                                                                        <label class="radio-inline text-light-green fw-600">
                                              <input type="radio" name="tip-percentage"> <span>30%</span>
                                            </label>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="custom-tip">
                                                                                    <div class="input-group mb-3">
                                                                                        <div class="input-group-prepend"> <span class="input-group-text text-light-green fw-500">Custom tip</span>
                                                                                        </div>
                                                                                        <input type="text" class="form-control form-control-submit" placeholder="Custom tip">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="section-header-left">
                                                                <h3 class="text-light-black header-title">Donate the change</h3>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="custom-checkbox">
                                  <input type="checkbox" name="#"> <span class="checkmark"></span>
                                  Donate $0.77 to No kid Hungry. By checking this box you agree to the Donate the Change <a href="#">Terms of use</a>  <span class="ml-2"><a href="#">Learn More</a></span>
                                </label>
                                                            </div>
                                                            <div class="form-group">
                                                                <button type="submit" class="btn-first green-btn text-custom-white full-width fw-500">Place Your Order</button>
                                                            </div>
                                                            <p class="text-center text-light-black no-margin">By placing your order, you agree to Munchbox's <a href="#">terms of use</a> and <a href="#">privacy agreement</a>
                                                            </p>
                                                        </div>
                                                        <div class="tab-pane fade" id="cash">
                                                            <p class="text-light-black">Have the cash ready when you receive your order.</p>
                                                            <div class="section-header-left">
                                                                <h3 class="text-light-black header-title">Donate the change</h3>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="custom-checkbox">
                                  <input type="checkbox" name="#"> <span class="checkmark"></span>
                                  Apologies, but you can't donate with the selected payment type</label>
                                                            </div>
                                                            <div class="form-group">
                                                                <button type="submit" class="btn-first green-btn text-custom-white full-width fw-500">Place Your Order</button>
                                                            </div>
                                                            <p class="text-center text-light-black no-margin">By placing your order, you agree to Munchbox's <a href="#">terms of use</a> and <a href="#">privacy agreement</a>
                                                            </p>
                                                        </div>
                                                        <div class="tab-pane fade" id="paypal">
                                                            <p class="text-light-black">Please review your order and make any necessary changes before checking out with PayPal.</p>
                                                            <div class="section-header-left">
                                                                <h3 class="text-light-black header-title">Add a tip for your driver</h3>
                                                            </div>
                                                            <div class="driver-tip-sec mb-xl-20">
                                                                <ul class="nav nav-tabs">
                                                                    <li class="nav-item"> <a class="nav-link fw-600 active" data-toggle="tab" href="#paypaltipcard">Tip with Credit Card</a>
                                                                    </li>
                                                                    <li class="nav-item"> <a class="nav-link fw-600 disabled" data-toggle="tab" href="#paypalcashtip">Tip with Cash</a>
                                                                    </li>
                                                                </ul>
                                                                <div class="tab-content">
                                                                    <div class="tab-pane active" id="paypaltipcard">
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="tip-percentage">
                                                                                    <form>
                                                                                        <label class="radio-inline text-light-green fw-600">
                                              <input type="radio" name="tip-percentage" checked> <span>15%</span>
                                            </label>
                                                                                        <label class="radio-inline text-light-green fw-600">
                                              <input type="radio" name="tip-percentage"> <span>25%</span>
                                            </label>
                                                                                        <label class="radio-inline text-light-green fw-600">
                                              <input type="radio" name="tip-percentage"> <span>25%</span>
                                            </label>
                                                                                        <label class="radio-inline text-light-green fw-600">
                                              <input type="radio" name="tip-percentage"> <span>30%</span>
                                            </label>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="custom-tip">
                                                                                    <div class="input-group mb-3">
                                                                                        <div class="input-group-prepend"> <span class="input-group-text text-light-green fw-500">Custom tip</span>
                                                                                        </div>
                                                                                        <input type="text" class="form-control form-control-submit" placeholder="Custom tip">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="section-header-left">
                                                                <h3 class="text-light-black header-title">Donate the change</h3>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="custom-checkbox">
                                  <input type="checkbox" name="#"> <span class="checkmark"></span>
                                  Donate $0.77 to No kid Hungry. By checking this box you agree to the Donate the Change <a href="#">Terms of use</a>  <span class="ml-2"><a href="#">Learn More</a></span>
                                </label>
                                                            </div>
                                                            <div class="form-group">
                                                                <button type="submit" class="btn-first paypal-btn text-custom-white full-width fw-500">Checkout with
                                  <img src="assets/img/pay-pal.png" alt="image">
                                </button>
                                                            </div>
                                                            <p class="text-center text-light-black no-margin">By placing your order, you agree to Munchbox's <a href="#">terms of use</a> and <a href="#">privacy agreement</a>
                                                            </p>
                                                        </div>
                                                        <div class="tab-pane fade" id="amexcheckout">
                                                            <div class="card">
                                                                <div class="card-header"> <a class="card-link fw-500 fs-14" data-toggle="collapse" href="#saveamex">
                                            Saved Card
                                          </a>
                                                                </div>
                                                                <div id="saveamex" class="collapse show" data-parent="#accordion">
                                                                    <div class="card-body no-padding payment-option-tab">
                                                                        <div class="form-group">
                                                                            <div class="credit-card amex-card-front p-relative">
                                                                                <input type="text" name="#" class="form-control form-control-submit" value="VISA....1877,exp 12/21">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card">
                                                                <div class="card-header"> <a class="collapsed card-link fw-500 fs-14" data-toggle="collapse" href="#newcardamex">
                                            Add New Card
                                          </a>
                                                                </div>
                                                                <div id="newcardamex" class="collapse" data-parent="#accordion">
                                                                    <div class="card-body no-padding payment-option-tab">
                                                                        <div class="row">
                                                                            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                                                                <div class="form-group">
                                                                                    <label class="text-light-white fw-700">Card Number</label>
                                                                                    <div class="credit-card amex-card-front p-relative">
                                                                                        <input type="text" name="#" class="form-control form-control-submit" placeholder="1234 5678 9101 1234">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-2 col-lg-6 col-md-2 col-sm-6">
                                                                                <div class="form-group">
                                                                                    <label class="text-light-white fw-700">Expires on</label>
                                                                                    <input type="text" name="#" class="form-control form-control-submit" placeholder="12/21">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-3 col-lg-6 col-md-3 col-sm-6">
                                                                                <div class="form-group">
                                                                                    <label class="text-light-white fw-700">Security Code</label>
                                                                                    <div class="credit-card amex-card-back p-relative">
                                                                                        <input type="text" name="#" class="form-control form-control-submit" placeholder="123">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-3 col-lg-6 col-md-3 col-sm-6">
                                                                                <div class="form-group">
                                                                                    <label class="text-light-white fw-700">ZIP Code</label>
                                                                                    <input type="text" name="#" class="form-control form-control-submit" placeholder="123456">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12">
                                                                                <div class="form-group">
                                                                                    <label class="custom-checkbox">
                                            <input type="checkbox" name="#"> <span class="checkmark"></span>
                                            Save Credit card</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="section-header-left">
                                                                <h3 class="text-light-black header-title">Add a tip for your driver</h3>
                                                            </div>
                                                            <div class="driver-tip-sec mb-xl-20">
                                                                <ul class="nav nav-tabs">
                                                                    <li class="nav-item"> <a class="nav-link fw-600 active" data-toggle="tab" href="#tipcard">Tip with Credit Card</a>
                                                                    </li>
                                                                    <li class="nav-item"> <a class="nav-link fw-600 disabled" data-toggle="tab" href="#cashtip">Tip with Cash</a>
                                                                    </li>
                                                                </ul>
                                                                <div class="tab-content">
                                                                    <div class="tab-pane active" id="tipcard">
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="tip-percentage">
                                                                                    <form>
                                                                                        <label class="radio-inline text-light-green fw-600">
                                              <input type="radio" name="tip-percentage" checked> <span>15%</span>
                                            </label>
                                                                                        <label class="radio-inline text-light-green fw-600">
                                              <input type="radio" name="tip-percentage"> <span>25%</span>
                                            </label>
                                                                                        <label class="radio-inline text-light-green fw-600">
                                              <input type="radio" name="tip-percentage"> <span>25%</span>
                                            </label>
                                                                                        <label class="radio-inline text-light-green fw-600">
                                              <input type="radio" name="tip-percentage"> <span>30%</span>
                                            </label>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="custom-tip">
                                                                                    <div class="input-group mb-3">
                                                                                        <div class="input-group-prepend"> <span class="input-group-text text-light-green fw-500">Custom tip</span>
                                                                                        </div>
                                                                                        <input type="text" class="form-control form-control-submit" placeholder="Custom tip">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="section-header-left">
                                                                <h3 class="text-light-black header-title">Donate the change</h3>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="custom-checkbox">
                                  <input type="checkbox" name="#"> <span class="checkmark"></span>
                                  Donate $0.77 to No kid Hungry. By checking this box you agree to the Donate the Change <a href="#">Terms of use</a>  <span class="ml-2"><a href="#">Learn More</a></span>
                                </label>
                                                            </div>
                                                            <div class="form-group">
                                                                <button type="submit" class="btn-first green-btn text-custom-white full-width fw-500">Place Your Order</button>
                                                            </div>
                                                            <p class="text-center text-light-black no-margin">By placing your order, you agree to Munchbox's <a href="#">terms of use</a> and <a href="#">privacy agreement</a>
                                                            </p>
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
                <div class="col-lg-3">
                    <div class="sidebar">
                        <div class="cart-detail-box">
                            <div class="card">
                                <div class="card-header padding-15 fw-700">Your order from
                                    <p class="text-light-white no-margin fw-500">Jhon Deo</p>
                                </div>
                                <div class="card-body no-padding" id="scrollstyle-4">
                                    <div class="cat-product-box">
                                        <div class="cat-product">
                                            <div class="cat-name">
                                                <a href="#">
                                                    <p class="text-light-green fw-700"><span class="text-dark-white">1</span> Chilli Chicken Pizza</p> <span class="text-light-white fw-700">small, chilli chicken</span>
                                                </a>
                                            </div>
                                            <div class="delete-btn">
                                                <a href="#" class="text-dark-white"> <i class="far fa-trash-alt"></i>
                                                </a>
                                            </div>
                                            <div class="price"> <a href="#" class="text-dark-white fw-500">
                          $2.25
                        </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cat-product-box">
                                        <div class="cat-product">
                                            <div class="cat-name">
                                                <a href="#">
                                                    <p class="text-light-green fw-700"><span class="text-dark-white">1</span> Chilli Chicken Pizza</p> <span class="text-light-white fw-700">small, chilli chicken</span>
                                                </a>
                                            </div>
                                            <div class="delete-btn">
                                                <a href="#" class="text-dark-white"> <i class="far fa-trash-alt"></i>
                                                </a>
                                            </div>
                                            <div class="price"> <a href="#" class="text-dark-white fw-500">
                          $2.25
                        </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-total">
                                        <div class="total-price border-0 pb-0"> <span class="text-dark-white fw-600">Items subtotal:</span>
                                            <span class="text-dark-white fw-600">$8.50</span>
                                        </div>
                                        <div class="total-price border-0 pt-0 pb-0"> <span class="text-light-green fw-600">Delivery fee:</span>
                                            <span class="text-light-green fw-600">Free</span>
                                        </div>
                                        <div class="total-price border-0 pt-0 pb-0"> <span class="text-dark-white fw-600">Sales tax:</span>
                                            <span class="text-dark-white fw-600">$1.50</span>
                                        </div>
                                        <div class="total-price border-0 pt-0 pb-0"> <span class="text-dark-white fw-600">Tip:</span>
                                            <span class="text-dark-white fw-600">$1.50</span>
                                        </div>
                                        <div class="total-price border-0 "> <span class="text-light-black fw-700">Total:</span>
                                            <span class="text-light-black fw-700">$18.50</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer p-0 modify-order">
                                    <button class="text-custom-white full-width fw-500 bg-light-green"><i class="fas fa-chevron-left mr-2"></i> Modify Your Order</button>
                                    <a href="#" class="total-amount"> <span class="text-custom-white fw-700">TOTAL</span>
                                        <span class="text-custom-white fw-700">$18.50</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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