<?php
require_once 'admin.php';
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
Route::get('/homepage', 'PagesController@homepage');
Route::get('about', 'PagesController@about')->name('about');
Route::get('faq', 'PagesController@faq')->name('faq');
Route::get('gallery', 'PagesController@gallery')->name('gallery');
Route::get('vestbanking', 'PagesController@vestbanking')->name('aboutVestbanking');

// Dashboard Routes
Route::get('/dashboard', 'PagesController@dashboard')->name('dashboard');

// Farm Routes
Route::get('/farmlist', 'FarmController@index')->name('farmlist');
Route::get('/dashboard/farmlist', 'FarmController@dashboardFarmlist')->name('farms.all');

Route::get('/farmlist/{farm}', 'FarmController@show')->name('farms.show');
Route::post('/farmlist/{farm}', 'FarmController@sponsor')->name('farms.sponsor');


// VestBanking Routes
Route::get('/dashboard/vestbanking', 'VestbankController@index')->name('vestbanking');
Route::get('/dashboard/vestbanking/deposit', 'VestbankController@showDepositPage')->name('vestbanking.showdepositpage');
Route::post('/dashboard/vestbanking/deposit', 'VestbankController@deposit')->name('vestbanking.deposit');
Route::post('/dashboard/vestbanking/withdraw', 'VestbankController@withdraw')->name('vestbanking.withdraw');


// Payout Routes
Route::get('/dashboard/payout', 'PayoutController@index');

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

