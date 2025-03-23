<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Process the form submission (e.g., save to the database or send an email)
        // For now, we'll just return a success message
        return redirect('/contact')->with('success', 'Your message has been sent successfully!');
    }
}
