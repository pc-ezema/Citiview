<!-- Sidenav start -->
<nav id="sidebar" class="nav-sidebar sidebar-heading-section">
    <!-- Close btn-->
    <div id="dismiss">
        <i class="fa fa-close"></i>
    </div>
    <div class="sidebar-inner">
        <div class="sidebar-logo">
            <img src="{{URL::asset('img/logos/logo.jpg')}}" alt="sidebarlogo">
        </div>
        <div class="sidebar-navigation">
            <h3 class="heading">Pages</h3>
            <ul class="menu-list">
                <li>
                    <a href="{{route('index')}}" class="pt0 {{ (request()->is('/')) ? 'active' : '' }}">Home</a>
                </li>
                <li>
                    <a href="{{route('index')}}" class="pt0 {{ (request()->is('about-us')) ? 'active' : '' }}">About Us</a>
                </li>
                <li><a href="#" >Rooms <em class="fa fa-chevron-down {{ (request()->is('rooms*')) ? 'active' : '' }}"></em></a>
                    <ul>
                        <li>
                            <a href="{{route('single')}}" class="{{ (request()->is('rooms/single-rooms')) ? 'active' : '' }}">Single</a>
                        </li>
                        <li>
                            <a href="{{route('mini')}}" class="{{ (request()->is('rooms/mini-suites-rooms')) ? 'active' : '' }}">Mini Suites</a>
                        </li>
                        <li>
                            <a href="{{route('double')}}" class="{{ (request()->is('rooms/double-rooms')) ? 'active' : '' }}">Double</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('gallery')}}" class="{{ (request()->is('gallery')) ? 'active' : '' }} pt0">Gallery</a>
                </li>
                <li>
                    <a href="{{route('faqs')}}" class="{{ (request()->is('faqs')) ? 'active' : '' }} pt0">FAQs</a>
                </li>
                <li>
                    <a href="{{route('contact')}}" class="{{ (request()->is('contact-us')) ? 'active' : '' }} pt0">Contact Us</a>
                </li>
            </ul>
        </div>
        <div class="get-in-touch">
            <h3 class="heading">Get in Touch</h3>
            <div class="sidebar-contact-info">
                <div class="icon">
                    <i class="fa fa-phone"></i>
                </div>
                <div class="body-info">
                    <a href="tel:{{config('app.phone1')}}">{{config('app.phone1')}}</a>
                </div>
            </div>
            <div class="sidebar-contact-info">
                <div class="icon">
                    <i class="fa fa-envelope"></i>
                </div>
                <div class="body-info">
                    <a href="mailto:{{config('app.email')}}">{{config('app.email')}}</a>
                </div>
            </div>
            <div class="sidebar-contact-info mb-0">
                <div class="icon">
                    <i class="fa fa-fax"></i>
                </div>
                <div class="body-info">
                    <a href="tel:{{config('app.phone2')}}">{{config('app.phone2')}}</a>
                </div>
            </div>
        </div>
        <!-- <div class="get-social">
            <h3 class="heading">Get Social</h3>
            <a href="#" class="facebook-bg">
                <i class="fa fa-facebook"></i>
            </a>
            <a href="#" class="twitter-bg">
                <i class="fa fa-twitter"></i>
            </a>
            <a href="#" class="google-bg">
                <i class="fa fa-google"></i>
            </a>
            <a href="#" class="linkedin-bg">
                <i class="fa fa-linkedin"></i>
            </a>
        </div> -->
    </div>
</nav>
<!-- Sidenav end -->
