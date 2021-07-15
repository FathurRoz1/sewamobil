<?php

namespace App\Http\Controllers\Template;

use App\Http\Controllers\Controller;

class MobilController extends Controller
{
    public function index()
    {
        return view('template.mobil.mobil');
    }
}
