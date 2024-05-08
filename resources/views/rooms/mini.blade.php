@extends('layouts.frontend')

@section('page-content')
<!-- Breadcrumb -->
@includeIf('layouts.breadcrumb', ['title' => 'Mini Suites Rooms', 'subtitle' => 'Rooms'])
<!-- Breadcrumb Ends -->

<!-- Rooms section start -->
<div class="rooms-section content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row hotel-box-list-2 hbl-2 g-0">
                    <div class="col-xl-4 col-lg-5 col-md-5 col-sm-12">
                        <div class="photo-thumbnail">
                            <div class="photo">
                                <img src="{{URL::asset('img/room/img-10.jpg')}}" alt="photo" class="img-fluid w-100">
                                <a href="rooms-details.html">
                                    <span class="blog-one__plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7 col-md-7 col-sm-12">
                        <div class="detail">
                            <div class="heading clearfix">
                                <h3 class="title">
                                    <a href="rooms-details.html">Mini Suites Room</a>
                                    <span class="price">$567.99/Night</span>
                                </h3>
                            </div>
                            <p>Lorem ipsum dolor sit amet, conser adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a conser nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla.</p>
                            <ul class="fecilities clearfix">
                                <li>
                                    <i class="flaticon-bed"></i>
                                    2 King Beds
                                </li>
                                <li>
                                    <i class="flaticon-room-service"></i>
                                    Room Service
                                </li>
                                <li>
                                    <i class="flaticon-parking"></i>
                                    Parking
                                </li>
                                <li>
                                    <i class="flaticon-breakfast"></i>
                                    Breakfast
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
                                    <i class="flaticon-phone-receiver"></i>
                                    Telephone
                                </li>
                                <li>
                                    <i class="flaticon-wifi-connection-signal-symbol"></i>
                                    Wi-fi
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row hotel-box-list-2 hbl-2 g-0">
                    <div class="col-xl-4 col-lg-5 col-md-5 col-sm-12">
                        <div class="photo-thumbnail">
                            <div class="photo">
                                <img src="{{URL::asset('img/room/img-8.jpg')}}" alt="photo" class="img-fluid w-100">
                                <a href="rooms-details.html">
                                    <span class="blog-one__plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7 col-md-7 col-sm-12">
                        <div class="detail">
                            <div class="heading clearfix">
                                <h3 class="title">
                                    <a href="rooms-details.html">Mini Suites Room</a>
                                    <span class="price">$720.99/Night</span>
                                </h3>
                            </div>
                            <p>Lorem ipsum dolor sit amet, conser adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a conser nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla.</p>
                            <ul class="fecilities clearfix">
                                <li>
                                    <i class="flaticon-bed"></i>
                                    2 King Beds
                                </li>
                                <li>
                                    <i class="flaticon-room-service"></i>
                                    Room Service
                                </li>
                                <li>
                                    <i class="flaticon-parking"></i>
                                    Parking
                                </li>
                                <li>
                                    <i class="flaticon-breakfast"></i>
                                    Breakfast
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
                                    <i class="flaticon-phone-receiver"></i>
                                    Telephone
                                </li>
                                <li>
                                    <i class="flaticon-wifi-connection-signal-symbol"></i>
                                    Wi-fi
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row hotel-box-list-2 hbl-2 g-0">
                    <div class="col-xl-4 col-lg-5 col-md-5 col-sm-12">
                        <div class="photo-thumbnail">
                            <div class="photo">
                                <img src="{{URL::asset('img/room/img-7.jpg')}}" alt="photo" class="img-fluid w-100">
                                <a href="rooms-details.html">
                                    <span class="blog-one__plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7 col-md-7 col-sm-12">
                        <div class="detail">
                            <div class="heading clearfix">
                                <h3 class="title">
                                    <a href="rooms-details.html">Mini Suites Room</a>
                                    <span class="price">$840.99/Night</span>
                                </h3>
                            </div>
                            <p>Lorem ipsum dolor sit amet, conser adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a conser nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla.</p>
                            <ul class="fecilities clearfix">
                                <li>
                                    <i class="flaticon-bed"></i>
                                    2 King Beds
                                </li>
                                <li>
                                    <i class="flaticon-room-service"></i>
                                    Room Service
                                </li>
                                <li>
                                    <i class="flaticon-parking"></i>
                                    Parking
                                </li>
                                <li>
                                    <i class="flaticon-breakfast"></i>
                                    Breakfast
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
                                    <i class="flaticon-phone-receiver"></i>
                                    Telephone
                                </li>
                                <li>
                                    <i class="flaticon-wifi-connection-signal-symbol"></i>
                                    Wi-fi
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row hotel-box-list-2 hbl-2 g-0">
                    <div class="col-xl-4 col-lg-5 col-md-5 col-sm-12">
                        <div class="photo-thumbnail">
                            <div class="photo">
                                <img src="{{URL::asset('img/room/img-9.jpg')}}" alt="photo" class="img-fluid w-100">
                                <a href="rooms-details.html">
                                    <span class="blog-one__plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7 col-md-7 col-sm-12">
                        <div class="detail">
                            <div class="heading clearfix">
                                <h3 class="title">
                                    <a href="rooms-details.html">Mini Suites Room</a>
                                    <span class="price">$435.99/Night</span>
                                </h3>
                            </div>
                            <p>Lorem ipsum dolor sit amet, conser adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a conser nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla.</p>
                            <ul class="fecilities clearfix">
                                <li>
                                    <i class="flaticon-bed"></i>
                                    2 King Beds
                                </li>
                                <li>
                                    <i class="flaticon-room-service"></i>
                                    Room Service
                                </li>
                                <li>
                                    <i class="flaticon-parking"></i>
                                    Parking
                                </li>
                                <li>
                                    <i class="flaticon-breakfast"></i>
                                    Breakfast
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
                                    <i class="flaticon-phone-receiver"></i>
                                    Telephone
                                </li>
                                <li>
                                    <i class="flaticon-wifi-connection-signal-symbol"></i>
                                    Wi-fi
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Rooms  section end -->
@endsection
