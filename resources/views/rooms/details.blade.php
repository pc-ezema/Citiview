@extends('layouts.frontend')

@section('page-content')
<!-- Breadcrumb -->
@includeIf('layouts.breadcrumb', ['title' => 'Room Details', 'subtitle' => 'Rooms'])
<!-- Breadcrumb Ends -->

<!-- Rooms detail section start -->
<div class="content-area-15 rooms-detail-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-xs-12">
                <div class="rooms-detail-info">
                    <!-- Heading courses start -->
                    <div class="heading-rooms  clearfix">
                        <div class="pull-left">
                            <h3>Super Deluxe Room</h3>
                            <p>
                                <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                            </p>
                        </div>
                        <div class="pull-right">
                            <h3><span>$260.00</span></h3>
                            <h5>Per Manth</h5>
                        </div>
                    </div>
                    <!-- Heading courses end -->

                    <!-- sidebar start -->
                    <div class="rooms-detail-slider">
                        <!--  Rooms detail slider start -->
                        <div class="rooms-detail-slider mb-40">
                            <div class="slider slider-for">
                                <div><img src="{{URL::asset('img/room/img-2.jpg')}}" class="w-100 img-fluid" alt="photo"></div>
                            </div>
                        </div>
                        <!-- Rooms detail slider end -->

                        <!-- Rooms description start -->
                        <div class="tabbing tabbing-box rooms-description">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Description</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Amenities</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">House Rules</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="contact-tab-5" data-bs-toggle="tab" data-bs-target="#contact-5" type="button" role="tab" aria-controls="contact-5" aria-selected="false">Pricing Plans</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="contact-tab-6" data-bs-toggle="tab" data-bs-target="#contact-6" type="button" role="tab" aria-controls="contact-6" aria-selected="false">Cancellation</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="contact-tab-4" data-bs-toggle="tab" data-bs-target="#contact-4" type="button" role="tab" aria-controls="contact-4" aria-selected="false">Extra Service</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active mb-50" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="accordion accordion-flush" id="accordionFlushExample7">
                                        <div class="accordion-item">
                                            <div class="rooms-description mb-50">
                                                <!-- Title -->
                                                <h3>Rooms Description</h3>
                                                <!-- paragraph -->
                                                <p>Lorem ipsum dolor sit amet, conser adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a conser nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed
                                                    tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra a. Aliquam pellentesque nibh et nibh feugiat gravida. Maecenas ultricies, diam vitae semper placerat, velit risus accumsan nisl, eget tempor lacus est vel nunc. Proin accumsan elit sed neque euismod
                                                    fringilla. Curabitur lobortis nunc velit,</p>
                                             </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade mb-30" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="accordion accordion-flush" id="accordionFlushExample2">
                                        <div class="accordion-item">
                                            <!-- Amenities start -->
                                            <div class="amenities">
                                                <h3>Amenities</h3>
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                                        <ul class="condition">
                                                            <li>
                                                                <i class="flaticon-air-conditioning"></i>Air conditioning
                                                            </li>
                                                            <li>
                                                                <i class="flaticon-balcony-and-door"></i>Balcony
                                                            </li>
                                                            <li>
                                                                <i class="flaticon-weightlifting"></i>Gym
                                                            </li>
                                                            <li>
                                                                <i class="flaticon-parking"></i>Parking
                                                            </li>
                                                            <li>
                                                                <i class="flaticon-sunbed"></i>Beach View
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                                        <ul class="condition">
                                                            <li>
                                                                <i class="flaticon-bed"></i>2 Bedroom
                                                            </li>
                                                            <li>
                                                                <i class="flaticon-person-learning-by-reading"></i>Free Newspaper
                                                            </li>
                                                            <li>
                                                                <i class="flaticon-swimming-silhouette"></i>Use of pool
                                                            </li>
                                                            <li>
                                                                <i class="flaticon-graph-line-screen"></i>TV
                                                            </li>
                                                            <li>
                                                                <i class="flaticon-no-smoking-sign"></i>No Smoking
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                                        <ul class="condition">
                                                            <li>
                                                                <i class="flaticon-room-service"></i>Room Service
                                                            </li>
                                                            <li>
                                                                <i class="flaticon-breakfast"></i>Breakfast
                                                            </li>
                                                            <li>
                                                                <i class="flaticon-phone-receiver"></i>Telephone
                                                            </li>
                                                            <li>
                                                                <i class="flaticon-bed"></i>2 Bedroom
                                                            </li>
                                                            <li>
                                                                <i class="flaticon-wifi-connection-signal-symbol"></i>Free Wi-Fi
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Amenities end -->
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade mb-50" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                    <div class="accordion accordion-flush" id="accordionFlushExample3">
                                        <div class="accordion-item">
                                            <!-- House reles start -->
                                            <div class="house-rules">
                                                <h3>House Rules</h3>
                                                <ul>
                                                    <li><i class="fa fa-hand-o-right"></i> Check-in: 10:00 AM - 7:00 PM</li>
                                                    <li><i class="fa fa-hand-o-right"></i> Checkout: 11:00 AM</li>
                                                    <li><i class="fa fa-hand-o-right"></i> No smoking</li>
                                                    <li><i class="fa fa-hand-o-right"></i> No pets</li>
                                                    <li><i class="fa fa-hand-o-right"></i> No parties or events</li>
                                                    <li><i class="fa fa-hand-o-right"></i> Lorem ipsum dolor sit amet, conser adipiscing elit. Donec luctus</li>
                                                </ul>
                                            </div>
                                            <!-- House reles end -->
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade mb-50" id="contact-5" role="tabpanel" aria-labelledby="contact-tab-5">
                                    <div class="accordion accordion-flush" id="accordionFlushExample5">
                                        <div class="accordion-item">
                                            <!-- Pricing plans start -->
                                            <div class="pricing-table">
                                                <h3>Pricing Plans</h3>
                                                <table class="table-responsive pricing-wrap">
                                                    <thead>
                                                        <tr>
                                                            <th>Mon</th>
                                                            <th>Tue</th>
                                                            <th>Wed</th>
                                                            <th>Thu</th>
                                                            <th>Fri</th>
                                                            <th>Sat</th>
                                                            <th>Sun</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>$250</td>
                                                            <td>$250</td>
                                                            <td>$250</td>
                                                            <td>$250</td>
                                                            <td>$250</td>
                                                            <td>$250</td>
                                                            <td>$250</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- Pricing plans end -->
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade mb-50" id="contact-6" role="tabpanel" aria-labelledby="contact-tab-6">
                                    <div class="accordion accordion-flush" id="accordionFlushExample6">
                                        <div class="accordion-item">
                                            <!-- Cancellation start  -->
                                            <div class="cancellation">
                                                <h3>Cancellation</h3>
                                                <p>
                                                    Phasellus volutpat neque a tellus venenatis, a euismod augue facilisis. Fusce ut metus
                                                    mattis, consequat metus nec, luctus lectus. Pellentesque orci quis hendrerit sed eu
                                                    dolor. <strong>Cancel up</strong> to <strong>21 days</strong> to get a full refund.
                                                </p>
                                            </div>
                                            <!-- Cancellation end -->
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade mb-50" id="contact-4" role="tabpanel" aria-labelledby="contact-tab-4">
                                    <div class="accordion accordion-flush" id="accordionFlushExample4">
                                        <div class="accordion-item">
                                            <!-- Extra service start  -->
                                            <div class="extra-service">
                                                <h3>Extra Service</h3>
                                                <div class="extra-service-item">
                                                    <p class="tag-item-name">Air Conditioner </p>
                                                    <div class="border-centar"></div>
                                                    <div class="label-items-value"><span class="price">+24$</span>to price per person </div>
                                                </div>
                                                <div class="extra-service-item">
                                                    <p class="tag-item-name">Free Internet </p>
                                                    <div class="border-centar"></div>
                                                    <div class="label-items-value"><span class="price">+14$</span>to price per person </div>
                                                </div>
                                                <div class="extra-service-item">
                                                    <p class="tag-item-name">LCD Television </p>
                                                    <div class="border-centar"></div>
                                                    <div class="label-items-value"><span class="price">+15$</span>to price per person </div>
                                                </div>
                                                <div class="extra-service-item">
                                                    <p class="tag-item-name">Microwave </p>
                                                    <div class="border-centar"></div>
                                                    <div class="label-items-value"><span class="price">+30$</span>to price per person </div>
                                                </div>
                                            </div>
                                            <!-- Extra service end  -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Rooms description end -->
                    </div>
                    <!-- sidebar end -->
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-xs-12">
                <div class="sidebar">
                    <!-- Search area box 3 start -->
                    <div class="sidebar-widget search-area-box-3 clearfix">
                        <h3>Check Availability</h3>
                        <h4 class="price">$260/Night</h4>
                        <div class="search-contents">
                            <form method="GET">
                                <div class="search-your-details">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="btn-default datepicker" placeholder="Check In">
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="btn-default datepicker" placeholder="Check Out">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <select class="selectpicker search-fields" name="room">
                                                    <option>Room</option>
                                                    <option>Single Room</option>
                                                    <option>Double Room</option>
                                                    <option>Deluxe Room</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <select class="selectpicker search-fields" name="beds">
                                                    <option>Beds</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
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
                                        </div>
                                        <div class="col-md-6 col-sm-6">
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
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group mb-0">
                                                <button type="submit" class="btn-md btn-theme btn-4 btn-7 w-100">Book Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Rooms detail section end -->

@endsection
