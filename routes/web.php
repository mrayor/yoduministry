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



Route::get('/', 'PagesController@index')->name('home');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/blog', 'PagesController@blog')->name('blog');
Route::get('/contact', 'ContactsController@contact')->name('contact');
Route::post('/contact', 'ContactsController@postContact')->name('postContact');

//remove to make dynamic
Route::get('/singleblog', 'PagesController@singleblog')->name('singleblog');
Route::get('/register', 'RegisterController@register')->name('register');
Route::post('/register', 'RegisterController@postRegister')->name('postRegister');

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');