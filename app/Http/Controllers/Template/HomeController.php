<?php

namespace App\Http\Controllers\Template;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('template.home.home');
    }
}
