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


Auth::routes();

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/', 'PageController@home')->name('page.home');
Route::get('/about', 'PageController@about')->name('page.about');
Route::get('/contact', 'PageController@contact')->name('page.contact');
Route::get('/dashboard', 'UserController@dashboard')->name('user.dashboard');

Route::Resource('/coach', 'CoachController');
Route::Resource('/appointment', 'AppointmentController');
Route::get('/appointment/checkout', 'AppointmentController@checkout')->name('appointment.checkout');
