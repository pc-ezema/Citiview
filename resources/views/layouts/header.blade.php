<!-- Main header start -->
<header class="main-header" id="main-header-2">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand logos" href="{{route('index')}}">
                <img src="{{URL::asset('img/logos/logo.jpg')}}" alt="logo" class="logo-photo">
                <img src="{{URL::asset('img/logos/logo.jpg')}}" alt="logo" class="logo-photo2">
            </a>
            <button class="navbar-toggler" id="drawer" type="button">
                <span class="fa fa-bars"></span>
            </button>
            <div class="navbar-collapse collapse w-100 justify-content-end" id="navbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" href="{{route('index')}}">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('about-us')) ? 'active' : '' }}" href="{{route('about')}}">
                            About Us
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ (request()->is('rooms*')) ? 'active' : '' }}" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Rooms
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                            <li>
                                <a class="dropdown-item {{ (request()->is('rooms/single-rooms')) ? 'active' : '' }}" href="{{route('single')}}">Single</a>
                            </li>
                            <li>
                                <a class="dropdown-item {{ (request()->is('rooms/mini-suites-rooms')) ? 'active' : '' }}" href="{{route('mini')}}">Mini Suites</a>
                            </li>
                            <li>
                                <a class="dropdown-item {{ (request()->is('rooms/double-rooms')) ? 'active' : '' }}" href="{{route('double')}}">Double</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('gallery')) ? 'active' : '' }}" href="{{route('gallery')}}">
                            Gallery
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('faqs')) ? 'active' : '' }}" href="{{route('faqs')}}">
                            FAQs
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('contact-us')) ? 'active' : '' }}" href="{{route('contact')}}">
                            Contact Us
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('bookings')}}" class="btn-lg btn-4 btn-6">Booking System</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<!-- Main header end -->
