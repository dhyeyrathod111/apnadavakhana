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

Route::prefix('admin')->group(function () {
	Route::get('/login', 'AdminController@loginform')->name('adminlogin');
	Route::get('/registration', 'AdminController@adminregistrationform')->name('adminregistration');
	Route::post('/registrationprocess','AdminController@registrationprocess')->name('registrationprocess');
	Route::post('/loginprocess','AdminController@loginprocess')->name('loginprocess');
	Route::get('/logout','AdminController@adminlogout')->name('adminlogout');
	Route::get('/memberarea','AdminController@memberarea')->name('memberarea');
	Route::post('/datatable_memberlist','AdminController@datatable_memberlist')->name('datatable_memberlist');
	Route::resource('/', AdminController::class);
});

Route::get('/test', function() {
    \Artisan::call('config:cache');
    \Artisan::call('config:cache');
    \Artisan::call('view:clear');
    \Artisan::call('optimize:clear');
    \Session::flush();
});


// Route::get('/home', 'HomeController@index')->name('home');
// Auth::routes();
