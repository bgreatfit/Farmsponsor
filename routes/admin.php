<?php

/*
|--------------------------------------------------------------------------
| Admin Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin web routes for your application.
| These routes are loaded by the RouteServiceProvider within a group
| which contains the "web" middleware group. Now create something
| great!
*/

Route::group(['prefix'  =>  'admin', 'middleware' => ['auth', 'admin']], function () {

    Route::get('', 'PagesController@admin')->name('admin.dashboard');
    Route::get('farmcycles', 'Admin\FarmController@index')->name('admin.farmcycles');
    Route::get('farmcycles/create', 'Admin\FarmController@create')->name('farms.create');
    Route::post('farmcycles/create', 'Admin\FarmController@store')->name('farms.store');
    Route::get('farmcycles/{farm}/edit', 'Admin\FarmController@edit')->name('farms.edit');
    Route::put('farmcycles/{farm}/edit', 'Admin\FarmController@update')->name('farms.update');
    Route::get('farmcycles/{farm}/show', 'Admin\FarmController@show')->name('admin.farmshow');
    Route::get('farmcycles/{farm}/soldout', 'Admin\FarmController@soldout')->name('farms.soldout');
    Route::get('farmcycles/{farm}/open', 'Admin\FarmController@open')->name('farms.open');
    Route::get('farmcycles/{farm}/payout', 'Admin\FarmController@payout')->name('farms.payout');
    Route::get('farmcycles/{farm}/stoppayout', 'Admin\FarmController@stoppayout')->name('farms.stoppayout');
    Route::get('sponsorship/{sponsor}/confirm', 'Admin\SponsorController@confirm')->name('sponsorship.confirm');
    Route::get('sponsorship/{sponsor}/reverse', 'Admin\SponsorController@reverse')->name('sponsorship.reverse');
    Route::get('sponsorship/{sponsor}/delete', 'Admin\SponsorController@delete')->name('sponsorship.delete');
    Route::get('banksponsorship/{bankSponsor}/confirm', 'Admin\BankSponsorshipController@confirm')->name('banksponsorship.confirm');
    Route::get('banksponsorship/{sponsor}/reverse', 'Admin\BankSponsorshipController@reverse')->name('banksponsorship.reverse');
    Route::get('banksponsorship/{sponsor}/delete', 'Admin\BankSponsorshipController@delete')->name('banksponsorship.delete');
    Route::get('deposits', 'Admin\DepositController@index')->name('admin.bankdeposits');
    Route::get('deposits/{deposit}/confirm', 'Admin\DepositController@confirm')->name('admin.confirmdeposit')->middleware('confirmed');
    Route::get('deposits/{deposit}/reverse', 'Admin\DepositController@reverse')->name('admin.reversedeposit');
    Route::get('withdrawals', 'Admin\WithdrawalController@index')->name('admin.withdrawals');
    Route::get('withdrawals/{withdrawal}/confirm', 'Admin\WithdrawalController@confirm')->name('admin.confirmwithdrawal');
    Route::get('withdrawals/{withdrawal}/reverse', 'Admin\WithdrawalController@reverse')->name('admin.reversewithdrawal');
    Route::get('withdrawals/{withdrawal}/delete', 'Admin\WithdrawalController@delete')->name('admin.deletewithdrawal');
    Route::get('receipt', 'PagesController@receipt');
    Route::get('receipt-vestbank', 'PagesController@receiptVestbank');
    Route::get('users-list', 'PagesController@usersList')->name('usersList');
});
