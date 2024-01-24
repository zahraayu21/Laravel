<?php

use App\Http\Controllers\HitungController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Event\Code\Test;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view ('welcome');
})-> name('home');

Route::get('/pendataan', function () {
    return view ('pendataan');
})-> name('pendataan');

Route::get('/', function(){
    return view('welcome');
});

Route::get('/akudatang', function(){
    return view('view_akudatang');
});

Route::get('/', [HitungController::class, 'hitung']);

Route::get('/daftar', [TestController::class, 'daftar']);
Route::get('/kirim', [TestController::class, 'kirim']);