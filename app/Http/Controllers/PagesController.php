<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Farm;

class PagesController extends Controller {
    public function __construct()
    {
        $this->middleware('auth', ['only' => ['dashboard']]);
    }

    //migration password reset 

    public function passwordReset() {
        return view('pages.user_migration.password-reset');
    }
    
    //end of migration password reset

    public function index() {
        $data['farms'] = Farm::orderBy('created_at','desc')->limit(4)->get();
        return view('pages.index', $data);
    }

    public function homepage() {
        return view('pages.homepage');
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

    public function helpcenter() {
        return view('pages.helpcenter');
    }

    public function termsAndConditions() {
        return view('pages.terms-and-conditions');
    }

    public function dashboard() {
        return view('pages.dashboard.index');
    }
    public function dashboardHelpcenter() {
        return view('pages.dashboard.helpcenter');
    }
    public function sponsorNow() {
        return view('pages.dashboard.sponsor-now');
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

    // Admin views

    public function sponsorsList(){
        return view('pages.admin.sponsors-list');
    }

    public function editFarmingCycle(){
        return view('pages.admin.edit-farming-cycle');
    }


    public function receipt(){
        return view('pages.admin.receipt');
    }
    public function receiptVestbank(){
        return view('pages.admin.receipt-vestbank');
    }
}
