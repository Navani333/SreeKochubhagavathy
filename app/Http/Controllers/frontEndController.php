<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontEndController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function history()
    {
        return view('history');
    }
    public function festivals()
    {
        return view('festivals');
    }
    public function upadevadas()
    {
        return view('upadevadas');
    }
    public function gallery()
    {
        return view('gallery');
    }
    public function contact()
    {
        return view('contact');
    }
    public function office_bearers()
    {
        return view('office_bearers');
    }
    
    
}
