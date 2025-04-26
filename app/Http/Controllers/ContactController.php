<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the form input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // You can handle the form data here (send email, save to database, etc.)
        // For now, let's just redirect back with a success message

        return back()->with('success', 'Thank you for contacting us! We will get back to you soon.');
    }
}
