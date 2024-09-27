<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function signUp()
    {
        return view('signup');
    }

    public function login()
    {
        return view('login');
    }

    public function about()
    {
        return view('about');
    }

    public function buyNow()
    {
        return view('buy-now');
    }

    public function pricing()
    {
        return view('pricing');
    }

    public function sampleReport()
    {
        return view('sample-report');
    }

    public function vehicleHistory()
    {
        return view('vehicle-history');
    }
}
