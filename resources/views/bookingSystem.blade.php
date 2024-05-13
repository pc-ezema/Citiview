@extends('layouts.frontend')

@section('page-content')
<!-- Breadcrumb -->
@includeIf('layouts.breadcrumb', ['title' => 'Booking System', 'subtitle' => 'Booking System'])
<!-- Breadcrumb Ends -->

<!-- Booking flow start -->
<div class="booking-flow content-area-6">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="clearfix"></div>
                <form id="bookingForm">
                    <h3 class="booking-heading-2">Book Room</h3>
                    <div id="successMessage" class="alert alert-success d-none"></div>
                    <div class="sidebar">
                        <!-- Search area box 3 start -->
                        <div class="search-area-box-3 sidebar-widget mb-30">
                            <div class="search-contents">
                                <div class="search-your-details">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="btn-default" placeholder="Enter your full name" name="full_name" required>
                                                <span id="full_nameError" class="text-danger error-message"></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
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
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="btn-default datepicker" placeholder="Check In" name="check_in">
                                                <span id="check_inError" class="text-danger error-message"></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="btn-default datepicker" placeholder="Check Out" name="check_out">
                                                <span id="check_outError" class="text-danger error-message"></span>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <select class="selectpicker search-fields" name="room" required>
                                                    <option>-- Select Room --</option>
                                                    @foreach($rooms as $room)
                                                    <option value="{{$room->id}}">{{ucfirst($room->type)}} Room</option>
                                                    @endforeach
                                                </select>
                                                <span id="roomError" class="text-danger error-message"></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="number" class="btn-default" placeholder="Enter number of adult" name="adult" required>
                                                <span id="adultError" class="text-danger error-message"></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
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
                            </div>
                        </div>
                        <!-- Search area box 3 end -->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Booking flow end -->
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
