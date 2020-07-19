<?php

use Illuminate\Support\Facades\Auth;
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
Route::get('/','HomeController@index');
 //Route::get('/about','HomeController@about');
 //Route::get('/contact','HomeController@contact');

 Route::get('/login','HomeController@login');
 Route::get('/create','HomeController@create');
 Route::post('/store','HomeController@store');
 Route::get('/delete/{id}', 'HomeController@delete' );

//Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
 Route::get("/logout",Function() {
     Auth::logout();
     return redirect("/login");
 }  )


