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
Route::get('/gallery', 'PagesController@gallery');
Route::get('/about', 'PagesController@about');

// Admin Routes
Route::get('/admin', 'PagesController@admin');
Route::get('/admin/farmingcycle', 'PagesController@farmingcycle');
Route::get('/admin/sponsors-list', 'PagesController@sponsorsList');
Route::get('/admin/edit-farming-cycle', 'PagesController@editFarmingCycle');
Route::get('/admin/deposit-requests', 'PagesController@depositRequests');
Route::get('/admin/withdrawal-requests', 'PagesController@withdrawalRequests');
Route::get('/admin/receipt', 'PagesController@receipt');

// Dashboard Routes
Route::get('/dashboard', 'PagesController@dashboard')->name('dashboard');
Route::get('/dashboard/deposit', 'PagesController@deposit');
Route::get('/dashboard/transaction-details', 'PagesController@transactionDetails');
Route::get('/dashboard/farmcycle', 'PagesController@farmcycle');
Route::get('/dashboard/payout', 'PagesController@payout');
Route::get('/dashboard/vestbanking', 'PagesController@vestbanking');

// Farm Routes
Route::get('/farmlist', 'FarmController@index')->name('farms.all');
Route::get('/farmlist/create', 'FarmController@create')->name('farms.create');
Route::post('/farmlist/create', 'FarmController@store')->name('farms.store');
Route::get('/farmlist/{farm}', 'FarmController@show')->name('farms.show');
Route::post('/farmlist/{farm}', 'FarmController@sponsor')->name('farms.sponsor');

// Route::get('/farmlist', 'FarmsController@index');

// Newsletter Route
Route::post('subscribe/newsletter', 'NewsletterController@subscribe')->name('newsletter.subcribe');

// Users
Route::get('/profile', 'UserController@seeProfile')->name('user.profile');
Route::post('/profile', 'UserController@update')->name('user.store');

// Transactions Route
Route::get('/transactions', 'TransactionsController@index')->name('transactions.all');
Route::get('/transactions/history', 'TransactionsController@history')->name('transactions.history');

// Auth Routes
Auth::routes(['verify' => true]);

// VestBanking Routes
Route::get('/dashboard/vestbanking', 'VestbankController@index')->name('vestbanking');

