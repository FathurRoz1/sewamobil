<?php

namespace App\Http\Controllers\Template;

use App\Http\Controllers\Controller;

class SewaController extends Controller
{
    public function index()
    {
        return view('template.sewa.sewa');
    }
}
