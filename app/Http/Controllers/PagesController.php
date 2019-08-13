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
    
// EMAIL VIEW
    public function sponsorsReceipt() {
        return view('email.vestbank.accountWithdrawalReceipt');
    }
    public function vestbankPayReceipt() {
        return view('email.farm.sponsorshipReceipt');
    }
    public function vestbankFundReceipt() {
        return view('email.vestbank.accountFundingReceipt');
    }
// END

    public function login() {
        return view('pages.login');
    }

    public function register() {
        return view('pages.register');
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

    public function privacyPolicy() {
        return view('pages.privacy-policy');
    }

    public function team() {
        return view('pages.team');
    }

    public function dashboard() {
        return view('pages.dashboard.index');
    }
    public function dashboardHelpcenter() {
        return view('pages.dashboard.helpcenter');
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
    public function careers() {
        return view('pages.careers.index');
    }
    public function careerShow() {
        return view('pages.careers.show');
    }
    public function contactUs() {
        return view('pages.contact-us');
    }

    // Admin views

    public function sponsorsList(){
        return view('pages.admin.sponsors-list');
    }

    public function usersList(){
        return view('pages.admin.users-list');
    }

    public function vestbankUsersList(){
        return view('pages.admin.vestbank-users-list');
    }

    public function editFarmingCycle(){
        return view('pages.admin.edit-farming-cycle');
    }

    public function retainSponsorship(){
        return view('pages.admin.retain-sponsorship');
    }

    // error views
    public function error400() {
        return view('error.400');
    }
    public function error401() {
        return view('error.401');
    }
    public function error403() {
        return view('error.403');
    }
    public function error404() {
        return view('error.404');
    }
    public function error500() {
        return view('error.500');
    }

    // dashboard views
    public function dashboardIndex() {
        return view('dashboard.index');
    }
    public function dashboardVestbanking() {
        return view('dashboard.dashboard-vestbanking');
    }
 
}
