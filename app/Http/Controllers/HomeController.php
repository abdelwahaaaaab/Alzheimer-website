<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('Client.home');
    }
    public function alzheimer()
    {
        return view('alzahaimer');
    }
    public function adminHome()
    {
        return view('Admin.admin');
    }
}
