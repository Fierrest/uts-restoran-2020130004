<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\aboutController;
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

// Route::get('/', function () {
//     return view('welcome');
//  });
Route::get('/Produk', [ProdukController::class, 'Produk'])->name('Produk');
Route::get('/Testimonials', [TestimonialsController::class, 'Testimonials'])->name('Testimonials');
Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/Index', [IndexController::class, 'Index'])->name('Index');
