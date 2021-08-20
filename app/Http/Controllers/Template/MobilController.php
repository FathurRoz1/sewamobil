<?php

namespace App\Http\Controllers\Template;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class MobilController extends Controller
{
    public function index()
    {
                // mengambil data dari table mobil
		$mobil = DB::table('mobil')->paginate(10);
 
        // mengirim data mobil ke view index
        return view('template.mobil.mobil',['mobil' => $mobil]);
    }

    // public function mobil()
	// {
    // 	        // mengambil data dari table mobil
	// 	$mobil = DB::table('mobil')->paginate(10);
 
    // 	        // mengirim data mobil ke view index
	// 	return view('template.mobil.mobil',['mobil' => $mobil]);
 
	// }
}
