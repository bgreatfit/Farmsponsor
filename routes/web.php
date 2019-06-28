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

Route::get('/', 'PagesController@index')-> name('home');
Route::get('about', 'PagesController@about')->name('about');
Route::get('faq', 'PagesController@faq')->name('faq');
Route::get('gallery', 'PagesController@gallery')->name('gallery');
Route::get('vestbanking', 'PagesController@vestbanking')->name('aboutVestbanking');

// Newsletter Route
Route::post('subscribe/newsletter', 'NewsletterController@subscribe')->name('newsletter.subscribe');

// Farm Routes
Route::get('/farmlist', 'FarmController@index')->name('farmlist');
Route::get('/farmlist/{farm}', 'FarmController@show')->name('farms.show');




// Route::get('/farmlist', 'FarmsController@index');


// Users
Route::get('/profile', 'UserController@seeProfile')->name('user.profile');
Route::post('/profile', 'UserController@update')->name('user.store');



// Auth Routes
Auth::routes(['verify' => true]);

Route::group(['middleware' => ['usersonly']], function () {
    
Route::get('/helpcenter', 'PagesController@helpcenter')->name('helpcenter');
Route::get('/terms-and-conditions', 'PagesController@termsAndConditions')->name('termsAndConditions');

Route::get('/dashboard/farmlist', 'FarmController@dashboardFarmlist')->name('farms.all');
Route::post('/farmlist/{farm}', 'FarmController@sponsor')->name('farms.sponsor');

//new password reset route
Route::get('/password-reset', 'PagesController@passwordReset')->name('passwordReset');


// Dashboard Routes
Route::get('/dashboard', 'PagesController@dashboard')->name('dashboard');
Route::get('/dashboard/sponsor-now', 'PagesController@sponsorNow')->name('sponsornow');
Route::get('/dashboard/helpcenter', 'PagesController@dashboardHelpcenter')->name('dashboardHelpcenter');

// Payout Routes
Route::get('/dashboard/payout', 'PayoutController@index');
    // VestBanking Routes
Route::get('/dashboard/vestbanking', 'VestbankController@index')->name('vestbanking');
Route::get('/dashboard/vestbanking/deposit', 'VestbankController@showDepositPage')->name('vestbanking.showdepositpage');
Route::post('/dashboard/vestbanking/deposit', 'VestbankController@deposit')->name('vestbanking.deposit');
Route::post('/dashboard/vestbanking/withdraw', 'VestbankController@withdraw')->name('vestbanking.withdraw');

// Transactions Route
Route::get('/transactions', 'TransactionsController@index')->name('transactions.all');
Route::get('/transactions/history', 'TransactionsController@history')->name('transactions.history');

// Payout Routes
Route::get('/dashboard/payout', 'PayoutController@index');

// Route::get('/farmlist', 'FarmsController@index');

// Users
Route::get('/profile', 'UserController@seeProfile')->name('user.profile');
Route::post('/profile', 'UserController@update')->name('user.store');

// Transactions Route
Route::get('/transactions', 'TransactionsController@index')->name('transactions.all');
Route::get('/transactions/history', 'TransactionsController@history')->name('transactions.history');
Route::get('/sendmail', 'MigrateUsersFromWordpressController@sendmails')->name('sendmails');
Route::get('/resetPassword/{email}/{token}', 'MigrateUsersFromWordpressController@resetPassword')->name('user.reset');
Route::post('/resetPassword/{token}', 'MigrateUsersFromWordpressController@processreset')->name('user.reset.process');
});



