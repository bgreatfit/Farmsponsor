@extends('layouts.basic')
@section('content')
    <section class="about-wrap">
        <header class="about-jumbotron"></header>

        <main class="main-content-area">
            <section class="about-intro">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="about-intro__content">
                                <h1 class="about-heading">About Us</h1>
                                <p class="about-text">
                                    This is Globetrot Farmsponsor Nig. Ltd, the farm financing company for everyone. 
                                </p>
                                <p class="about-text">
                                    The idea behind the company was conceived in December 2017 by the Co-Founder/CEO, 
                                    Akpa Innocent Bill. All resources were channeled towards engaging the rest of the 
                                    team in seamless research and study of the industry in order to achieve all company set goals. 
                                    We launched the first beta version, Farmsponsor 1.0 in February, 2018. Farmsponsor launched 
                                    officially to the public in May, 2018. 
                                </p>
                            <p class="about-text">
                                    Farmsponsor is using technology to ensure food is 
                                    available for everyone in Nigeria by getting everyone to participate in agriculture. 
                                    At Farmsponsor, every employee is outgoing, dynamic and engaging. This is why we are all 
                                    marketing and sales representatives who wear organizational objectives on our sleeves and 
                                    stitch company image and presence on our minds to achieve results. Therefore if you are thrilled 
                                    by success and you have passion to ensure food security in Africa, as well as possess the energy, 
                                    wit and vibe required for the big task; Farmsponsor is the place to be.
                                </p>
                            </div>
                        </div>
                    </div>
        
                    <div class="row">
                        <div class="col-12">
                            <div class="about-values">
                                <h1 class="about-heading">Our Values</h1>
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="about-values__content">
                                            <h2 class="about-values__heading"><span class="heading-span">I</span> Commitment</h2>
                                            <p class="about-text">We do what we say we will do </p>
                                        </div>
            
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="about-values__content">
                                            <h2 class="about-values__heading"><span class="heading-span">II</span>Focus</h2>
                                            <p class="about-text">We have our vision and mission in mind always </p>
                                        </div>
                    
                                    </div>
                                </div>
            
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="about-values__content">
                                            <h2 class="about-values__heading"><span class="heading-span">III</span>Time</h2>
                                            <p class="about-text">We always keep to Farm Sponsor time.</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="about-values__content">
                                            <h2 class="about-values__heading"><span class="heading-span">IV</span>Team Players</h2>
                                            <p class="about-text">We work together to ensure constant success.</p>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="about-values__content">
                                            <h2 class="about-values__heading"><span class="heading-span">V</span>Honesty</h2>
                                            <p class="about-text">We are true to our words</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="about-values__content">
                                            <h2 class="about-values__heading"><span class="heading-span">VI</span> Creative</h2>
                                            <p class="about-text">We're creative. We think outside the box.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="about-mission">
                                <h1 class="about-heading">Mission</h1>
                                <p class="about-text">
                                    Our mission is to use technology to drive the participation of everyone in agriculture.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="about-mission">
                                <h1 class="about-heading">Vision</h1>
                                <p class="about-text">
                                    Our vision is to ensure food is available for everyone by getting everyone involved in agriculture.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
           
            <section class="about-counting">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="about-counting__heading-wrap">
                                <h1 class="about-counting__heading">Still Counting</h1>
                            </div>
                            <div class="about-counting__icon-wrap about-icon-wrap">
                                <div class="about-counting__icon">
                                    <img src="{{asset('img/abt-sponsors.svg')}}" alt="1000+ Sponsors" class="about-counting--img">
                                </div>
                                <div class="about-counting__icon">
                                    <img src="{{asset('img/abt-cycles.svg')}}" alt="21 Cycles" class="about-counting--img">
                                </div>
                                <div class="about-counting__icon">
                                    <img src="{{asset('img/abt-farms.svg')}}" alt="50 Farms" class="about-counting--img">
                                </div>
                                <div class="about-counting__icon">
                                    <img src="{{asset('img/abt-farmers.svg')}}" alt="300+ Farmers" class="about-counting--img">
                                </div>
                                <div class="about-counting__icon">
                                    <img src="{{asset('img/abt-reviews.svg')}}" alt="100+ Reviews" class="about-counting--img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="about-partners">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="about-partners__heading-wrap">
                                <h1 class="about-partners__heading">Partners</h1>
                            </div>
                            <div class="about-partners__image-wrap about-icon-wrap">
                                <div class="about-partners__image">
                                    <img src="{{asset('img/the-promise.png')}}" alt="The promise" class="about-partners--img">
                                </div>
                                <div class="about-partners__image">
                                    <img src="{{asset('img/LWA-Logo-Header.svg')}}" alt="Leadway Assurance" class="about-partners--img">
                                </div>
                                <div class="about-partners__image">
                                    <img src="{{asset('img/Kalase-Farms-LTD.svg')}}" alt="Kalase Farms" class="about-partners--img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>


        
    </div>
@endsection