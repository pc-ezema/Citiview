@extends('layouts.frontend')

@section('page-content')
<!-- Breadcrumb -->
@includeIf('layouts.breadcrumb', ['title' => 'Contact Us', 'subtitle' => 'Contact Us'])
<!-- Breadcrumb Ends -->

<!-- Contact 1 start -->
<div class="contact-1 content-area-6">
    <div class="container">
        <div class="main-title">
            <h1>Contact Us</h1>
            <p>Have Questions? Contact Us!</p>
        </div>
        <div class="row">
            <div class="col-lg-7 col-md-12 col-sm-12">
                <div id="successMessage" class="alert alert-success d-none"></div>
                <!-- Contact form start -->
                <div class="contact-form">
                    <form id="contactForm" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <span id="full_nameError" class="text-danger error-message"></span>
                                <div class="form-floating mb-4">
                                    <input type="text" class="form-control" id="floating-full-name" name="full_name" placeholder="Full Name">
                                    <label for="floating-full-name">Full Name</label>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <span id="emailError" class="text-danger error-message"></span>
                                <div class="form-floating mb-4">
                                    <input type="email" class="form-control" id="floating-email-address" name="email" placeholder="Email Address">
                                    <label for="floating-email-address">Email address</label>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <span id="subjectError" class="text-danger error-message"></span>
                                <div class="form-floating mb-4">
                                    <input type="text" class="form-control" id="floating-subject" name="subject" placeholder="Subject">
                                    <label for="floating-subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <span id="phone_numberError" class="text-danger error-message"></span>
                                <div class="form-floating mb-4">
                                    <input type="text" class="form-control" id="floating-phone-Number" name="phone_number" placeholder="Phone Number">
                                    <label for="floating-phone-Number">Phone Number</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <span id="messageError" class="text-danger error-message"></span>
                                <div class="form-floating mb-4">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="message" style="height: 100px"></textarea>
                                    <label for="floatingTextarea2">Message</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="send-btn text-center">
                                    <button type="submit" class="btn-md btn-theme btn-4 btn-7" id="sendMessageBtn">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Contact form end -->
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12">
                <!-- Contact details start -->
                <div class="contact-details">
                    <div class="contact-item d-flex mb-3">
                        <div class="icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="contant">
                            <h4>Office Address</h4>
                            <p>{{config('app.address')}}</p>
                        </div>
                    </div>
                    <div class="contact-item d-flex mb-3">
                        <div class="icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="contant">
                            <h4>Phone Number</h4>
                            <p>
                                <a href="tel:{{config('app.phone1')}}">Office: {{config('app.phone1')}}</a>
                            </p>
                        </div>
                    </div>
                    <div class="contact-item d-flex mb-3">
                        <div class="icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="contant">
                            <h4>Email Address</h4>
                            <p>
                                <a href="mailto:{{config('app.email')}}">{{config('app.email')}}</a>
                            </p>
                        </div>
                    </div>
                    <div class="contact-item d-flex">
                        <div class="icon">
                            <i class="fa fa-fax"></i>
                        </div>
                        <div class="contant">
                            <h4>Fax</h4>
                            <p>
                                <a href="tel:{{config('app.phone2')}}">Fax: {{config('app.phone2')}}</a>
                            </p>
                        </div>
                    </div>

                </div>
                <!-- Contact details end -->
            </div>
        </div>
    </div>
</div>
<!-- Contact-1 end -->

<!-- Google map start -->
<div class="section">
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.610104233615!2d3.9569986243804136!3d7.397509512391376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10399317b5d46737%3A0xf865c02348c75e54!2sOlubadan%20Estate.%2C%20Ibadan%20200113%2C%20Oyo!5e0!3m2!1sen!2sng!4v1715006577089!5m2!1sen!2sng" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
<!-- Google map end -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('#contactForm').submit(function (e) {
            e.preventDefault(); // Prevent default form submission

            // Serialize form data
            var formData = new FormData($(this)[0]);

            // Disable submit button and show loading state
            $('#sendMessageBtn').attr('disabled', true).html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Sending message...');

            // Send Ajax request
            $.ajax({
                url: "{{ route('submitContact') }}", // Replace 'contact.submit' with your actual route name
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

                        $('#sendMessageBtn').attr('disabled', false).html('Send Message');
                    } else {
                        // Display validation errors
                        $.each(response.errors, function (key, value) {
                            $('#' + key + 'Error').text(value);
                        });

                        $('#sendMessageBtn').attr('disabled', false).html('Send Message');
                    }
                },
                error: function (xhr, status, error) {
                    // Handle Ajax error
                    console.error(xhr.responseText);

                    $('#sendMessageBtn').attr('disabled', false).html('Send Message');
                }
            });
        });
    });
</script>

@endsection
