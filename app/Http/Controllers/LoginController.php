<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(Request $request)
{
    $messages = [
        'email.required' => 'Please enter your email address',
        'password.required' => 'Please enter your password',
    ];

    $request->validate([
        'email' => 'required',
        'password' => 'required',
    ], $messages);

    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        return view('home');
    } else {
        return redirect()->route('login')->with('error', 'Invalid credentials');
    }
}
    

    public function home()
    {
        return view('home');
    }
    public function login()
    {
        return view('login');
    }
    public function about()
    {
        return view('about');
    }
}
