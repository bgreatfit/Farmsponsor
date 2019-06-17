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

    Route::get('', 'PagesController@admin');
    Route::get('farmcycles', 'Admin\DashboardController@farmcycle')->name('admin.farmcycles');
    Route::get('farmcycles/create', 'FarmController@create')->name('farms.create');
    Route::post('farmcycles/create', 'FarmController@store')->name('farms.store');
    Route::get('sponsors-list', 'PagesController@sponsorsList');
    Route::get('edit-farming-cycle', 'PagesController@editFarmingCycle');
    Route::get('deposits', 'Admin\DepositController@index')->name('admin.bankdeposits');
    Route::get('deposits/{deposit}', 'Admin\DepositController@confirm')->name('admin.confirmdeposit');
    Route::get('withdrawals', 'Admin\WithdrawalController@index')->name('admin.withdrawals');
    Route::get('withdrawals/{withdrawal}', 'Admin\WithdrawalController@confirm')->name('admin.confirmwithdrawal');
    Route::get('receipt', 'PagesController@receipt');
});