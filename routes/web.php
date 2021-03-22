<?php

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
    return view('website.homepage');
});

Route::resource('member', MemberController::class);
Route::post('/otpformprocess', 'MemberController@otpformprocess')->name('otp_process');
Route::post('/load_persnalinformation', 'MemberDetailController@load_persnalinformation')->name('loadpersnalinformation');

Route::resource('member_details', MemberDetailController::class);




Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
