@extends('layouts.frontend')

@section('page-content')
<!-- Breadcrumb -->
@includeIf('layouts.breadcrumb', ['title' => 'Booking System', 'subtitle' => 'Booking System'])
<!-- Breadcrumb Ends -->

<!-- Booking flow start -->
<div class="booking-flow content-area-6">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="stepwizard">
                    <div class="stepwizard-row setup-panel">
                        <div class="stepwizard-step col-xs-3">
                            <a href="#step-1" class="btn btn-success btn-circle">
                                <i class="fa fa-folder-o"></i>
                            </a>
                            <h3>Select Room</h3>
                        </div>
                        <div class="stepwizard-step col-xs-3">
                            <a href="#step-2" class="btn btn-default btn-circle">
                                <i class="fa fa-user"></i>
                            </a>
                            <h3>Personal Info</h3>
                        </div>
                        <div class="stepwizard-step col-xs-3">
                            <a href="#step-3" class="btn btn-default btn-circle">
                                <i class="fa fa-cc"></i>
                            </a>
                            <h3>Payment Info</h3>
                        </div>
                        <div class="stepwizard-step col-xs-3">
                            <a href="#step-4" class="btn btn-default btn-circle">
                                <i class="fa fa-check"></i>
                            </a>
                            <h3>Review</h3>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <form method="GET">
                    <div class="panel panel-primary setup-content" id="step-1">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <h3 class="booking-heading-2">Search Your Rooms</h3>
                                    <div class="sidebar">
                                        <!-- Search area box 3 start -->
                                        <div class="search-area-box-3 sidebar-widget mb-30">
                                            <div class="search-contents">
                                                <div class="search-your-details">
                                                    <div class="form-group clearfix">
                                                        <input type="text" class="btn-default datepicker clearfix" placeholder="Check In">
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <input type="text" class="btn-default datepicker clearfix" placeholder="Check Out">
                                                    </div>
                                                    <div class="form-group">
                                                        <select class="selectpicker search-fields" name="room">
                                                            <option>Room</option>
                                                            <option>Single Room</option>
                                                            <option>Double Room</option>
                                                            <option>Deluxe Room</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <select class="selectpicker search-fields" name="adults">
                                                            <option>Adult</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <select class="selectpicker search-fields" name="children">
                                                            <option>Child</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group mb-0">
                                                        <button class="btn-md btn-theme btn-4 btn-7 w-100">Search</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Search area box 3 end -->
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-12 col-sm-12">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h3 class="booking-heading-2">Available Rooms</h3>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="hotel-box">
                                                <!-- Photo thumbnail -->
                                                <div class="photo-thumbnail">
                                                    <div class="photo">
                                                        <img src="img/room/img-1.jpg" alt="photo" class="img-fluid w-100">
                                                        <a href="rooms-details.html">
                                                            <span class="blog-one__plus"></span>
                                                        </a>
                                                    </div>
                                                    <div class="pr">
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-full"></i>
                                                        </div>
                                                        $567.99/Night
                                                    </div>
                                                </div>
                                                <!-- Detail -->
                                                <div class="detail clearfix">
                                                    <h3>
                                                        <a href="rooms-details.html">Luxury Room</a>
                                                    </h3>
                                                    <p class="location">
                                                        <a href="rooms-details.html">
                                                            <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                                        </a>
                                                    </p>
                                                    <div class="fecilities">
                                                        <ul>
                                                            <li>
                                                                <i class="flaticon-bed"></i> Beds
                                                            </li>
                                                            <li>
                                                                <i class="flaticon-air-conditioning"></i>
                                                                AC
                                                            </li>
                                                            <li>
                                                                <i class="flaticon-graph-line-screen"></i>
                                                                TV
                                                            </li>
                                                            <li>
                                                                <i class="flaticon-weightlifting"></i>
                                                                GYM
                                                            </li>
                                                            <li>
                                                                <i class="flaticon-wifi-connection-signal-symbol"></i>
                                                                Wi-fi
                                                            </li>
                                                            <li>
                                                                <i class="flaticon-parking"></i>
                                                                Parking
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hotel-box">
                                                <!-- Photo thumbnail -->
                                                <div class="photo-thumbnail">
                                                    <div class="photo">
                                                        <img src="img/room/img-2.jpg" alt="phot" class="img-fluid w-100">
                                                        <a href="rooms-details.html">
                                                            <span class="blog-one__plus"></span>
                                                        </a>
                                                    </div>
                                                    <div class="pr">
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-full"></i>
                                                        </div>
                                                        $567.99/Night
                                                    </div>
                                                </div>
                                                <!-- Detail -->
                                                <div class="detail clearfix">
                                                    <h3>
                                                        <a href="rooms-details.html">Double Room</a>
                                                    </h3>
                                                    <p class="location">
                                                        <a href="rooms-details.html">
                                                            <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                                        </a>
                                                    </p>
                                                    <div class="fecilities">
                                                        <ul>
                                                            <li>
                                                                <i class="flaticon-bed"></i> Beds
                                                            </li>
                                                            <li>
                                                                <i class="flaticon-air-conditioning"></i>
                                                                AC
                                                            </li>
                                                            <li>
                                                                <i class="flaticon-graph-line-screen"></i>
                                                                TV
                                                            </li>
                                                            <li>
                                                                <i class="flaticon-weightlifting"></i>
                                                                GYM
                                                            </li>
                                                            <li>
                                                                <i class="flaticon-wifi-connection-signal-symbol"></i>
                                                                Wi-fi
                                                            </li>
                                                            <li>
                                                                <i class="flaticon-parking"></i>
                                                                Parking
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="hotel-box">
                                                <!-- Photo thumbnail -->
                                                <div class="photo-thumbnail">
                                                    <div class="photo">
                                                        <img src="img/room/img-4.jpg" alt="photo" class="img-fluid w-100">
                                                        <a href="rooms-details.html">
                                                            <span class="blog-one__plus"></span>
                                                        </a>
                                                    </div>
                                                    <div class="pr">
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-full"></i>
                                                        </div>
                                                        $567.99/Night
                                                    </div>
                                                </div>
                                                <!-- Detail -->
                                                <div class="detail clearfix">
                                                    <h3>
                                                        <a href="rooms-details.html">Single Room</a>
                                                    </h3>
                                                    <p class="location">
                                                        <a href="rooms-details.html">
                                                            <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                                        </a>
                                                    </p>
                                                    <div class="fecilities">
                                                        <ul>
                                                            <li>
                                                                <i class="flaticon-bed"></i> Beds
                                                            </li>
                                                            <li>
                                                                <i class="flaticon-air-conditioning"></i>
                                                                AC
                                                            </li>
                                                            <li>
                                                                <i class="flaticon-graph-line-screen"></i>
                                                                TV
                                                            </li>
                                                            <li>
                                                                <i class="flaticon-weightlifting"></i>
                                                                GYM
                                                            </li>
                                                            <li>
                                                                <i class="flaticon-wifi-connection-signal-symbol"></i>
                                                                Wi-fi
                                                            </li>
                                                            <li>
                                                                <i class="flaticon-parking"></i>
                                                                Parking
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hotel-box">
                                                <!-- Photo thumbnail -->
                                                <div class="photo-thumbnail">
                                                    <div class="photo">
                                                        <img src="img/room/img-3.jpg" alt="photo" class="img-fluid w-100">
                                                        <a href="rooms-details.html">
                                                            <span class="blog-one__plus"></span>
                                                        </a>
                                                    </div>
                                                    <div class="pr">
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-full"></i>
                                                        </div>
                                                        $567.99/Night
                                                    </div>
                                                </div>
                                                <!-- Detail -->
                                                <div class="detail clearfix">
                                                    <h3>
                                                        <a href="rooms-details.html">Double Room</a>
                                                    </h3>
                                                    <p class="location">
                                                        <a href="rooms-details.html">
                                                            <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                                        </a>
                                                    </p>
                                                    <div class="fecilities">
                                                        <ul>
                                                            <li>
                                                                <i class="flaticon-bed"></i> Beds
                                                            </li>
                                                            <li>
                                                                <i class="flaticon-air-conditioning"></i>
                                                                AC
                                                            </li>
                                                            <li>
                                                                <i class="flaticon-graph-line-screen"></i>
                                                                TV
                                                            </li>
                                                            <li>
                                                                <i class="flaticon-weightlifting"></i>
                                                                GYM
                                                            </li>
                                                            <li>
                                                                <i class="flaticon-wifi-connection-signal-symbol"></i>
                                                                Wi-fi
                                                            </li>
                                                            <li>
                                                                <i class="flaticon-parking"></i>
                                                                Parking
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn-md btn-theme btn-4 btn-7 nextBtn pull-right" type="button">Save and continue</button>
                        </div>
                    </div>
                    <div class="panel panel-primary setup-content" id="step-2">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8 col-md-12 col-sm-12">
                                    <h3 class="booking-heading-2 black-color">Personal Info</h3>
                                    <div class="contact-form">
                                        <div class="sidebar-widget">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group firstname">
                                                        <label for="inputfirstname" class="form-label">First Name</label>
                                                        <input type="text" name="first-name" class="form-control" id="inputfirstname" placeholder="First Name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group lastname">
                                                        <label for="inputlastname" class="form-label">Last Name</label>
                                                        <input type="text" name="last-name" class="form-control" id="inputlastname" placeholder="Last Name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group address-line-1">
                                                        <label for="inputaddress-line1" class="form-label">Address Line 1</label>
                                                        <input type="text" name="address-line1" class="form-control" id="inputaddress-line1" placeholder="Address Line 1">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group address-line-2">
                                                        <label for="inputaddress-line2" class="form-label">Address Line 2</label>
                                                        <input type="text" name="address-line2" class="form-control" id="inputaddress-line2" placeholder="Address Line 2">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group address-line-2">
                                                        <label for="inputcity" class="form-label">City</label>
                                                        <input type="text" name="city" class="form-control" id="inputcity" placeholder="City">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group address-line-2">
                                                        <label for="inputcode" class="form-label">Zip/Post Code</label>
                                                        <input type="text" name="code" class="form-control" id="inputcode" placeholder="Zip">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group address-line-2">
                                                        <label for="inputstate" class="form-label">State/Region</label>
                                                        <input type="text" name="state" class="form-control" id="inputstate" placeholder="State">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group country">
                                                        <label>Country</label>
                                                        <select class="selectpicker country search-fields" name="Country">
                                                            <option>county</option>
                                                            <option>United Kingdom</option>
                                                            <option>Canada</option>
                                                            <option>Australia</option>
                                                            <option>France</option>
                                                            <option>Spain</option>
                                                            <option>Brazil</option>
                                                            <option>Bhutan</option>
                                                            <option>Bangladesh</option>
                                                            <option>India</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sidebar-widget sw-2">
                                            <h3 class="booking-heading-2">Account Info</h3>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group phone-number">
                                                        <label for="inputphonenumber" class="form-label">Phone Number</label>
                                                        <input type="text" name="name" class="form-control" id="inputphonenumber" placeholder="Phone Number">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group email">
                                                        <label for="inputemailaddress" class="form-label">Email Address</label>
                                                        <input type="email" name="email" class="form-control" id="inputemailaddress" placeholder="Email Address">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group password">
                                                        <label for="inputpassword" class="form-label">Password</label>
                                                        <input type="password" name="password" class="form-control" id="inputpassword" placeholder="Password">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group re-password">
                                                        <label for="inputre-password" class="form-label">Re-Password</label>
                                                        <input type="password" name="password" class="form-control" id="inputre-password" placeholder="Re-Password">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="checkbox mb-30 clearfix">
                                                        <div class="ez-checkbox pull-left">
                                                            <label>
                                                                <input type="checkbox" class="ez-hide">
                                                                By Sign up you are agree with our <a href="#">terms and condition</a>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <h3 class="booking-heading-2">Booking Details</h3>
                                    <div class="booling-details-box">
                                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                            </div>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="img/room/img-2.jpg" class="d-block w-100" alt="photo">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="img/room/img-5.jpg" class="d-block w-100" alt="photo">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="img/room/img-1.jpg" class="d-block w-100" alt="photo">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <h4><a href="#">Luxury Room</a></h4>
                                            <ul>
                                                <li>
                                                    <span>Check In:</span> october 28, 2021
                                                </li>
                                                <li>
                                                    <span>Check Out:</span> october 29, 2021
                                                </li>
                                                <li>
                                                    <span>Rooms:</span> 3
                                                </li>
                                                <li>
                                                    <span>Adults:</span> 2
                                                </li>
                                                <li>
                                                    <span>Child:</span> 1
                                                </li>
                                            </ul>
                                            <div class="price">
                                                Total:$317.99
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn-md btn-theme btn-4 btn-7 nextBtn pull-left" type="button">Save and continue</button>
                        </div>
                    </div>
                    <div class="panel panel-primary setup-content" id="step-3">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8 col-md-12 col-xs-12">
                                    <h3 class="booking-heading-2 black-color">Billing Address</h3>
                                    <div class="contact-form">
                                        <div class="sidebar-widget">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group firstname">
                                                        <label for="inputfirstname2" class="form-label">First Name</label>
                                                        <input type="text" name="first-name" class="form-control" id="inputfirstname2" placeholder="First Name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group lastname">
                                                        <label for="inputlastname2" class="form-label">Last Name</label>
                                                        <input type="text" name="last-name" class="form-control" id="inputlastname2" placeholder="Last Name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group address-line-1">
                                                        <label for="inputaddress-line3" class="form-label">Address Line 1</label>
                                                        <input type="text" name="address-line1" class="form-control" id="inputaddress-line3" placeholder="Address Line 1">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group address-line-2">
                                                        <label for="inputaddress-line4" class="form-label">Address Line 2</label>
                                                        <input type="text" name="address-line2" class="form-control" id="inputaddress-line4" placeholder="Address Line 2">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group address-line-2">
                                                        <label for="inputcity2" class="form-label">City</label>
                                                        <input type="text" name="city" class="form-control" id="inputcity2" placeholder="City">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group address-line-2">
                                                        <label for="inputcode2" class="form-label">Zip/Post Code</label>
                                                        <input type="text" name="code" class="form-control" id="inputcode2" placeholder="Zip">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group address-line-2">
                                                        <label for="inputstate2" class="form-label">State/Region</label>
                                                        <input type="text" name="state" class="form-control" id="inputstate2" placeholder="State">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group country">
                                                        <label>Country</label>
                                                        <select class="selectpicker country search-fields" name="Country">
                                                            <option>county</option>
                                                            <option>United Kingdom</option>
                                                            <option>Canada</option>
                                                            <option>Australia</option>
                                                            <option>France</option>
                                                            <option>Spain</option>
                                                            <option>Brazil</option>
                                                            <option>Bhutan</option>
                                                            <option>Bangladesh</option>
                                                            <option>India</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sidebar-widget sw-2">
                                            <h3 class="booking-heading-2">Card Info</h3>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group card-number">
                                                        <label for="inputcardnumber" class="form-label">Card Number</label>
                                                        <input type="text" name="card-number" class="form-control" id="inputcardnumber" placeholder="Card Number">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group CVV">
                                                        <label for="inputlastCVV" class="form-label">CVV</label>
                                                        <input type="text" name="last-name" class="form-control" id="inputlastCVV" placeholder="CVV">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group Country">
                                                        <label>Expire</label>
                                                        <select class="selectpicker country search-fields" name="Country">
                                                            <option>Month</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                            <option>9</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group Country">
                                                        <label>Year</label>
                                                        <select class="selectpicker country search-fields" name="Country">
                                                            <option>2021</option>
                                                            <option>2016</option>
                                                            <option>2015</option>
                                                            <option>2014</option>
                                                            <option>2013</option>
                                                            <option>2012</option>
                                                            <option>2011</option>
                                                            <option>2010</option>
                                                            <option>2009</option>
                                                            <option>2008</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12 col-xs-12">
                                    <h3 class="booking-heading-2">Booking Details</h3>
                                    <div class="booling-details-box">
                                        <div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                            </div>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="img/room/img-2.jpg" class="d-block w-100" alt="photo">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="img/room/img-5.jpg" class="d-block w-100" alt="photo">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="img/room/img-1.jpg" class="d-block w-100" alt="photo">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <h4><a href="#">Double Room</a></h4>
                                            <ul>
                                                <li>
                                                    <span>Check In:</span> october 28, 2021
                                                </li>
                                                <li>
                                                    <span>Check Out:</span> october 29, 2021
                                                </li>
                                                <li>
                                                    <span>Rooms:</span> 3
                                                </li>
                                                <li>
                                                    <span>Adults:</span> 2
                                                </li>
                                                <li>
                                                    <span>Child:</span> 1
                                                </li>
                                            </ul>
                                            <div class="your-address">
                                                <strong>Your Address:</strong>
                                                <address>
                                                    <strong>John maikel</strong>
                                                    <br><br>
                                                    Level 13, 2 Elizabeth St, Melbourne
                                                    Victoria 3000
                                                </address>
                                            </div>
                                            <div class="price">
                                                Total:$317.99
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn-md btn-theme btn-4 btn-7 nextBtn pull-left" type="button">Save and continue</button>
                        </div>
                    </div>
                    <div class="panel panel-primary setup-content" id="step-4">
                        <div class="panel-body">
                            <h3 class="booking-heading-2">Booking Details</h3>
                            <div class="row g-0 booling-details-box booling-details-box-2 mb-30">
                                <div class="col-xl-7 col-lg-7 col-md-12">
                                    <div id="carouselExampleCaptions2" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                            <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                            <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        </div>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="img/room/img-1.jpg" alt="photo" class="d-block w-100">
                                                <div class="carousel-caption"></div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="img/room/img-2.jpg" alt="photo" class="d-block w-100">
                                                <div class="carousel-caption"></div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="img/room/img-3.jpg" alt="photo" class="d-block w-100">
                                                <div class="carousel-caption"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-lg-5 col-md-12">
                                    <div class="info">
                                        <h4>Your Payment ID: #30211229</h4>
                                        <ul>
                                            <li>
                                                <span>Check In:</span> october 28, 2021
                                            </li>
                                            <li>
                                                <span>Check Out:</span> october 29, 2021
                                            </li>
                                            <li>
                                                <span>Adults:</span> 2
                                            </li>
                                            <li>
                                                <span>Child:</span> 1
                                            </li>
                                        </ul>
                                        <div class="your-address">
                                            <strong>Your Address:</strong>
                                            <address>
                                                <strong>John maikel</strong>
                                                <br>
                                                Level 13, 2 Elizabeth St, Melbourne
                                                Victoria 3000
                                            </address>
                                        </div>
                                        <div class="price">
                                            Total:$317.99
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="info-2">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra a. Aliquam pellentesque nibh et nibh feugiat gravida. Maecenas ultricies, diam vitae semper placerat, velit risus accumsan nisl, eget tempor lacus est vel</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra a. Aliquam pellentesque nibh et nibh feugiat gravida. Maecenas ultricies, diam vitae semper placerat, velit risus accumsan nisl</p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra a.
                                    <p class="mb-30">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra a. Aliquam pellentesque nibh et nibh feugiat gravida. Maecenas ultricies, diam vitae semper placerat, velit risus accumsan nisl, eget tempor lacus est vel Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra a. Aliquam pellentesque nibh et nibh feugiat gravida. Maecenas ultricies, diam vitae semper placerat, velit risus accumsan nisl Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra a.</p>
                                </div>
                            </div>
                            <button class="btn-md btn-theme btn-4 btn-7 nextBtn pull-right" type="button">confirm booking</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Booking flow end -->

@endsection
