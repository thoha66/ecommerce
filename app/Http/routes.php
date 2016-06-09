<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


//Admin
Route::resource('staff', 'StaffController');

//Staff
Route::get('/dashbord', function () {
    return view('staff.dashboard');
});
Route::resource('product', 'ProductController');


//By Default
Route::get('/', function () {
    return view('welcome');
});
Route::auth();
Route::get('/home', 'HomeController@index');
