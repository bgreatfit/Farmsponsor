<?php
require_once 'admin.php';

//Auth::loginUsingId(591);

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
Route::get('team', 'PagesController@team')->name('team');
Route::get('vestbanking', 'PagesController@vestbanking')->name('aboutVestbanking');
Route::get('/helpcenter', 'PagesController@helpcenter')->name('helpcenter');
Route::get('/privacy-policy', 'PagesController@privacyPolicy')->name('privacyPolicy');
Route::get('/terms-and-conditions', 'PagesController@termsAndConditions')->name('termsAndConditions');
Route::get('sponsors-receipt', 'PagesController@sponsorsReceipt')->name('sponsorsReceipt');
Route::get('vestbank-pay-receipt', 'PagesController@vestbankPayReceipt')->name('vestbankPayReceipt');
Route::get('vestbank-fund-receipt', 'PagesController@vestbankFundReceipt')->name('vestbankFundReceipt');
Route::get('/careers', 'PagesController@careers')->name('careers');
Route::get('careers/show', 'PagesController@careerShow')->name('career.show');
Route::get('contact-us', 'PagesController@contactUs')->name('contactUs');
// Newsletter Route
Route::post('subscribe/newsletter', 'NewsletterController@subscribe')->name('newsletter.subscribe');
// Farm Routes
Route::get('/farmlist', 'FarmController@index')->name('farmlist');
Route::get('/farmlist/{farm}', 'FarmController@show')->name('farms.show');
//new password reset route
Route::get('/password-reset', 'PagesController@passwordReset')->name('passwordReset');



Route::group(['middleware' => ['usersonly']], function () {
// Users
Route::get('/profile', 'UserController@seeProfile')->name('user.profile');
Route::post('/profile', 'UserController@update')->name('user.store');

Route::get('/dashboard/farmlist', 'FarmController@dashboardFarmlist')->name('farms.all');
Route::post('/farmlist/{farm}', 'SponsorController@sponsor')->name('farms.sponsor');
Route::post('/farmlist/{farm}', 'SponsorController@sponsor')->name('farms.sponsor');
// Dashboard Routes
Route::get('/dashboard', 'PagesController@dashboard')->name('dashboard');
Route::get('/dashboard/sponsornow/{farm}', 'BankSponsorshipController@sponsorNow')->name('sponsornow');
Route::get('/dashboard/helpcenter', 'PagesController@dashboardHelpcenter')->name('dashboardHelpcenter');
// Payout Routes
Route::get('/dashboard/payout', 'PayoutController@index');
// VestBanking Routes
Route::get('/dashboard/vestbanking', 'VestbankController@index')->name('vestbanking');
Route::get('/dashboard/vestbanking/fund', 'FundingController@create')->name('funding.create');
Route::post('/dashboard/vestbanking/fund', 'FundingController@fund')->name('funding.add');
Route::post('/dashboard/vestbanking/withdraw', 'FundingController@withdraw')->name('funding.withdraw');
Route::post('/dashboard/sponsor/fund', 'BankSponsorshipController@sponsor')->name('banksponsorship.sponsor');
// Transactions Route
Route::get('/transactions', 'TransactionsController@index')->name('transactions.all');
Route::get('/transactions/history', 'TransactionsController@history')->name('transactions.history');
// Payout Routes
Route::get('/dashboard/payout', 'PayoutController@index');
// Users
Route::get('/profile', 'UserController@seeProfile')->name('user.profile');
Route::post('/profile', 'UserController@update')->name('user.store');
// Transactions Route
Route::get('/transactions', 'TransactionsController@index')->name('transactions.all');
Route::get('/transactions/history', 'TransactionsController@history')->name('transactions.history');
Route::get('/sendmail', 'MigrateUsersFromWordpressController@sendmails')->name('sendmails');
Route::get('/resetPassword/{email}/{token}', 'MigrateUsersFromWordpressController@resetPassword')->name('user.reset');
Route::post('/resetPassword/{token}', 'MigrateUsersFromWordpressController@processreset')->name('user.reset.process');
Route::get('retain/{cycleid}/{type}', 'RetainSponsorshipController@retain')->name('retain.sponsorship');
});

// Auth Routes
Auth::routes(['verify' => true]);

