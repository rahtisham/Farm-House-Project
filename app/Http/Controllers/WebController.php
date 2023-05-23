<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function agents()
    {
        return view('agents');
    }

    public function farmhouse_details()
    {
        return view('farmhouse_details');
    }

    public function farmhouse_lists()
    {
        return view('farmhouse_lists');
    }
}
