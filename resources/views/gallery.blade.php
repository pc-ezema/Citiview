@extends('layouts.frontend')

@section('page-content')

<!-- Breadcrumb -->
@includeIf('layouts.breadcrumb', ['title' => 'Gallery', 'subtitle' => 'Our Gallery'])
<!-- Breadcrumb Ends -->

<!-- Photo gallery secion start -->
<div class="photo-gallery content-area">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>Our Gallery</h1>
            <p>Explore Our World: A Visual Journey Through Our Hotel's Galleries</p>
        </div>
        <ul class="list-inline-listing filters filters-listing-navigation">
            <li class="active btn filtr-button filtr" data-filter="all">All</li>
            <li data-filter="1" class="btn btn-inline filtr-button filtr">Rooms</li>
        </ul>
        <div class="row filter-portfolio">
            <div class="col-lg-4 col-md-6 col-sm-12 filtr-item" data-category="3">
                <figure class="portofolio-thumb">
                    <a href="#"><img src="img/gallery/gallery1.jpg" alt="image" class="img-fluid w-100"></a>
                    <figcaption>
                        <div class="figure-content">
                            <h3 class="title">{{config('app.name')}}</h3>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 filtr-item" data-category="3, 4">
                <figure class="portofolio-thumb">
                    <a href="#"><img src="img/gallery/gallery2.jpg" alt="image" class="img-fluid w-100"></a>
                    <figcaption>
                        <div class="figure-content">
                            <h3 class="title">{{config('app.name')}}</h3>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 filtr-item" data-category="4">
                <figure class="portofolio-thumb">
                    <a href="#"><img src="img/gallery/gallery3.jpg" alt="image" class="img-fluid w-100"></a>
                    <figcaption>
                        <div class="figure-content">
                            <h3 class="title">{{config('app.name')}}</h3>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 filtr-item" data-category="2, 3">
                <figure class="portofolio-thumb">
                    <a href="#"><img src="img/gallery/gallery4.jpg" alt="image" class="img-fluid w-100"></a>
                    <figcaption>
                        <div class="figure-content">
                            <h3 class="title">{{config('app.name')}}</h3>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 filtr-item" data-category="3, 2">
                <figure class="portofolio-thumb">
                    <a href="#"><img src="img/gallery/gallery5.jpg" alt="image" class="img-fluid w-100"></a>
                    <figcaption>
                        <div class="figure-content">
                            <h3 class="title">{{config('app.name')}}</h3>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 filtr-item" data-category="4, 2">
                <figure class="portofolio-thumb">
                    <a href="#"><img src="img/gallery/gallery6.jpg" alt="image" class="img-fluid w-100"></a>
                    <figcaption>
                        <div class="figure-content">
                            <h3 class="title">{{config('app.name')}}</h3>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 filtr-item" data-category="5, 2, 3">
                <figure class="portofolio-thumb">
                    <a href="#"><img src="img/gallery/gallery7.jpg" alt="image" class="img-fluid w-100"></a>
                    <figcaption>
                        <div class="figure-content">
                            <h3 class="title">{{config('app.name')}}</h3>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 filtr-item" data-category="4, 2">
                <figure class="portofolio-thumb">
                    <a href="#"><img src="img/gallery/gallery8.jpg" alt="image" class="img-fluid w-100"></a>
                    <figcaption>
                        <div class="figure-content">
                            <h3 class="title">{{config('app.name')}}</h3>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 filtr-item" data-category="4, 2">
                <figure class="portofolio-thumb">
                    <a href="#"><img src="img/gallery/gallery9.jpg" alt="image" class="img-fluid w-100"></a>
                    <figcaption>
                        <div class="figure-content">
                            <h3 class="title">{{config('app.name')}}</h3>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 filtr-item" data-category="4, 2">
                <figure class="portofolio-thumb">
                    <a href="#"><img src="img/gallery/gallery10.jpg" alt="image" class="img-fluid w-100"></a>
                    <figcaption>
                        <div class="figure-content">
                            <h3 class="title">{{config('app.name')}}</h3>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 filtr-item" data-category="4, 2">
                <figure class="portofolio-thumb">
                    <a href="#"><img src="img/gallery/gallery11.jpg" alt="image" class="img-fluid w-100"></a>
                    <figcaption>
                        <div class="figure-content">
                            <h3 class="title">{{config('app.name')}}</h3>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 filtr-item" data-category="4, 2">
                <figure class="portofolio-thumb">
                    <a href="#"><img src="img/gallery/gallery12.jpg" alt="image" class="img-fluid w-100"></a>
                    <figcaption>
                        <div class="figure-content">
                            <h3 class="title">{{config('app.name')}}</h3>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 filtr-item" data-category="1">
                <figure class="portofolio-thumb">
                    <a href="#"><img src="img/gallery/gallery13.jpg" alt="image" class="img-fluid w-100"></a>
                    <figcaption>
                        <div class="figure-content">
                            <h3 class="title">{{config('app.name')}}</h3>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 filtr-item" data-category="1">
                <figure class="portofolio-thumb">
                    <a href="#"><img src="img/gallery/gallery14.jpg" alt="image" class="img-fluid w-100"></a>
                    <figcaption>
                        <div class="figure-content">
                            <h3 class="title">{{config('app.name')}}</h3>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 filtr-item" data-category="4, 2">
                <figure class="portofolio-thumb">
                    <a href="#"><img src="img/gallery/gallery15.jpg" alt="image" class="img-fluid w-100"></a>
                    <figcaption>
                        <div class="figure-content">
                            <h3 class="title">{{config('app.name')}}</h3>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 filtr-item" data-category="1">
                <figure class="portofolio-thumb">
                    <a href="#"><img src="img/gallery/gallery16.jpg" alt="image" class="img-fluid w-100"></a>
                    <figcaption>
                        <div class="figure-content">
                            <h3 class="title">{{config('app.name')}}</h3>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 filtr-item" data-category="1">
                <figure class="portofolio-thumb">
                    <a href="#"><img src="img/gallery/gallery17.jpg" alt="image" class="img-fluid w-100"></a>
                    <figcaption>
                        <div class="figure-content">
                            <h3 class="title">{{config('app.name')}}</h3>
                        </div>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
</div>
<!-- Photo gallery end -->
@endsection
