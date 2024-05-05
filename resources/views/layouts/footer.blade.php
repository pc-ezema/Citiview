<!-- Footer start -->
<footer class="main-footer clearfix">
    <div class="container">
        <!-- Footer info-->
        <div class="footer-info">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer-item">
                        <div class="main-title-2">
                            <h1>Contact Us</h1>
                        </div>
                        <ul class="personal-info">
                            <li>
                                <i class="fa fa-map-marker"></i>
                                Address: {{config('app.address')}}
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                Email:<a href="mailto:{{config('app.email')}}">{{config('app.email')}}</a>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                Phone: <a href="tel:{{config('app.phone1')}}">{{config('app.phone1')}}</a>
                            </li>
                            <li>
                                <i class="fa fa-fax"></i>
                                Fax: {{config('app.phone2')}}
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                    <div class="footer-item">
                        <div class="main-title-2">
                            <h1>Rooms</h1>
                        </div>
                        <ul class="links">
                            <li>
                                <a href="{{route('single')}}">Single</a>
                            </li>
                            <li>
                                <a href="{{route('mini')}}">Mini Suites</a>
                            </li>
                            <li>
                                <a href="{{route('double')}}">Double</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                    <div class="footer-item">
                        <div class="main-title-2">
                            <h1>Useful Links</h1>
                        </div>
                        <ul class="links">
                            <li>
                                <a href="{{route('about')}}">About Us</a>
                            </li>
                            <li>
                                <a href="{{route('faqs')}}">Faqs</a>
                            </li>
                            <li>
                                <a href="{{route('bookings')}}">Booking System</a>
                            </li>
                            <li>
                                <a href="{{route('gallery')}}">Gallery</a>
                            </li>
                            <li>
                                <a href="{{route('contact')}}">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer-item newsletter">
                        <div class="main-title-2">
                            <h1>Newsletter</h1>
                        </div>
                        <div class="newsletter-inner">
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <form class="form-inline" action="#" method="GET">
                                <input type="text" class="form-control" id="inlineFormInputName4" placeholder="Your Email">
                                <button type="submit" class="btn btn-small"><i class="fa fa-paper-plane"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <p> &copy; <script>
                    document.write(new Date().getFullYear())
                </script>. All Rights Reserved.</p>
                </div>
                <!-- <div class="col-lg-6 col-md-6">
                    <div class="clearfix"></div>
                    <ul class="social-list">
                        <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="rss-bg"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="linkedin-bg"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div> -->
            </div>
        </div>
    </div>
</footer>
<!-- Footer end -->
