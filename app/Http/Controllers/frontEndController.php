<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontEndController extends Controller
{
    public function home()
    {
        return view('user.home');
    }

    public function history()
    {
        return view('user.history');
    }
    public function festivals()
    {
        return view('user.festivals');
    }
    public function upadevadas()
    {
        return view('user.upadevadas');
    }
    public function gallery()
    {
        return view('user.gallery');
    }
    public function contact()
    {
        return view('user.contact');
    }
    public function office_bearers()
    {
        return view('user.office_bearers');
    }
    
    
}
