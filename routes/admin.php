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
    Route::get('farmcycles/searchname', 'Admin\FarmController@searchByName')->name('farms.searchname');
    Route::get('farmcycles/searchtransactionid', 'Admin\FarmController@searchByTransactionId')->name('farms.searchtransactionid');
    Route::get('sponsorship/{sponsor}/confirm', 'Admin\SponsorController@confirm')->name('sponsorship.confirm');
    Route::get('sponsorship/{sponsor}/reverse', 'Admin\SponsorController@reverse')->name('sponsorship.reverse');
    Route::get('sponsorship/{sponsor}/delete', 'Admin\SponsorController@delete')->name('sponsorship.delete');
    Route::get('banksponsorship/{bankSponsor}/confirm', 'Admin\BankSponsorshipController@confirm')->name('banksponsorship.confirm');
    Route::get('banksponsorship/{sponsor}/reverse', 'Admin\BankSponsorshipController@reverse')->name('banksponsorship.reverse');
    Route::get('banksponsorship/{sponsor}/delete', 'Admin\BankSponsorshipController@delete')->name('banksponsorship.delete');
    Route::get('deposits', 'Admin\FundingController@index')->name('admin.bankdeposits');
    Route::get('deposits/{deposit}/confirm', 'Admin\FundingController@confirm')->name('admin.confirmfunding')->middleware('confirmed');
    Route::get('deposits/{deposit}/reverse', 'Admin\FundingController@reverse')->name('admin.reversefunding');
    Route::get('deposits/{funding}/delete', 'Admin\FundingController@delete')->name('admin.deletefunding');
    Route::get('deposits/searchname', 'Admin\FundingController@searchByName')->name('funding.searchname');
    Route::get('deposits/searchtransactionid', 'Admin\FundingController@searchByTransactionId')->name('funding.searchtransactionid');
    Route::get('withdrawals', 'Admin\WithdrawalController@index')->name('admin.withdrawals');
    Route::get('withdrawals/{withdrawal}/confirm', 'Admin\WithdrawalController@confirm')->name('admin.confirmwithdrawal');
    Route::get('withdrawals/{withdrawal}/reverse', 'Admin\WithdrawalController@reverse')->name('admin.reversewithdrawal');
    Route::get('withdrawals/{withdrawal}/delete', 'Admin\WithdrawalController@delete')->name('admin.deletewithdrawal');
    Route::get('vestbank-users-list', 'PagesController@vestbankUsersList')->name('vestbankUsersList');
    Route::get('retain-sponsorship', 'PagesController@retainSponsorship')->name('retainSponsorship');
    Route::get('users', 'Admin\UsersController@index')->name('admin.users');
    Route::get('users/searchname', 'Admin\UsersController@searchByName')->name('users.searchname');
    Route::get('contacts', 'Admin\ContactController@index')->name('admin.contact');
    Route::get('contacts/{contact}', 'Admin\ContactController@show')->name('admin.contact.show');
    Route::get('contacts/{contact}/resolve', 'Admin\ContactController@resolve')->name('admin.contact.resolve');
    Route::get('contacts/{contact}/unresolve', 'Admin\ContactController@unresolve')->name('admin.contact.unresolve');

});