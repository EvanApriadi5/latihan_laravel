<?php

use App\Http\Controllers\formcontroller;
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

Route::get('/', function () {
    return view('landing-page');
});

Route::get('/landing-page', function () {
    return view('landing-page');
});

Route::get('/index-blade', function () {
    return view('driver.index');
});

Route::get('/add-blade', function () {
    return view('driver.add');
});
//routing memanggil controller
Route::get('register', [formcontroller::class,'register']);
Route::post('register-post', [formcontroller::class,'postdata']);

Route::get('luas-persegi-panjang', [formcontroller::class,'FormLuas']);
Route::post('luas-persegi-panjang', [formcontroller::class,'HitungLuas']);

Route::get('form-nilai', [formcontroller::class,'Formnilai']);
Route::post('hitung-nilai', [formcontroller::class,'Hitungnilai']);
