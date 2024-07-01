<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    /* public function send(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'required|numeric',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
            'subject' => 'required|string'
        ]);

        $details = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'message' => $request->message,
            'subject' => $request->subject,
        ];

        Mail::send('emails.contact', $details, function($message) use ($details) {
            $message->to('your-email@example.com')
                    ->subject('Contact Form: ' . $details['subject']);
        });

        return back()->with('success', 'Your message has been sent successfully!');
    } */
}
