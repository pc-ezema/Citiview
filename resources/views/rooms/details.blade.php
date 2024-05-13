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
                            <h3>{{ucfirst($room->type)}} Room</h3>
                        </div>
                        <div class="pull-right">
                            <h3><span>₦{{number_format($room->price)}}</span></h3>
                            <h5>Per Night</h5>
                        </div>
                    </div>
                    <!-- Heading courses end -->

                    <!-- sidebar start -->
                    <div class="rooms-detail-slider">
                        <!--  Rooms detail slider start -->
                        <div class="rooms-detail-slider mb-40">
                            <div class="slider slider-for">
                                <div><img src="{{URL::asset('img/room/' . $room->image)}}" class="w-100 img-fluid" alt="photo"></div>
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
                                <!-- <li class="nav-item" role="presentation">
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
                                </li> -->
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active mb-50" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="accordion accordion-flush" id="accordionFlushExample7">
                                        <div class="accordion-item">
                                            <div class="rooms-description mb-50">
                                                <!-- Title -->
                                                <h3>Rooms Description</h3>
                                                <!-- paragraph -->
                                                <p>{{$room->description}}</p>
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
                                                                <i class="flaticon-parking"></i>Parking
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                                        <ul class="condition">
                                                            <li>
                                                                <i class="flaticon-bed"></i>@if($room->type == 'mini-suites')  6 by 6 Bed @else  4 by 6 Bed @endif
                                                            </li>
                                                            <li>
                                                                <i class="flaticon-graph-line-screen"></i>TV
                                                            </li>
                                                            <li>
                                                                <i class="flaticon-person-learning-by-reading"></i>Fridge
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                                        <ul class="condition">
                                                            <li>
                                                                <i class="flaticon-room-service"></i>Room Service
                                                            </li>
                                                            <li>
                                                                <i class="flaticon-phone-receiver"></i>Intercom
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
                        <h4 class="price">₦{{number_format($room->price)}}/Night</h4>
                        <div class="search-contents">
                            <div id="successMessage" class="alert alert-success d-none"></div>
                            <form id="bookingForm">
                                <div class="search-your-details">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input type="text" class="btn-default" placeholder="Enter your full name" name="full_name" required>
                                                <span id="full_nameError" class="text-danger error-message"></span>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input type="email" class="btn-default" placeholder="Enter your email address" name="email_address" required>
                                                <span id="email_addressError" class="text-danger error-message"></span>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input type="tel" class="btn-default" placeholder="Enter your phone number" name="phone_number" required>
                                                <span id="phone_numberError" class="text-danger error-message"></span>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input type="text" class="btn-default datepicker" placeholder="Check In" name="check_in">
                                                <span id="check_inError" class="text-danger error-message"></span>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input type="text" class="btn-default datepicker" placeholder="Check Out" name="check_out">
                                                <span id="check_outError" class="text-danger error-message"></span>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <select class="selectpicker search-fields" name="room" required>
                                                    <option value="{{$room->id}}">{{ucfirst($room->type)}} Room</option>
                                                </select>
                                                <span id="roomError" class="text-danger error-message"></span>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input type="number" class="btn-default" placeholder="Enter number of adult" name="adult" required>
                                                <span id="adultError" class="text-danger error-message"></span>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input type="number" class="btn-default" placeholder="Enter number of child" name="child" required>
                                                <span id="childError" class="text-danger error-message"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group mb-0">
                                                <button type="submit" class="btn-md btn-theme btn-4 btn-7 w-100" id="bookingBtn">Book Now</button>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('#bookingForm').submit(function (e) {
            e.preventDefault(); // Prevent default form submission

            // Serialize form data
            var formData = new FormData($(this)[0]);

            // Disable submit button and show loading state
            $('#bookingBtn').attr('disabled', true).html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Processing request...');

            // Send Ajax request
            $.ajax({
                url: "{{ route('bookNow') }}",
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Include the CSRF token in the headers
                },
                success: function (response) {
                    // Clear previous error messages
                    $('.error-message').text('');

                    // Handle success response
                    if (response.success) {
                        // Display success message
                        $('#successMessage').text(response.message).removeClass('d-none');

                        $('#bookingBtn').attr('disabled', false).html('Book Now');
                    } else {
                        // Display validation errors
                        $.each(response.errors, function (key, value) {
                            $('#' + key + 'Error').text(value);
                        });

                        $('#bookingBtn').attr('disabled', false).html('Book Now');
                    }
                },
                error: function (xhr, status, error) {
                    // Handle Ajax error
                    console.error(xhr.responseText);

                    $('#bookingBtn').attr('disabled', false).html('Book Now');
                }
            });
        });
    });
</script>
@endsection
