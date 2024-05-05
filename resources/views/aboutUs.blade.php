@extends('layouts.frontend')

@section('page-content')
<!-- Breadcrumb -->
@includeIf('layouts.breadcrumb', ['title' => 'About Us', 'subtitle' => 'About Us'])
<!-- Breadcrumb Ends -->

<!-- About hotel alpha 3 start -->
<div class="about-hotel-alpha-3 content-area-6 bg-grey-3">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center">
                    <div class="about-text clearfix">
                        <!-- title -->
                        <div class="main-title-2">
                            <h5><span>Welcome To </span> {{config('app.name')}}</h5>
                            <h1>Relax in our Resort</h1>
                        </div>
                        <!-- paragraph -->
                        <p>We welcome you to the best luxury hotel. It offers the highest level of comfort and relaxation. Large selection of rooms and apartments for every taste and for every need. Qualified staff, delicious dinners, bar, drinks, relaxation area and parking. A five-star hotel with history, atmosphere and a warm welcome.</p>
                        <!-- ul -->
                        <ul class="clearfix">
                            <li>
                                <i class="fa fa-check-square-o"></i> Compact and Comfortable Rooms
                            </li>
                            <li>
                                <i class="fa fa-check-square-o"></i> Friendly Service and Fair Prices
                            </li>
                            <li>
                                <i class="fa fa-check-square-o"></i> Light, Air, Clean Design and Art Exhibition
                            </li>
                            <li>
                                <i class="fa fa-check-square-o"></i> Public Safety and 24/7 Security
                            </li>
                        </ul>
                        <!-- btm -->
                        <p>At {{config('app.name')}}, we prioritize your comfort and satisfaction, and our dedicated team is always available to assist you with any requests or inquiries. Experience the warmth of hospitality and the convenience of modern amenities at our hotel. We look forward to welcoming you soon!</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="hotels-detail-slider simple-slider">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/about/img-1.jpg" class="d-block w-100" alt="about-photo">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/about/img-2.jpg" class="d-block w-100" alt="about-photo">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/about/img-3.jpg" class="d-block w-100" alt="about-photo">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About hotel alpha 3 start -->

<!-- Our facilties section 2 start -->
<div class="our-facilties-section-2 bg-white">
    <div class="container">
        <div class="main-title">
            <h1>Our Facilties</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="services-box">
                    <div class="number">1</div>
                    <div class="icon">
                        <i class="flaticon-school-call-phone-reception"></i>
                    </div>
                    <div class="detail">
                        <h3>
                            <a href="#">24-hour Reception</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, conser adipisicing elit. Numquam deleniti amet quia voluptate laboriosam</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="services-box">
                    <div class="number">2</div>
                    <div class="icon">
                        <i class="flaticon-school-call-phone-reception"></i>
                    </div>
                    <div class="detail">
                        <h3>
                            <a href="#">Room Service</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, conser adipisicing elit. Numquam deleniti amet quia voluptate laboriosam</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="services-box">
                    <div class="number">3</div>
                    <div class="icon">
                        <i class="flaticon-graph-line-screen"></i>
                    </div>
                    <div class="detail">
                        <h3>
                            <a href="#">Flat Screen TV</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, conser adipisicing elit. Numquam deleniti amet quia voluptate laboriosam</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="services-box">
                    <div class="number">4</div>
                    <div class="icon">
                        <i class="flaticon-weightlifting"></i>
                    </div>
                    <div class="detail">
                        <h3>
                            <a href="#">Gym</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, conser adipisicing elit. Numquam deleniti amet quia voluptate laboriosam</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="services-box">
                    <div class="number">5</div>
                    <div class="icon">
                        <i class="flaticon-parking"></i>
                    </div>
                    <div class="detail">
                        <h3>
                            <a href="#">Free Parking</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, conser adipisicing elit. Numquam deleniti amet quia voluptate laboriosam</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="services-box">
                    <div class="number">6</div>
                    <div class="icon">
                        <i class="flaticon-wifi-connection-signal-symbol"></i>
                    </div>
                    <div class="detail">
                        <h3>
                            <a href="#">Free Wi-Fi</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, conser adipisicing elit. Numquam deleniti amet quia voluptate laboriosam</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Our facilties section 2 end -->

<!-- Counters strat -->
<div class="counters-4 bg-grey-3">
    <div class="container">
        <div class="row">
            <div class="left align-self-center">
                <!-- Main title -->
                <div class="main-title main-title-4">
                    <h1>Hotel Statistics</h1>
                    <p>Unlocking Hotel Success: Delving into Key Statistics and Performance Metrics</p>
                </div>
            </div>
            <div class="right float-end">
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

<!-- Testimonial 2 start -->
<div class="testimonial-4 comon-slick bg-white testimonial-bg-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 align-self-center">
                <!-- Main title -->
                <div class="main-title">
                    <h1>Our Testimonial</h1>
                    <p>Discover what our guests have to say about their unforgettable experiences at {{config('app.name')}}.</p>
                </div>
            </div>
            <div class="col-lg-8">
                <!-- Slick slider area start -->
                <div class="slick row comon-slick-inner" data-slick='{"slidesToShow": 2, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 1}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                    <div class="item slide-box">
                        <div class="testimonial-item-new">
                            <div class="author-content">
                                <h5 class="left-line pl-40">Mr. Adeoluwa Babatunde Adekunle</h5>
                            </div>
                            <p>Staying at this hotel was an unforgettable experience! From the warm welcome at check-in to the impeccable room service, every aspect of my stay exceeded expectations.
                                                    The room was spacious, clean, and beautifully decorated, providing a comfortable retreat after a busy day of exploring the city.
                                                    The hotel's amenities, including the fitness center and pool, were top-notch and added to the overall enjoyment of my stay. I highly recommend this hotel to anyone looking for a luxurious and memorable experience in Ibadan.</p>
                        </div>
                    </div>
                    <div class="item slide-box">
                        <div class="testimonial-item-new">
                            <div class="author-content">
                                <h5 class="left-line pl-40">Mr. Abdullahi Sani Ibrahim</h5>
                            </div>
                            <p>During my recent stay at this hotel, I was impressed by the exceptional service and attention to detail.
                                The staff went above and beyond to ensure my comfort and satisfaction, from accommodating special requests to providing valuable local recommendations.
                                The room was tastefully designed with modern amenities, creating a cozy and relaxing environment.
                                The hotel's central location made it convenient to explore nearby attractions and restaurants.
                                Overall, my experience was nothing short of fantastic, and I look forward to returning in the future.</p>
                        </div>
                    </div>
                    <div class="item slide-box">
                        <div class="testimonial-item-new">
                            <div class="author-content">
                                <h5 class="left-line pl-40">Miss Ngozi Chioma Onyeka</h5>
                            </div>
                            <p>"Staying at this hotel was an absolute pleasure. From the moment I arrived, I was greeted with warmth and professionalism. The facilities were top-notch, offering a range of amenities that catered to every need. Whether it was enjoying a delicious meal at the restaurant, or taking a dip in the pool, every experience was nothing short of delightful.
                                The room was spacious, clean, and thoughtfully designed, providing a comfortable retreat after a day of exploring. The staff's hospitality and attention to detail truly made my stay memorable, and I wouldn't hesitate to recommend this hotel to anyone seeking a luxurious and enjoyable experience</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial 2 end -->
@endsection
