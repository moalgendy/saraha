<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\Auth\LoginController;

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
})->name('welcome');

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/users' , [MessageController::class, 'search'])->name('users');



Route::get('/send/{id}' , [MessageController::class, 'send'])->name('message.send');
Route::post('/send/{id}' , [MessageController::class, 'store'])->name('message.store');



Route::view('contact','contactForm')->name('contactForm');
Route::post('/send',[ContactController::class,'send'])->name('send.email');



//Route::get('/last-ten-visits-date' , [HomeController::class, 'LastTenVisitsData'])->name('last-ten-visits-date');

// Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
