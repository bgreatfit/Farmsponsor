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
}
