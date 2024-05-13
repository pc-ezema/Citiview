@extends('layouts.frontend')

@section('page-content')
<!-- Breadcrumb -->
@includeIf('layouts.breadcrumb', ['title' => 'Double Rooms', 'subtitle' => 'Rooms'])
<!-- Breadcrumb Ends -->

<!-- Rooms section start -->
<div class="rooms-section content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                @foreach($rooms as $room)
                <div class="row hotel-box-list-2 hbl-2 g-0">
                    <div class="col-xl-4 col-lg-5 col-md-5 col-sm-12">
                        <div class="photo-thumbnail">
                            <div class="photo">
                                <img src="{{URL::asset('img/room/' . $room->image)}}" alt="photo" class="img-fluid w-100">
                                <a href="{{route('roomDetails', Crypt::encrypt($room->id))}}">
                                    <span class="blog-one__plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7 col-md-7 col-sm-12">
                        <div class="detail">
                            <div class="heading clearfix">
                                <h3 class="title">
                                    <a href="{{route('roomDetails', Crypt::encrypt($room->id))}}">{{ucfirst($room->type)}} Room</a>
                                    <span class="price">₦{{number_format($room->price)}}/Night</span>
                                </h3>
                            </div>
                            <p>{{$room->description}}</p>
                            <ul class="fecilities clearfix">
                                <li>
                                    <i class="flaticon-bed"></i>
                                    4 by 6 Beds
                                </li>
                                <li>
                                    <i class="flaticon-room-service"></i>
                                    Room Service
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
                                    <i class="flaticon-phone-receiver"></i>
                                    Intercon
                                </li>
                                <li>
                                    <i class="flaticon-wifi-connection-signal-symbol"></i>
                                    Wi-fi
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Rooms  section end -->
@endsection
