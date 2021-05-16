<?php

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
    return view('welcome');
});

Route::get('/car', function () {
    return view('car');
})->name('car');

Route::get('/SUV', function () {
    return view('SUV');
})->name('SUV');

Route::get('/pickups', function () {
    return view('pickups');
})->name('pickups');

Route::get('/Bike', function () {
    return view('Bike');
})->name('Bike');





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';



