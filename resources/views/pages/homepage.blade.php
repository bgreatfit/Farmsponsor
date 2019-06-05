<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Farm Sponsor</title>
        {{-- fonts --}}
        <link rel="stylesheet" type="text/css" media="screen" href="/css/icon-font.css">
        <link href="{{ asset('css/sweetalert.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

        <link href="https://fonts.googleapis.com/css?family=Mukta|Questrial|Exo|Lato:100i|Kalam|Montserrat|Roboto" rel="stylesheet">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
        crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel navigation-bar">
            <div class="container-fluid">
                <a class="navbar-brand navi-bar__brand" href="{{ url('/') }}">
                    <img src="{{asset('img/farmsponsor-logo.svg')}}" alt="Farmsponsor logo" class="navi-bar__picture">
                </a>
        
                <button class="navbar-toggler navi__toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon navi__toggler--icon"></span>
                </button>
        
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
                    <ul class="navbar-nav ml-auto navbar__navi">
                        <!-- Authentication Links -->
        
                            <li class="nav-item navi__item">
                                <a class="nav-link navi__i" href="{{route('about')}}">About us</a>
                            </li>
                            <li class="nav-item navi__item">
                                <a class="nav-link navi__i" href="{{route('farmlist')}}">Farm List</a>
                            </li>
                            <li class="nav-item navi__item">
                                <a class="nav-link navi__i" href="{{route('aboutVestbanking')}}">VestBanking</a>
                            </li>
                            <li class="nav-item navi__item">
                                <a class="nav-link navi__i" href="https://farmsponsor.com.ng/latest-updates" target="_blank">Blog</a>
                            </li>
                            <li class="nav-item navi__item">
                                <a class="nav-link navi__i" href="{{route('gallery')}}">Gallery</a>
                            </li>

                            <li class="nav-item navi__item dropdown">
                                <a id="navbarDropdown" class="nav-link navi__i dropdown-toggle"
                                href="#" role="button" data-toggle="dropdown" aria-haspopup="true" 
                                aria-expanded="false" v-pre> Get Help</a>
        
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item dropdown-item__link" href="#">Contact Us</a>
                                    <a class="dropdown-item dropdown-item__link" href="{{ route('faq') }}">FAQs</a>
                                </div>
        
                            </li>

                            <li class="nav-item navi__item">
                                <a class="nav-link navi__i" href="{{ route('register') }}">{{ __('Sign Up') }}</a>
                                {{-- <a class="nav-link navi__i" href="{{route('gallery')}}">Sign Up</a> --}}
                            </li>
                            
                            <li class="nav-item navi__item">
                                <a class="nav-link navi__i" href="{{ route('login') }}">{{ __('Login') }}</a>
                                {{-- <a class="nav-link navi__i" href="{{route('gallery')}}">Login</a> --}}
                            </li>
{{-- 

                            <li class="nav-item navi__item dropdown">
                                <a id="navbarDropdown" class="nav-link navi__i dropdown-toggle"
                                href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" v-pre>Account</a>
        
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item dropdown-item__link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    <a class="dropdown-item dropdown-item__link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </div>
        
                            </li> --}}
                    </ul>
                </div>
            </div>
        </nav>
    </body>
</html>