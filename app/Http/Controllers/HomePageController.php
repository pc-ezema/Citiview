<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Artesaos\SEOTools\Facades\SEOTools;

class HomePageController extends Controller
{
    public function index()
    {
        SEOTools::setTitle('Welcome to CiTiVIEW Hotel - Your Ultimate Destination for Comfort and Luxury');
        SEOTools::setDescription('Discover the perfect blend of elegance and convenience at CiTiVIEW Hotel. Explore our range of luxurious accommodations and versatile event spaces, designed to elevate your experience and create lasting memories.');

        return view('welcome');
    }

    public function about()
    {
        SEOTools::setTitle('About CiTiVIEW Hotel - Redefining Hospitality Excellence');
        SEOTools::setDescription(' Learn about CiTiVIEW Hotel, where exceptional service meets unmatched comfort. Our commitment to excellence ensures that every guest and event receives personalized attention and impeccable service, making us the preferred choice for discerning travelers and event planners.');

        return view('aboutUs');
    }

    public function contact()
    {
        SEOTools::setTitle('Contact CiTiVIEW Hotel - Your Gateway to Unparalleled Hospitality');
        SEOTools::setDescription('Get in touch with CiTiVIEW Hotel for inquiries, reservations, or assistance. Our dedicated team is here to assist you 24/7, providing expert guidance and personalized recommendations to enhance your stay or event experience.');

        return view('contactUs');
    }

    public function submitContact(Request $request)
    {
        // Define your validation rules
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'phone_number' => 'required|string',
            'message' => 'required|string',
        ]);

        // If validation fails, return the error response
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed. Please see errors parameter for details.',
                'errors' => $validator->errors()
            ]);
        }
        // Process form data (e.g., send email, save to database)
        /** Store information to include in mail in $data as an array */
        $data = array(
            'name' => $request->full_name,
            'email' => $request->email,
            'phone' => $request->phone_number,
            'subject' => $request->subject,
            'description' => $request->message,
            'created_at' => now(),
            'admin' => 'info@citiview.ng',
        );

        /** Send message to the admin */
        Mail::send('emails.contact', $data, function ($m) use ($data) {
            $m->to($data['admin'])->subject(config('app.name').' Contact Form Notification');
        });

        // Return success response
        return response()->json([
            'success' => true,
            'message' => 'Thank you for reaching out! Your message has been successfully sent. We will get back to you shortly.',
        ]);
    }

    public function single()
    {
        SEOTools::setTitle('Single Rooms at CiTiVIEW Hotel - Comfort Redefined');
        SEOTools::setDescription('Experience ultimate comfort and relaxation in our stylish single rooms at CiTiVIEW Hotel. Each room is meticulously designed to provide a serene retreat for solo travelers, featuring modern amenities and thoughtful touches to ensure a memorable stay.');

        return view('rooms.single');
    }

    public function mini()
    {
        SEOTools::setTitle('Mini Suites at CiTiVIEW Hotel - Luxury Redefined');
        SEOTools::setDescription('Indulge in luxury and sophistication with our mini suites at CiTiVIEW Hotel. Offering spacious accommodations, premium amenities, and stunning views, our mini suites provide the perfect escape for discerning travelers seeking a lavish retreat.');

        return view('rooms.mini');
    }

    public function double()
    {
        SEOTools::setTitle('Double Rooms at CiTiVIEW Hotel - Perfect for Couples and Families');
        SEOTools::setDescription('Discover comfort and convenience in our double rooms at CiTiVIEW Hotel. Ideal for couples or small families, each room offers ample space, comfortable bedding, and all the amenities you need for a relaxing stay.');

        return view('rooms.double');
    }

    public function roomDetails()
    {
        return view('rooms.details');
    }

    public function bookings()
    {
        SEOTools::setTitle('Book Your Stay or Event - CiTiVIEW Hotel');
        SEOTools::setDescription('Plan your stay or event with ease using our convenient booking system at CiTiVIEW Hotel. Select your desired dates, room type, and any additional services to customize your reservation, and look forward to an unforgettable experience with us.');

        return view('bookingSystem');
    }

    public function gallery()
    {
        SEOTools::setTitle('Explore CiTiVIEW Hotel');
        SEOTools::setDescription('Take a virtual tour of CiTiVIEW Hotel through our stunning photo gallery. Discover the beauty and elegance of our accommodations, event spaces, dining options, and amenities, and get inspired for your next stay or event with us.');

        return view('gallery');
    }

    public function faqs()
    {
        SEOTools::setTitle('Your Guide to CiTiVIEW Hotel');
        SEOTools::setDescription('Find answers to commonly asked questions about CiTiVIEW Hotel, including information on reservations, amenities, event bookings, and more. Browse our FAQ section to get all the details you need for a seamless experience.');

        return view('faqs');
    }
}
