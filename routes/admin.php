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
    Route::get('deposit-requests', 'PagesController@depositRequests');
    Route::get('withdrawal-requests', 'PagesController@withdrawalRequests');
    Route::get('receipt', 'PagesController@receipt');
});
