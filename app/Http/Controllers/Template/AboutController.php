<?php
namespace App\Http\Controllers\Template;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index()
    {
        return view('template.about_us.about_us');
    }
}
