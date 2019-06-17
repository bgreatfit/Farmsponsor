@extends('layouts.basic')

@section('content')
    <main class="homepage-wrap">
        <section class="introduction-section">
            <div class="container-block">
                <div class="flex-row">
                    <div class="flex-col-2">
                        <div class="introduction-content"> 
                            <div class="introduction__text-wrap">
                                <h1 class="introduction__heading">
                                    Food Security Is The 
                                    Responsibility Of Everyone
                                </h1>
                                <p class="introduction__text">
                                    Farmsponsor is an agric-tech company, where individuals
                                    sponsor farmers with their money for a 15% return
                                    on their sponsorship.
                                </p>
                                <a href="{{route('farmlist')}}" class="homepage__btn">
                                    Sponsor Now  <img src="{{asset('img/greater-than-white.svg')}}" alt="greater than sign" class="sponsor-btn--icon ml-3">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="flex-col-2">
                        <div class="introduction-content">
                            <div class="introduction__vid-wrap">
                                <video autoplay loop muted class="introduction__vid">
                                    <source src="{{asset('img/intro-vid.mp4')}}" type="video/mp4">
                                    {{-- <img src="{{asset('img/play-button.svg')}}" alt="play button" class="introduction__image">  --}}
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="invest-section" id="invest-section">
            <div class="container-block">
                <div class="invest-content">
                    <h2 class="invest__heading--main">Why Choose Farmsponsor?</h2>
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

        <section class="how-it-works-section" id="how-it-works">
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
                                        <div class="create-account__text-wrap">
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
                                                Vest Funds in Vestbank wallet
                                            </h2>
                                            <div class="invest__text-wrap">
                                                <p class="text__sub--light">
                                                    Add the funds you want to sponsor a farm with to your personal Vestbank wallet. 
                                                </p>
                                            </div>
                                            {{-- <a href="{{route('aboutVestbanking')}}" target="_blank" class="how-it-works__btn homepage__btn vestbank-info__btn">
                                                More info on Vestbanking
                                            </a> --}}
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
                                        <h2 class="heading__sub--dark">Find A Farm To Sponsor</h2>
                                        <div class="stay-updated__text-wrap">
                                            <p class="text__sub--dark">
                                                Select a farm from our list of available farms ready for 
                                                sponsorship on the current farm cycle, buy a specific number 
                                                of units at N100,000.00 per unit and that's it. Just sit back 
                                                and watch your investment grow. 
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
                            <span class="stat-update__figure"><span class="sponsor" >0</span>&#43;</span>
                            {{-- <span class="sponsor stat-update__figure"> </span> --}}
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
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="farmlist-content">
                            @include('includes.farmsCard')
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="farmlist-content">
                            @include('includes.farmsCard')
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="farmlist-content">
                            @include('includes.farmsCard')
                        </div>
                    </div>

                    {{-- <div class="col-12 col-sm-6 col-md-3">
                        <div class="farmlist-content">
                            @include('includes.farmsCard')
                        </div>
                    </div> --}}
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
            <div class="container-fluid">
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
@endsection