<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Farmsponsor | Nigeria's Number One Agri-Tech Platform</title>
            {{-- FAV ICON --}}
        <link rel="shortcut icon" type="image/png" href="img/favicon.png">

            {{-- fonts --}}
        <link rel="stylesheet" type="text/css" media="screen" href="/css/icon-font.css">
        <link href="{{ asset('css/sweetalert.css') }}" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Work+Sans&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Mukta|Questrial|Exo|Lato:100i|Kalam|Montserrat|Roboto|Montserrat:700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
        crossorigin="anonymous">

            {{-- Toastr --}}
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

        <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/app.css')}}">
    </head>
    <body >
        <div class="dashboard-wrapper">
            <div class="dashboard-header">
                <div class="dashboard-header__brand">
                    <a href="#" class="dashboard-header__brand--logo">Farmsponsor</a>   </div>
                <div class="dashboard-header__account">
                    <div class="dropdown">
                        <a href="#" class="dashboard-header__user dropdown-toggle" role="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Isaac
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        </div>
                    </div>
                    <span><img src="{{asset('img/dashboard-header-account.svg')}}" alt="user avatar" class="dashboard-header__account--avatar"></span>
                </div>
            </div>
        
            <div class="dashboard-side-bar">
                <ul class="dashboard-side-bar__nav">
                    <li class="active">
                        <a href="#" class="nav-link">
                            <span><img src="{{asset('img/dashboard-home.svg')}}" alt="" class="nav-link__dashboard-icon"></span>
                            <span class="nav-link__text">Dashboard</span> 
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link">
                            <span><img src="{{asset('img/dashboard-farmlist.svg')}}" alt="" class="nav-link__dashboard-icon"></span>
                            <span class="nav-link__text">Farmlist</span>    
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link">
                            <span><img src="{{asset('img/dashboard-transactions.svg')}}" alt="" class="nav-link__dashboard-icon"></span>
                            <span class="nav-link__text">Transactions</span> 
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link">
                            <span><img src="{{asset('img/dashboard-vestbanking.svg')}}" alt="" class="nav-link__dashboard-icon"></span>
                            <span class="nav-link__text">Vestbanking</span>   
                        </a>
                    </li>
        
                    <li>
                        <a href="#" class="nav-link">
                            <span><img src="{{asset('img/dashboard-helpcenter.svg')}}" alt="" class="nav-link__dashboard-icon"></span>
                            <span class="nav-link__text">Helpcenter</span>   
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        class="nav-link">
                            <span><img src="{{asset('img/dashboard-logout.svg')}}" alt="" class="nav-link__dashboard-icon"></span>
                            <span class="nav-link__text">Logout</span> 
                        </a>
        
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        
            <div class="dashboard-main-content">
                
        </div>
    </div>
    </body>
    @include('includes.scripts')
</html>
