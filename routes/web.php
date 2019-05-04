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
Route::get('/farmlist', 'PagesController@farmList');
Route::get('/gallery', 'PagesController@gallery');
Route::get('/about', 'PagesController@about');
Route::get('/admin', 'PagesController@admin');
Route::get('/dashboard/profile', 'PagesController@profile');
Route::get('/dashboard/farmlist', 'PagesController@dashboardFarms');
Route::get('/dashboard/transactions', 'PagesController@transactions');
Route::get('/dashboard/vestbanking', 'PagesController@vestbanking');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
