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
    return view('welcome');
});

Route::get('/welcome', 'HomeController@welcome')->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('insert_jobseeker','JobSeekerController@insertform');
Route::post('Job Seeker Registration','JobSeekerController@create_jobseeker'); 


// route to show the login form
//Route::get('AdminLogin','LoginController@showadminlogin');

// route to process the form
//Route::post('Admin Login','LoginController@Admin_Login');