<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Send email
        Mail::send([], [], function ($message) use ($validatedData) {
            $message->to('your-email@example.com') // Replace with your email address
                ->subject('New Contact Form Submission')
                ->setBody("
                    Name: {$validatedData['name']}
                    Email: {$validatedData['email']}
                    Message: {$validatedData['message']}
                ");
        });

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Thank you for your message!');
    }
}
