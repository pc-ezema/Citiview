<!-- Main header start -->
<header class="main-header" id="main-header-2">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand logos" href="{{route('index')}}">
                <img src="img/logos/logo.jpg" alt="logo" class="logo-photo">
                <img src="img/logos/logo.jpg" alt="logo" class="logo-photo2">
            </a>
            <button class="navbar-toggler" id="drawer" type="button">
                <span class="fa fa-bars"></span>
            </button>
            <div class="navbar-collapse collapse w-100 justify-content-end" id="navbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown active">
                        <a class="nav-link" href="{{route('index')}}">
                            Home
                        </a>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link" href="{{route('about')}}">
                            About Us
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Rooms
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                            <li>
                                <a class="dropdown-item" href="{{route('single')}}">Single</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{route('mini')}}">Mini Suites</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{route('double')}}">Double</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link" href="{{route('gallery')}}">
                            Gallery
                        </a>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link" href="{{route('faqs')}}">
                            FAQs
                        </a>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link" href="{{route('contact')}}">
                            Contact Us
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('bookings')}}" class="btn-lg btn-4 btn-6">Booking System</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="row">
            <div class="header-search animated fadeInDown">
                <form class="form-inline">
                    <input type="text" class="form-control" id="searchKey" placeholder="Search...">
                    <div class="search-btns">
                        <button type="submit" class="btn btn-default">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</header>
<!-- Main header end -->
