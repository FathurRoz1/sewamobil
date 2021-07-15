<?php

namespace App\Http\Controllers\Template;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/sewa', function () {
//     return view('template.sewa.sewa');
// });
Route::get('/', [AboutController::class, 'index']);
Route::get('/sewa', [SewaController::class, 'index']);
Route::get('/mobil', [MobilController::class, 'index']);