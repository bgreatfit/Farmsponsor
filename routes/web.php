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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/faq', 'PagesController@faq');
// Route::get('/login', 'PagesController@login');
Route::get('/register', 'PagesController@register');
Route::get('/farmlist', 'PagesController@farmList');
Route::get('/gallery', 'PagesController@gallery');
Route::get('/dashboard', 'PagesController@dashboard');
Route::get('/about', 'PagesController@about');
Route::get('/admin', 'PagesController@admin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
