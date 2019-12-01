<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        return view('about.about');
    }
    public function staff()
    {
        return view('about.staff');
    }
    public function group()
    {
        return view('about.group');
    }
}
