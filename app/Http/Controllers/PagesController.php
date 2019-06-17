<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['only' => ['dashboard']]);
    }

    public function index() {
        return view('pages.index');
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
}
