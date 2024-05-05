<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class HomePageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('aboutUs');
    }

    public function contact()
    {
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

    public function rooms()
    {
        return view('rooms');
    }

    public function bookings()
    {
        return view('bookings');
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function faqs()
    {
        return view('faqs');
    }
}
