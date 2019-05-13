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
    public function farmList() {
        return view('pages.farmlist');
    }
    public function gallery() {
        return view('pages.gallery');
    }
    public function dashboard() {
        return view('pages.dashboard');
    }
    public function about(){
        return view('pages.about');
    }
    public function faq(){
        return view('pages.faq');
    }
    public function admin(){
        return view('pages.admin');
    }

    public function dashboardFarms(){
        return view('pages.dashboard.farmlist');
    }
    public function vestbanking(){
        return view('pages.dashboard.vestbanking');
    }
    public function transactions(){
        return view('pages.dashboard.transactions');
    }
    public function payout(){
        return view('pages.dashboard.payout');
    }
    public function farmcycle(){
        return view('pages.dashboard.farmcycle');
    }
}
