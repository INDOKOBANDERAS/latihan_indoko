<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function profile()
    {
        return view('profile');
    }

    public function student()
    {
    return view('student');
    }
}
