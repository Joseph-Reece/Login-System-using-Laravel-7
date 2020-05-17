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

Route::get('profile', 'profile@index');

// routing a page
// Route::get('/sample', function () {
//     return view('sample');
// });

// A simpler way of routing a page
// when Routing files inside a folder, start with the folder name then . filename
Route::view('here','Pages.sample');
Route::post('register', 'accountController@save');
Route::post('login', 'accountController@login');


//Route HTTP
Route::view('user','Pages.HTTP');
Route::Post('submit','addressController@address');

// Routing  Controller Cars
/*  Route:: get('cars', 'Cars@index');
 Route:: get('show', 'Cars@show');

 Route::get('/', function () {
    return view('login');
}); */

Route::get('login', 'AuthController@index');
Route::post('post-login', 'AuthController@postLogin');
Route::get('registration', 'AuthController@registration');
Route::post('post-registration', 'AuthController@postRegistration');
Route::get('dashboard', 'AuthController@dashboard');
Route::get('logout', 'AuthController@logout');
