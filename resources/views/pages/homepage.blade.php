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


                            {{-- <li class="nav-item navi__item dropdown">
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

        <main class="homepage-wrap">
            <section class="introduction-section">
                <div class="container-fluid container-block">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="introduction-content"> 
                                <h1 class="introduction__heading">
                                    Food Security Is The 
                                    <br/> 
                                    Responsibility Of Everyone
                                </h1>
                                <p class="introduction__text">
                                    Farmsponsor is an agric-tech company, where individuals
                                    sponsor farmers with their money for a 15% return
                                    on their sponsorship.
                                </p>
                                <a href="{{route('farmlist')}}" class="introduction__text">
                                    Sponsor Now
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="introduction-content">
                                <div class="introduction__picture">
                                    <img src="{{asset("img/")}}}" alt="a few chicks and some eggs" class="introduction__image"> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="invest-section">
                <div class="container-fluid container-block">
                    <div class="row">
                        <div class="col-12">
                            <div class="invest-content">
                                <p class="invest__heading">Why Invest In Farmsponsor</p>
                            </div>
                        </div>
                    </div>
                    <div class="row we-empower-farmers-block">
                        <div class="col-md-6 col-12">
                            <div class="invest-content"> 
                                <div class="invest__empower-farmers">
                                    <div class="icon-row">
                                        <div class="row">
                                            <div class="col-sm-6 col-md-6 col-6">
                                                <div class="invest__icon">
                                                    <img src="{{asset('img/flower-1.svg')}}" alt="a flower numbered one" class="homepage__icon">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-6">
                                                <div class="invest__icon">
                                                    <img src="{{asset('img/farmer.svg')}}" alt="a flower numbered one" class="homepage__icon">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                   <div class="text-row">
                                        <div class="row">
                                            <div class="col-12 col-md-12">
                                                <h2 class="invest__heading">We Empower Farmers</h2>
                                                <div class="invest__text-wrap">
                                                    <p class="invest__text">
                                                        We empower local farmers with funds from individuals and 
                                                        skills to produce at capacity or more and in return, you will 
                                                        get back your initial capital and a certain percentage of your 
                                                        initial capital (usually 15%) after harvest (Usually 12 weeks)
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                   </div>

                                   <div class="heading-row">
                                       <div class="row">
                                           <div class="col-12">
                                               <h1 class="how-it-works__heading">How Does It Work?</h1>
                                           </div>
                                       </div>
                                   </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="invest-content">
                                <div class="invest__returns">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-6 col-6">
                                            <div class="invest__icon">
                                                <img src="{{asset('img/flower-2.svg')}}" alt="a flower numbered two" class="homepage__icon">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-6">
                                            <div class="invest__icon">
                                                <img src="{{asset('img/money-bag.svg')}}" alt="hand holding a bag of money" class="homepage__icon">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12 col-md-12">
                                            <h2 class="invest__heading">Superior Returns For Our Sponsors</h2>
                                            <div class="invest__text-wrap">
                                                <p class="invest__text">
                                                    At an ROI of up to 15% on your capital investment over the farming season, 
                                                    Farmsponsor has the highest return on investment in the industry
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="invest__farming-cycle">
                                        <div class="row">
                                            <div class="col-sm-6 col-md-6 col-6">
                                                <div class="invest__icon">
                                                    <img src="{{asset('img/flower-3.svg')}}" alt="a flower numbered three" class="homepage__icon">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-6">
                                                <div class="invest__icon">
                                                    <img src="{{asset('img/flowers-4.svg')}}" alt="four flowers forming a circle" class="homepage__icon">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-12">
                                                <h2 class="invest__heading">
                                                    Multiple Farming Cycles
                                                </h2>
                                                <div class="invest__text-wrap">
                                                    <p class="invest__text">
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
                    <div class="container-fluid container-block">
                        <div class="row how-it-works-block">
                            <div class="col-md-6 col-12">
                                <div class="how-it-works-content">
                                    <div class="how-it-works__create-account">
                                        <div class="row">
                                            <div class="col-sm-6 col-md-6 col-6">
                                                <div class="how-it-works__icon">
                                                    <img src="{{asset('img/flower-2.svg')}}" alt="a flower numbered two" class="homepage__icon">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-6">
                                                <div class="how-it-works__icon">
                                                    <img src="{{asset('img/money-bag.svg')}}" alt="hand holding a bag of money" class="homepage__icon">
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="row">
                                            <div class="col-12 col-md-12">
                                                <div class="how-it-works__text-wrap">
                                                    <h2 class="how-it-works__heading-main">Create A User Account</h2>

                                                    <p class="how-it-works__text">
                                                        Simply signup using your email or social media account 
                                                        (Facebook and Twitter). Creating an account takes just a few seconds.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="how-it-works__sponsor">
                                            <div class="row">
                                                <div class="col-sm-6 col-md-6 col-6">
                                                    <div class="invest__icon">
                                                        <img src="{{asset('img/flower-3.svg')}}" alt="a flower numbered three" class="homepage__icon">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6 col-6">
                                                    <div class="invest__icon">
                                                        <img src="{{asset('img/flowers-4.svg')}}" alt="four flowers forming a circle" class="homepage__icon">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 col-md-12">
                                                    <h2 class="invest__heading">
                                                        Find A Farm To Sponsor
                                                    </h2>
                                                    <div class="invest__text-wrap">
                                                        <p class="invest__text">
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

                            <div class="col-md-6 col-12">
                                <div class="how-it-works__content"> 
                                    <div class="how-it-works">
                                        <div class="icon-row">
                                            <div class="row">
                                                <div class="col-sm-6 col-md-6 col-6">
                                                    <div class="how-it-works__icon">
                                                        <img src="{{asset('img/flower-1.svg')}}" alt="a flower numbered one" class="homepage__icon">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6 col-6">
                                                    <div class="how-it-works__icon">
                                                        <img src="{{asset('img/farmer.svg')}}" alt="a flower numbered one" class="homepage__icon">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="text-row">
                                            <div class="row">
                                                <div class="col-12 col-md-12">
                                                    <h2 class="invest__heading">Stay Updated</h2>
                                                    <div class="invest__text-wrap">
                                                        <p class="invest__text">
                                                            Regularly check our updates to keep you informed on our 
                                                            promos, farm updates, blogs and others.
                                                        </p>
                                                    </div>
                                                    <a href="{{route('login')}}" class="introduction__text">
                                                        Get Involved
                                                    </a>
                                                </div>
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
                                <img src="{{asset('img/people.svg')}}" alt="a group of people illustration" class="homepage__icon">
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
                                <img src="{{asset('img/people.svg')}}" alt="a group of people illustration" class="homepage__icon">
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
                                <img src="{{asset('img/people.svg')}}" alt="a group of people illustration" class="homepage__icon">
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
                                <img src="{{asset('img/people.svg')}}" alt="a group of people illustration" class="homepage__icon">
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
                                    <img src="{{asset('img/people.svg')}}" alt="a group of people illustration" class="homepage__icon">
                                
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
                <div class="container container-block">
                    <div class="row">
                        <div class="testimonials-block">
                            <h3 class="testimonials__heading">
                                Sponsor a farmer together we can stop hunger.
                            </h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="testimonials-block">
                                <div class="testimonials-content">
                                    <img src="{{asset('img/fs-pic10.jpeg')}}" alt="photo of a Farmsponsor client" class="testimonials__image">
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
                        <div class="col-12 col-md-4">
                            <div class="testimonials-block">
                                <div class="testimonials-content">
                                    <img src="{{asset('img/fs-pic9.jpeg')}}" alt="photo of a Farmsponsor client" class="testimonials__image">
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
                        <div class="col-12 col-md-4">
                            <div class="testimonials-block">
                                <div class="testimonials-content">
                                    <img src="{{asset('img/fs-pic11.jpeg')}}" alt="photo of a Farmsponsor client" class="testimonials__image">
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

        </main>
    </body>
</html>