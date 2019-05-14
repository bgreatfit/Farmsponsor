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
Route::get('/admin/farmingcycle', 'PagesController@farmingcycle');
Route::get('/admin/sponsors-list', 'PagesController@sponsorsList');
Route::get('/dashboard/farmlist', 'PagesController@dashboardFarms');
Route::get('/dashboard/transactions', 'PagesController@transactions');
Route::get('/dashboard/vestbanking', 'PagesController@vestbanking');
Route::get('/dashboard/payout', 'PagesController@payout');
Route::get('/dashboard/farmcycle', 'PagesController@farmcycle');


// Newsletter Route
Route::post('subscribe/newsletter', 'NewsletterController@subscribe')->name('newsletter.subcribe');

// Users
Route::get('/profile', 'UserController@seeProfile')->name('user.profile');
Route::post('/profile', 'UserController@update')->name('user.store');


Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

// Auth Routes
Auth::routes(['verify' => true]);

// VestBanking Routes
Route::get('/dashboard/vestbanking', 'VestbankController@index')->name('vestbanking');

