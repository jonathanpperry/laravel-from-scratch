<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        // Validate the request
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to authenticate and log in the user based on the provided credentials
        if (auth()->attempt($attributes)) {
            // Redirect with a success flash message
            return redirect('/')->with('success', 'Welcome Back!');
        }

        // Auth failed
        throw ValidationException::withMessages([
            'email' => 'Your provided credentials could not be verified.',
        ]);
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye!');
    }
}
