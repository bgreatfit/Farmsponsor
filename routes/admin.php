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
    Route::get('farmcycles', 'Admin\DashboardController@farmcycle')->name('admin.farmcycles');
    Route::get('farmcycles/create', 'FarmController@create')->name('farms.create');
    Route::post('farmcycles/create', 'FarmController@store')->name('farms.store');
    Route::get('farmcycles/{farm}/edit', 'FarmController@edit')->name('farms.edit');
    Route::get('farmcycles/{farm}/soldout', 'FarmController@soldout')->name('farms.soldout');
    Route::get('farmcycles/{farm}/open', 'FarmController@open')->name('farms.open');
    Route::get('farmcycles/{farm}/payout', 'FarmController@payout')->name('farms.payout');
    Route::get('farmcycles/{farm}/stoppayout', 'FarmController@stoppayout')->name('farms.stoppayout');
    Route::get('sponsors-list', 'PagesController@sponsorsList');
    Route::get('deposits', 'Admin\DepositController@index')->name('admin.bankdeposits');
    Route::get('deposits/{deposit}', 'Admin\DepositController@confirm')->name('admin.confirmdeposit');
    Route::get('withdrawals', 'Admin\WithdrawalController@index')->name('admin.withdrawals');
    Route::get('withdrawals/{withdrawal}', 'Admin\WithdrawalController@confirm')->name('admin.confirmwithdrawal');
    Route::get('receipt', 'PagesController@receipt');
});
