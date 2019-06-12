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

                    </ul>
                </div>
            </div>
        </nav>

        <main class="homepage-wrap">
            <section class="introduction-section">
                <div class="container-fluid container-block">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="introduction-content"> 
                                <div class="introduction__text-wrap">
                                    <h1 class="introduction__heading">
                                        Food Security Is The 
                                        <br/> 
                                        Responsibility Of Everyone
                                    </h1>
                                    <p class="introduction__text">
                                        Farmsponsor is an agric-tech company, where individuals
                                        sponsor farmers with their money for a 15% return
                                    </p>
                                    <p class="introduction__text">on their sponsorship.</p>
                                    <a href="{{route('farmlist')}}" class="homepage__btn">
                                        Sponsor Now  <img src="{{asset('img/greater-than-white.svg')}}" alt="greater than sign" class="sponsor-btn--icon ml-3">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="introduction-content">
                                <div class="introduction__picture">
                                    <a href="#" class="introduction__video">
                                        <img src="{{asset("img/")}}}" alt="a few chicks and some eggs" class="introduction__image"> 
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="invest-section">
                <div class="container-block">
                    <div class="invest-content">
                        <h2 class="invest__heading--main">Why Invest In Farmsponsor ?</h2>
                    </div>
                       
                    <div class="we-empower-farmers-block">
                        <div class="invest-content"> 
                            <div class="invest__empower-farmers">
                                <div class="icon-row">
                                    <div class="flex-row">
                                        <div class="flex-col-2">
                                            <div class="invest__icon">
                                                <img src="{{asset('img/flower-1.svg')}}" alt="a flower numbered one" class="homepage__icon">
                                            </div>
                                        </div>
                                        <div class="flex-col-2">
                                            <div class="invest__icon">
                                                <img src="{{asset('img/farmer.svg')}}" alt="a flower numbered one" class="homepage__icon">
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="text-row">
                                    <div class="flex-row">
                                        <div class="flex-col">
                                            <h3 class="invest__heading heading__sub--dark">We Empower Farmers</h3>
                                            <div class="invest__text-wrap">
                                                <p class="text__sub--dark">
                                                    We empower local farmers with funds from individuals and 
                                                    skills to produce at capacity or more and in return, you will 
                                                    get back your initial capital and a certain percentage of your 
                                                    initial capital (usually 15%) after harvest (Usually 12 weeks)
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--HOW-IT-WORKS-HEADING FOR LARGE/xL SCREENS -->
                                <div class="heading-row">
                                    <div class="flex-row">
                                        <div class="flex-col">
                                            <h1 class="how-it-works__heading">How The Farmsponsor App Works</h1>
                                        </div>
                                    </div>
                                </div>
                                <!--END OF HOW-IT-WORKS-HEADING -->
                            </div>
                        </div>
                        <div class="invest-content">
                            <div class="invest__returns">
                                <div class="icon-row">
                                    <div class="flex-row">
                                        <div class="flex-col-2">
                                            <div class="invest__icon">
                                                <img src="{{asset('img/flower-2.svg')}}" alt="a flower numbered two" class="homepage__icon">
                                            </div>
                                        </div>
                                        <div class="flex-col-2">
                                            <div class="invest__icon">
                                                <img src="{{asset('img/money-bag.svg')}}" alt="hand holding a bag of money" class="homepage__icon">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="text-row">
                                    <div class="flex-row">
                                        <div class="flex-col">
                                            <h3 class="invest__heading heading__sub--light ">Superior Returns For Our Sponsors</h3>
                                            <div class="invest__text-wrap">
                                                <p class="text__sub--light">
                                                    At an ROI of up to 15% on your capital investment over the farming season, 
                                                    Farmsponsor has the highest return on investment in the industry
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="invest__farming-cycle">
                                    <div class="icon-row">
                                        <div class="flex-row">
                                            <div class="flex-col-2">
                                                <div class="invest__icon">
                                                    <img src="{{asset('img/flower-3-2.svg')}}" alt="a flower numbered three" class="homepage__icon">
                                                </div>
                                            </div>
                                            <div class="flex-col-2">
                                                <div class="invest__icon">
                                                    <img src="{{asset('img/flowers-4.svg')}}" alt="four flowers forming a circle" class="homepage__icon">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-row">
                                        <div class="flex-row">
                                            <div class="flex-col">
                                                <h3 class="invest__heading heading__sub--light">
                                                    Multiple Farming Cycles
                                                </h3>
                                                <div class="invest__text-wrap">
                                                    <p class="text__sub--light">
                                                        In just over a year since we began operations, 
                                                        we've had over 14 farming cycles. This means that you 
                                                        have the potential to keep earning as much and as often 
                                                        as possible. This is residual income at it's finest. 
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        
            <section class="how-it-works-section">
                <div class="container-block">
                    <div class="how-it-works-block">
                        <div class="how-it-works-content">
                            <div class="how-it-works__create-account">
                                <!--HOW-IT-WORKS-HEADING FOR MEDIUM AND SMALL SCREENS-->
                                <div class="heading-row">
                                    <div class="flex-row">
                                        <div class="flex-col">
                                            <h1 class="how-it-works__heading">How The Farmsponsor App Works</h1>
                                        </div>
                                    </div>
                                </div>
                                <!--END OF HOW-IT-WORKS-HEADING -->

                                <div class="icon-row">
                                    <div class="flex-row">
                                        <div class="flex-col-2">
                                            <div class="how-it-works__icon">
                                                <img src="{{asset('img/flower-1-1.svg')}}" alt="a flower numbered two" class="homepage__icon">
                                            </div>
                                        </div>
                                        <div class="flex-col-2">
                                            <div class="how-it-works__icon">
                                                <img src="{{asset('img/farmer-no-tools.svg')}}" alt="hand holding a bag of money" class="homepage__icon">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="text-row">
                                    <div class="flex-row">
                                        <div class="flex-col">
                                            <div class">
                                                <h2 class="heading__sub--light">Create A User Account</h2>
    
                                                <p class="text__sub--light">
                                                    Simply signup using your email or social media account 
                                                    (Facebook and Twitter). Creating an account takes just a few seconds.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="how-it-works__sponsor">
                                    <div class="icon-row">
                                        <div class="flex-row">
                                            <div class="flex-col-2">
                                                <div class="invest__icon">
                                                    <img src="{{asset('img/flower-2.svg')}}" alt="a flower numbered three" class="homepage__icon">
                                                </div>
                                            </div>
                                            <div class="flex-col-2">
                                                <div class="invest__icon">
                                                    <img src="{{asset('img/flower-leaf.svg')}}" alt="four flowers forming a circle" class="homepage__icon">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="text-row">
                                        <div class="flex-row">
                                            <div class="flex-col">
                                                <h2 class="heading__sub--light">
                                                    Find A Farm To Sponsor
                                                </h2>
                                                <div class="invest__text-wrap">
                                                    <p class="text__sub--light">
                                                        Select a farm from our list of available farms ready for 
                                                        sponsorship on the current farm cycle, buy a specific number 
                                                        of units at N100,000.00 per unit and that's it. Just sit back 
                                                        and watch your investment grow. 
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
    
                        <div class="how-it-works-content"> 
                            <div class="how-it-works__row-wrap">
                                <div class="icon-row">
                                    <div class="flex-row">
                                        <div class="flex-col-2">
                                            <div class="how-it-works__icon">
                                                <img src="{{asset('img/flower-3.svg')}}" alt="a flower numbered one" class="homepage__icon">
                                            </div>
                                        </div>
                                        <div class="flex-col-2">
                                            <div class="how-it-works__icon">
                                                <img src="{{asset('img/clockwise-arrow.svg')}}" alt="a flower numbered one" class="homepage__icon">
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="text-row">
                                    <div class="flex-row">
                                        <div class="flex-col">
                                            <h2 class="heading__sub--dark">Stay Updated</h2>
                                            <div class="stay-updated__text-wrap">
                                                <p class="text__sub--dark">
                                                    Regularly check our updates to keep you informed on our 
                                                    promos, farm updates, blogs and others.
                                                </p>
                                            </div>
                                            <a href="{{route('login')}}" class="how-it-works__btn homepage__btn">
                                                Get Involved
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        
            <section class="statistics-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <div class="content-wrap text-center">
                                <h3 class="statistics__heading">
                                    We've been working so hard for you
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                      <!--stats counter -->
                        <div class="col-md-2 col-12 offset-md-1">
                            <div class="content-wrap">
                            <div class="row justify-content-center">
                                <img src="{{asset('img/stat-sponsors.svg')}}" alt="a group of people illustration" class="homepage__icon">
                                {{-- <i class="fas fa-user-tie sponsors"></i> --}}
                            </div>
                            <div class="row justify-content-center">
                                <span class="sponsor stat-update__figure"></span>
                            </div>
                            <div class="row justify-content-center">
                                <span class="stat-update__figure--label">Sponsors</span>
                            </div>
                            </div>
                        </div>

                        <div class="col-md-2 col-12">
                            <div class="content-wrap">
                            <div class="row justify-content-center">
                                <img src="{{asset('img/stat-cycles.svg')}}" alt="a group of people illustration" class="homepage__icon">
                                {{-- <i class="fas fa-user-circle cycles"></i> --}}
                            </div>
                            <div class="row justify-content-center">
                                <span class="cycle stat-update__figure"></span>
                            </div>
                            <div class="row justify-content-center">
                                <span class="stat-update__figure--label">cycles</span>
                            </div>
                            </div>
                        </div>
                        
                        <div class="col-md-2 col-12">
                            <div class="content-wrap">
                            <div class="row justify-content-center">
                                <img src="{{asset('img/stat-farms.svg')}}" alt="a group of people illustration" class="homepage__icon">
                                {{-- <i class="fas fa-kiwi-bird farm"></i> --}}
                            </div>
                            <div class="row justify-content-center">
                                <span class="stat-update__figure"><span class="farms" >0</span>&#43;</span>
                            </div>
                            <div class="row justify-content-center">
                                <span class="stat-update__figure--label">Farms</span>
                            </div>
                            </div>
                        </div>
                
                        <div class="col-md-2 col-12">
                            <div class="content-wrap">
                            <div class="row justify-content-center">
                                <img src="{{asset('img/stat-farmers.svg')}}" alt="a group of people illustration" class="homepage__icon">
                                {{-- <i class="fas fa-users farmer"></i> --}}
                            </div>
                            <div class="row justify-content-center">
                                <span class="stat-update__figure"><span class="farmers">0</span>&#43;</span>
                            </div>
                            <div class="row justify-content-center">
                                <span class="stat-update__figure--label">Farmers</span>
                            </div>
                            </div>
                        </div>
                
                        <div class="col-md-2 col-12">
                            <div class="content-wrap">
                                <div class="row justify-content-center">
                                    <img src="{{asset('img/stat-reviews.svg')}}" alt="a group of people illustration" class="homepage__icon">
                                
                                {{-- <i class="fas fa-comments review"></i> --}}
                                </div>
                                <div class="row justify-content-center">
                                <span class="stat-update__figure"><span class="reviews">0</span>&#43;</span>
                                </div>
                                <div class="row justify-content-center">
                                <span class="stat-update__figure--label">Reviews</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="testimonials-section">
                <div class="container-fluid container-block">
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <div class="testimonials-block">
                                <h3 class="testimonials__heading">
                                    Sponsor a farmer together we can stop hunger.
                                </h3>
                            </div>
                        </div>
                     
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-4">
                            <div class="testimonials-block">
                                <div class="testimonials-content">
                                    <div class="testimonials__image-wrap">
                                        <img src="{{asset('img/fs-pic10.jpeg')}}" alt="photo of a Farmsponsor client" class="testimonials__image">
                                    </div>
                                    <p class="testimonials__text">Robert Martins</p>
                                    <p class="testimonials__text--description">Sponsor</p>
                                    <p class="testimonials__comment">
                                        I just got my alert. You guys are the bomb. I got 
                                        my alert! Great guys, I look forward for my farming 
                                        windows. Let's do this again guys!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-4">
                            <div class="testimonials-block">
                                <div class="testimonials-content">
                                   <div class="testimonials__image-wrap">
                                        <img src="{{asset('img/fs-pic9.jpeg')}}" alt="photo of a Farmsponsor client" class="testimonials__image">
                                   </div>
                                    <p class="testimonials__text">Olaitan R</p>
                                    <p class="testimonials__text--description">Sponsor</p>
                                    <p class="testimonials__comment">
                                        I got my alert. My bank was messing up but you guys 
                                        even called me to get another account number. Thank you 
                                        so much! Next cycle, I'll definitely invest. 
                                        You are tested and trusted.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-4">
                            <div class="testimonials-block">
                                <div class="testimonials-content">
                                    <div class="testimonials__image-wrap">
                                        <img src="{{asset('img/fs-pic11.jpeg')}}" alt="photo of a Farmsponsor client" class="testimonials__image">
                                    </div>
                                    <p class="testimonials__text">Bala Gana</p>
                                    <p class="testimonials__text--description">Sponsor</p>
                                    <p class="testimonials__comment">
                                        Payout Day! I have received mine. Thank you so much 
                                        Farmsponsor. You kept your word. Next farming window please! 
                                        #FoodSecurityForAll.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

            <section class="farmlist-section">
                <div class="container-fluid container-block">
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <div class="farmlist-content">
                                <h3 class="farmlist__heading">
                                    Explore our farm circles and pick a farm to sponsor 
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="farmlist-content">
                                @include('includes.farmsCard')
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="farmlist-content">
                                @include('includes.farmsCard')
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="farmlist-content">
                                @include('includes.farmsCard')
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="farmlist-content">
                                @include('includes.farmsCard')
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <div class="farmlist-content">
                                <div class="farmlist__more">
                                    <a href="{{asset('farmlist')}}" class="farmlist__more--btn homepage__btn">More <img src="{{asset('img/greater-than.svg')}}" alt="greater than sign" class="sponsor-btn--icon ml-3"> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="insurance-section">
                <div class="container-fluid container-block">
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <div class="insurance-content">
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <div class="insurance__image">
                                            <div class="insurance__shield-wrap">
                                                <img src="{{asset('img/shield.svg')}}" alt="Green shield photo" class="insurance__shield">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <div class="insurance__text-wrap">
                                            <h2 class="insurance__heading">A Robust Insurance Policy</h2>
                                            <p class="insurance__text">
                                                Farmsponsor has your investment covered with a robust 
                                                insurance policy. Our farms are comprehensively insured 
                                                by Leadway Assurance plc.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                              
                               
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="partner-section">
                <div class="container container-block">
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <div class="partners__heading-wrap">
                                <h3 class="partners__heading mb-2">Partners</h3>
                                <p class="partners__text">
                                    Driving agri-tech to provide food for all Africans
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="partners-content">
                                <div class="partners__image">
                                    <img src="{{asset('img/fs-pic3.png')}}" alt="" class="insurance__image--img">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="partners-content">
                                <div class="partners__image">
                                    <img src="{{asset('img/fs-pic5.png')}}" alt="" class="insurance__image--img">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="partners-content">
                                <div class="partners__image">
                                    <img src="{{asset('img/fs-pic4.png')}}" alt="" class="insurance__image--img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="page-footer">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-6">
                        <div class="footer__segment">
                            <p class="footer__subscribe--text mb-0">
                                Ready To Get More Updates 
                            </p>
                            <p class="footer__subscribe--text">
                                From Farmsponsor?
                            </p>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-6">
                        <div class="footer__segment">
                            <form action="" class="footer__form">
                                <div class="form-row">
                                    <div class="col-md-8 col-8">
                                        <input type="text" class="form-control footer__input" placeholder="Enter email" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    </div>
                                    <div class="col-md-4 col-4">
                                        <button class="btn btn-outline-secondary" type="button">Subscribe</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="footer__content">
                            <div class="row">
                                <div class="col-md-12 col-12">
                                    <p class="footer__text">Help</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <div class="footer__item"><a href="#" class="footer__links">FAQs</a></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <div class="footer__item"><a href="#" class="footer__links">Contact</a></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <div class="footer__item"><a href="#" class="footer__links">Terms and Conditions</a></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <div class="footer__item"><a href="#" class="footer__links">Pricy Policy</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="footer__content">
                            <div class="row">
                                <div class="col-md-12 col-12">
                                    <p class="footer__text">FARMSPONSOR</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <div class="footer__item"><a href="#" class="footer__links">Home</a></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <div class="footer__item"><a href="#" class="footer__links">About</a></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <div class="footer__item"><a href="#" class="footer__links">Vestbanking</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="footer__content">
                            <div class="row">
                                <div class="col-md-12 col-12">
                                    <p class="footer__text">GET STARTED</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <div class="footer__item"><a href="#" class="footer__links">Home</a></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <div class="footer__item"><a href="#" class="footer__links">About</a></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <div class="footer__item"><a href="#" class="footer__links">Vestbanking</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="footer__content">
                            <div class="row">
                                <div class="col-md-12 col-12">
                                    <p class="footer__text">PORT HARCOURT</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <div class="footer__item"><a href="#" class="footer__links">Home</a></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <div class="footer__item"><a href="#" class="footer__links">About</a></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <div class="footer__item"><a href="#" class="footer__links">Vestbanking</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <div class="row">
                    <div class="col-12 col-md-12">
                        <div class="footer__content">
                            <div class="row">
                                <div class="col-md-12 col-12">
                                    <p class="footer__text">CONNECT</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <div class="footer__item footer__item--social">
                                        <a href="#" class="footer__links mr-3"><i class="fab fa-facebook-square footer__icon footer__icon--fb"></i></a>
                                        <a href="#" class="footer__links mr-3"><i class="fab fa-instagram footer__icon footer__icon--ig"></i></a>
                                        <a href="#" class="footer__links"><i class="fab fa-twitter-square footer__icon footer__icon--twt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-12">
                        <div class="footer__copyright">
                            <p class="footer__copyright--text">Copyright &copy; Globetrot Farmsponsor Nig Ltd 2019</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
              
    </body>
</html>