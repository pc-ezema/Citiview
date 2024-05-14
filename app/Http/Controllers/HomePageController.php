<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Artesaos\SEOTools\Facades\SEOTools;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Log;

class HomePageController extends Controller
{
    public function index()
    {
        SEOTools::setTitle('Welcome to CiTiVIEW Hotel - Your Ultimate Destination for Comfort and Luxury');
        SEOTools::setDescription('Discover the perfect blend of elegance and convenience at CiTiVIEW Hotel. Explore our range of luxurious accommodations and versatile event spaces, designed to elevate your experience and create lasting memories.');

        $rooms = Room::get();

        return view('welcome', [
            'rooms' => $rooms
        ]);
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

        $rooms = Room::where('type', 'single')->get();

        return view('rooms.single', [
            'rooms' =>  $rooms
        ]);
    }

    public function mini()
    {
        SEOTools::setTitle('Mini Suites at CiTiVIEW Hotel - Luxury Redefined');
        SEOTools::setDescription('Indulge in luxury and sophistication with our mini suites at CiTiVIEW Hotel. Offering spacious accommodations, premium amenities, and stunning views, our mini suites provide the perfect escape for discerning travelers seeking a lavish retreat.');

        $rooms = Room::where('type', 'mini-suites')->get();

        return view('rooms.mini', [
            'rooms' => $rooms
        ]);
    }

    public function double()
    {
        SEOTools::setTitle('Double Rooms at CiTiVIEW Hotel - Perfect for Couples and Families');
        SEOTools::setDescription('Discover comfort and convenience in our double rooms at CiTiVIEW Hotel. Ideal for couples or small families, each room offers ample space, comfortable bedding, and all the amenities you need for a relaxing stay.');

        $rooms = Room::where('type', 'double')->get();

        return view('rooms.double', [
            'rooms' =>  $rooms
        ]);
    }

    public function search(Request $request)
    {
        $room = Room::where('id', $request->room)->first();

        return redirect()->route('roomDetails', Crypt::encrypt($room->id));
    }

    public function roomDetails($id)
    {
        $room = Room::find(decrypt($id));

        return view('rooms.details', [
            'room' => $room
        ]);
    }

    public function bookNow(Request $request)
    {
        // Define your validation rules
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string',
            'email_address' => 'required|email',
            'phone_number' => 'required',
            'check_in' => 'required|string',
            'check_out' => 'required|string',
            'room' => 'required|numeric',
            'adult' => 'required|string',
            'child' => 'required|string',
        ]);

        // If validation fails, return the error response
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed. Please see errors parameter for details.',
                'errors' => $validator->errors()
            ]);
        }

        $room = Room::find($request->room);

        if(!$room)
        {
            // Return success response
            return response()->json([
                'success' => false,
                'message' => "Room doesn't exist.",
            ]);
        }

        // Process form data (e.g., send email, save to database)
        $book = Booking::create([
            'room_id' => $room->id,
            'name' => $request->full_name,
            'phone_number' => $request->phone_number,
            'email' => $request->email_address,
            'check_in' => $request->check_in,
            'check_out' => $request->check_out,
            'adult' => $request->adult,
            'child' => $request->child
        ]);

        /** Store information to include in mail in $data as an array */
        $data = array(
            'name' => $request->full_name,
            'email' => $request->email_address,
            'phone' => $request->phone_number,
            'checkin' => $request->check_in,
            'checkout' => $request->check_out,
            'adult' => $request->adult,
            'child' => $request->child,
            'room' => ucfirst($room->type) .' Room',
            'created_at' => now(),
            'admin' => 'info@citiview.ng',
        );

        try {
            /** Send message to the admin */
            Mail::send('emails.info', $data, function ($m) use ($data) {
                $m->to($data['email'])->subject(config('app.name').' Room Booking Form Notification');
            });
        } catch (Exception $e)
        {
            // Log the error
            Log::error('Error dispatching email for user: ' . $e->getMessage());
        }


        /** Send message to the admin */
        Mail::send('emails.booking', $data, function ($m) use ($data) {
            $m->to($data['admin'])->subject(config('app.name').' Room Booking Form Notification');
        });

        // Return success response
        return response()->json([
            'success' => true,
            'message' => 'Thank you for booking with us! Your room reservation has been successfully confirmed. We look forward to welcoming you on '.Carbon::createFromFormat('m/d/Y', $request->check_in)->format('F j, Y').' and ensuring you have a delightful stay with us. Please call our 24/7 Phone numbers to advise us of your arrival time. Safe travels until we meet!',
        ]);
    }

    public function bookings()
    {
        SEOTools::setTitle('Book Your Stay or Event - CiTiVIEW Hotel');
        SEOTools::setDescription('Plan your stay or event with ease using our convenient booking system at CiTiVIEW Hotel. Select your desired dates, room type, and any additional services to customize your reservation, and look forward to an unforgettable experience with us.');

        $rooms = Room::get();

        return view('bookingSystem', [
            'rooms' => $rooms
        ]);
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
