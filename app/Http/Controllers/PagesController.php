<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('pages.index');
    }
    public function login() {
        return view('pages.login');
    }
    public function register() {
        return view('pages.register');
    }

    public function gallery() {
        return view('pages.gallery');
    }
    public function vestbanking() {
        return view('pages.vestbanking');
    }
    public function dashboard() {
        return view('pages.dashboard.index');
    }
    public function about() {
        return view('pages.about');
    }
    public function faq() {
        return view('pages.faq');
    }
    public function admin() {
        return view('pages.admin');
    }

    // Dashboard views

    public function transactions(){
        return view('pages.dashboard.transactions');
    }
    public function deposit(){
        return view('pages.dashboard.deposit');
    }
    public function transactionDetails(){
        return view('pages.dashboard.transaction-details');
    }
    public function payout(){
        return view('pages.dashboard.payout');
    }
    public function farmcycle(){
        return view('pages.dashboard.farmcycle');
    }

    // Admin views
    public function farmingcycle(){
        return view('pages.admin.farmingcycle');
    }
    public function sponsorsList(){
        return view('pages.admin.sponsors-list');
    }

    public function editFarmingCycle(){
        return view('pages.admin.edit-farming-cycle');
    }
    public function depositRequests(){
        return view('pages.admin.deposit-requests');
    }
    public function withdrawalRequests(){
        return view('pages.admin.withdrawal-requests');
    }
    public function receipt(){
        return view('pages.admin.receipt');
    }
}
