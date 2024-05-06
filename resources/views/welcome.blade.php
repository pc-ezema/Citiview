@extends('layouts.frontend')

@section('page-content')
<!-- Banner start -->
<div class="banner" id="banner-2">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item item active">
                <img class="d-block w-100 h-100" src="img/banner/img-1.jpg" alt="banner">
                <div class="carousel-caption banner-slider-inner d-flex h-100">
                    <div class="carousel-content container align-self-center">
                        <div class="row bti-section">
                            <div class="col-lg-7 col-md-12 align-self-center">
                                <div class="banner-test-info wow fadeInLeft delay-04s">
                                    <h2>Welcome To {{config('app.name')}}</h2>
                                    <p>Discover Unmatched Hospitality: Book Your Stay Today!</p>
                                    <a class="btn-lg btn-4 btn-6" href="{{route('bookings')}}">Book Now</a>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-12 wow fadeInRight delay-04s">
                                <div class="search-area-box-2">
                                    <div class="search-contents">
                                        <form method="GET">
                                            <h4>Search Your <span>Rooms</span></h4>
                                            <div class="form-group">
                                                <input type="text" class="btn-default datepicker" placeholder="Check In">
                                            </div>
                                            <div class="form-group clearfix">
                                                <input type="text" class="btn-default datepicker" placeholder="Check Out">
                                            </div>
                                            <div class="form-group clearfix">
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
                                                <button class="w-100 btn-theme btn-4 btn-7">Search</button>
                                            </div>
                                        </form>
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
<!-- Banner end -->

<!-- Search area box 1 start -->
<div class="search-area-box-1 search-area-box-12">
    <div class="container">
        <div class="search-contents">
            <form method="GET">
                <div class="row g-0 search-your-details">
                    <div class="col-lg-3 col-md-12 align-self-center">
                        <div class="search-your-rooms">
                            <h4>Search</h4>
                            <h3 class="room-header">Your <span>Rooms</span></h3>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-12 col-pad-0">
                                <div class="form-group">
                                    <input type="text" class="btn-default datepicker" placeholder="Check In">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12 col-pad-0">
                                <div class="form-group">
                                    <input type="text" class="btn-default datepicker" placeholder="Check Out">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12 col-pad-0">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="room">
                                        <option>Room</option>
                                        <option>Single Room</option>
                                        <option>Double Room</option>
                                        <option>Deluxe Room</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12 col-pad-0">
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
                            <div class="col-md-4 col-sm-6 col-12 col-pad-0">
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
                            <div class="col-md-4 col-sm-6 col-12 col-pad-0">
                                <div class="form-group">
                                    <button class="btn-md btn-theme btn-4 btn-7 w-100">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Search area box 1 end -->

<!-- About {{config('app.name')}} start -->
<div class="about-hotel-alpha content-area-6">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 wow fadeInLeft delay-04s">
                <div class="about-img-section">
                    <div class="image-box">
                        <div class="image-1"><img src="img/about/img-4.jpg" class="rounded" alt="photo"></div>
                        <div class="image-2"><img src="img/about/img-5.jpg" class="rounded" alt="photo"></div>
                    </div>
                    <div class="about-box-Experience">
                        <h3 class="text-white">1</h3>
                        <p class="mb-0 text-white">Year of Experience</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 wow fadeInRight delay-04s align-self-center">
                <div class="about-content-section">
                    <h5>{{config('app.name')}}</h5>
                    <h1>Welcome To {{config('app.name')}}</h1>
                    <ul class="network-list mb-40">
                        <li>
                            <i class="icon fa fa-building-o"></i>
                            <h4>Modern Comfort and Comfortable Rooms</h4>
                            <p>Indulge in a Seamless Fusion of Modern Comfort and Tranquil Ambiance, Providing a Haven in Every Room for Your Ultimate Relaxation and Enjoyment</p>
                        </li>
                        <li>
                            <i class="icon flaticon-room-service"></i>
                            <h4>Affordable Rates with Exceptional Service</h4>
                            <p>Embark on a Budget-Friendly Journey Coupled with Impeccable Service, Elevating Your Stay with Unmatched Value and Hospitality.</p>
                        </li>
                        <li>
                            <i class="icon flaticon-school-call-phone-reception"></i>
                            <h4>Ensuring Public Safety with 24/7 Security</h4>
                            <p>Experience Uncompromised Safety with Our Rigorous Public Safety Measures and Round-the-Clock Security, Ensuring a Secure and Peaceful Environment Throughout Your Visit.</p>
                        </li>
                    </ul>
                    <a class="btn-lg btn-5" href="{{route('about')}}"><span>Explore More</span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About {{config('app.name')}} start -->

<!-- Hotel section start -->
<div class="content-area hotel-section bg-grey">
    <div class="overlay">
        <div class="container">
            <!-- Main title -->
            <div class="main-title">
                <h1>Our Best Rooms</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
            </div>
            <div class="row wow fadeInUp delay-04s">
                <div class="col-lg-4 col-md-6 col-sm-12">
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
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
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
                <div class="col-lg-4 col-md-6 col-sm-12">
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
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
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
                                <a href="rooms-details.html">Single Room </a>
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
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="hotel-box">
                        <!-- Photo thumbnail -->
                        <div class="photo-thumbnail">
                            <div class="photo">
                                <img src="img/room/img-5.jpg" alt="photo" class="img-fluid w-100">
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
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="hotel-box">
                        <!-- Photo thumbnail -->
                        <div class="photo-thumbnail">
                            <div class="photo">
                                <img src="img/room/img-6.jpg" alt="photo" class="img-fluid w-100">
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
</div>
<!-- Hotel section end -->

<!-- Our facilties section start -->
<div class="our-facilties-section content-area-5">
    <div class="overlay">
        <div class="container">
            <!-- Main title -->
            <div class="main-title">
                <h1>Our Facilties</h1>
                <p>Indulge in Luxury: Explore Our Premium Facilities</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInLeft delay-04s">
                    <div class="services-box-2 d-flex">
                        <div class="icon">
                            <i class="flaticon-school-call-phone-reception"></i>
                        </div>
                        <div class="contant">
                            <h3><a href="#">24-hour Reception</a></h3>
                            <p>Seamless Service Day and Night: Our 24-Hour Reception Ensures Your Comfort Anytime.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInRight delay-04s">
                    <div class="services-box-2 d-flex">
                        <div class="icon">
                            <i class="flaticon-graph-line-screen"></i>
                        </div>
                        <div class="contant">
                            <h3><a href="#">Flat Screen TV</a></h3>
                            <p>Entertainment Elevated: Enjoy Your Favorite Shows on High-Definition Flat Screen TVs.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInLeft delay-04s">
                    <div class="services-box-2 d-flex">
                        <div class="icon">
                            <i class="flaticon-weightlifting"></i>
                        </div>
                        <div class="contant">
                            <h3><a href="#">Gym & Pool</a></h3>
                            <p>Fitness and Refreshment at Your Fingertips: Dive into Luxury with Our Gym & Pool Amenities.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp delay-04s">
                    <div class="services-box-2 d-flex">
                        <div class="icon">
                            <i class="flaticon-room-service"></i>
                        </div>
                        <div class="contant">
                            <h3><a href="#">Room Service</a></h3>
                            <p>Indulge in Luxury: Experience Personalized Room Service for Ultimate Comfort.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp delay-04s">
                    <div class="services-box-2 d-flex">
                        <div class="icon">
                            <i class="flaticon-parking"></i>
                        </div>
                        <div class="contant">
                            <h3><a href="#">Free Parking</a></h3>
                            <p>Convenience at Your Fingertips: Enjoy Complimentary Parking During Your Stay.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInRight delay-04s">
                    <div class="services-box-2 d-flex">
                        <div class="icon">
                            <i class="flaticon-balcony-and-door"></i>
                        </div>
                        <div class="contant">
                            <h3><a href="#">Event Center</a></h3>
                            <p>Event Excellence: Unmatched Spaces for Memorable Gatherings.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Our facilties section end -->

<!-- News popular testimonials start -->
<div class="news-popular-testimonials-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 wow fadeInUp delay-04s">
                <!-- Main title -->
                <div class="main-title">
                    <h1>Testimonials</h1>
                </div>
                <!-- Testimonial 3 start -->
                <div class="testimonials-3">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="item-inner">
                                                <p>Staying at this hotel was an unforgettable experience! From the warm welcome at check-in to the impeccable room service, every aspect of my stay exceeded expectations.
                                                    The room was spacious, clean, and beautifully decorated, providing a comfortable retreat after a busy day of exploring the city.
                                                    The hotel's amenities, including the fitness center and pool, were top-notch and added to the overall enjoyment of my stay. I highly recommend this hotel to anyone looking for a luxurious and memorable experience in Ibadan.</p>
                                                <div class="author-name">
                                                   Mr. Adeoluwa Babatunde Adekunle
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="item-inner">
                                                <p>During my recent stay at this hotel, I was impressed by the exceptional service and attention to detail.
                                                    The staff went above and beyond to ensure my comfort and satisfaction, from accommodating special requests to providing valuable local recommendations.
                                                    The room was tastefully designed with modern amenities, creating a cozy and relaxing environment.
                                                    The hotel's central location made it convenient to explore nearby attractions and restaurants.
                                                    Overall, my experience was nothing short of fantastic, and I look forward to returning in the future.</p>
                                                <div class="author-name">
                                                    Mr. Abdullahi Sani Ibrahim
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="item-inner">
                                                <p>"Staying at this hotel was an absolute pleasure. From the moment I arrived, I was greeted with warmth and professionalism. The facilities were top-notch, offering a range of amenities that catered to every need. Whether it was enjoying a delicious meal at the restaurant, or taking a dip in the pool, every experience was nothing short of delightful.
                                                    The room was spacious, clean, and thoughtfully designed, providing a comfortable retreat after a day of exploring. The staff's hospitality and attention to detail truly made my stay memorable, and I wouldn't hesitate to recommend this hotel to anyone seeking a luxurious and enjoyable experience</p>
                                                <div class="author-name">
                                                    Miss Ngozi Chioma Onyeka
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Testimonial 3 end -->
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 wow fadeInRight delay-04s">
                <div class="gallery-section">
                    <!-- Main title -->
                    <div class="main-title">
                        <h1>Popular Places</h1>
                    </div>
                    <!-- Popular places section start -->
                    <div class="popular-places-section">
                        <div id="carouselExampleFade2" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="popular-places-item">
                                        <div class="property-inner">
                                            <div class="photo-overflow">
                                                <div class="property-photo">
                                                    <img class="img-fluid w-100" src="{{URL::asset('img/popular-places/Nigerian-Breweries.jpg')}}" alt="popular-places">
                                                </div>
                                            </div>
                                            <div class="ling-section">
                                                <h3>
                                                    <a href="">Nigeria Breweries</a>
                                                </h3>
                                                <!-- <p class="text">Lorem ipsum dolor sit amet, conser adipisicing elit. Numquam deleniti amet quia voluptate</p> -->
                                                <!-- <a href="" class="read-more-btn">Read More</a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade2" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true">
                                    <i class="fa fa-angle-left"></i>
                                </span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade2" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true">
                                     <i class="fa fa-angle-right"></i>
                                </span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <!-- Popular places section end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- News popular testimonials end -->

<!-- Counters strat -->
<div class="counters-4">
    <div class="container">
        <div class="row">
            <div class="left align-self-center wow fadeInLeft delay-04s">
                <!-- Main title -->
                <div class="main-title main-title-4">
                    <h1>Hotel Statistics</h1>
                    <p>Unlocking Hotel Success: Delving into Key Statistics and Performance Metrics</p>
                </div>
            </div>
            <div class="right float-end wow fadeInRight delay-04s">
                <div class="counter-inner">
                    <div class="counter-box blue ml-0">
                        <h1 class="counter">120</h1>
                        <h5>Guest Rate</h5>
                    </div>
                    <div class="counter-box">
                        <h1 class="counter">100</h1>
                        <h5>Drirect Bookings</h5>
                    </div>
                    <div class="counter-box green">
                        <h1 class="counter">100</h1>
                        <h5>Employee Satisfaction:</h5>
                    </div>
                    <div class="counter-box cgreen">
                        <h1 class="counter">1756</h1>
                        <h5>Meals Served</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Counters strat -->

@endsection
