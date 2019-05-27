@extends('layouts.basic')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="intro-section ">
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <div class="intro-section__content text-center">
                                <h1 class="intro-section__heading vestbanking-page-heading">What is Vestbanking</h1>
                                <p class="intro-section__text">
                                    To further our commitment to delivering superior value all year round, 
                                    sponsors can now vest their funds with Farmsponsor! With VestBanking: Sponsors 
                                    can add more value to their sponsorship by keeping their funds with us until a 
                                    new sponsoring window opens! Sponsors can now participate in the future sponsoring 
                                    windows in advance, on time and before the units sell out. The interest rate on your 
                                    vestbanking account balance is 1.25% per month and interest accrues daily! Minimum
                                        Vest Banking amount is 1,000 Naira but only a minimum of 1 unit (ie. 100,000 Naira) 
                                        can be used to sponsor local farmers in Farmsponsor sponsoring windows.
                                </p>
                                <div class="intro-section__image">
                                    <div class="intro-section__image">
                                        <div class="the-process__image-box">
                                            <img src="{{asset('img/group 8.png')}}" alt="Illustration of money dropping credit card" class="intro-section__img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="how-it-works-section">
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <h1 class="how-it-works__heading vestbanking-page-heading text-center">How does it Work?</h1>
                            <div class="how-it-works__content">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="how-it-works__picture mr-md-5">
                                            <div class="how-it-works__img-box">
                                                <img src="{{asset('img/Group 6.png')}}" alt="Two men standing in front of a white board" class="how-it-works__img">
                                            </div>
                                            <div class="how-it-works__text text-center">
                                                <h2 class="how-it-works__img--heading mb-4">Express Interest</h2>
                                                <p class="how-it-works__img--text">Indicate interest to fund your Vestbanking account.</p>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="how-it-works__picture ml-md-5">
                                            <div class="how-it-works__img-box">
                                                <img src="{{asset('img/Group 7.png')}}" alt="Two men standing in front of a white board" class="how-it-works__img">
                                            </div>
                                            <div class="how-it-works__text text-center">
                                                <h2 class="how-it-works__img--heading mb-4">Details</h2>
                                                <p class="how-it-works__img--text">
                                                    Send us the details of how you want your Vestbanking 
                                                    balance to be used to sponsor local farmers in Farmsponsor sponsoring windows/cycles.
                                                </p>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="the-process-section">
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <h1 class="the-process__heading vestbanking-page-heading text-center">The Process</h1>
                            <div class="the-process__content">
                                <div class="row">
                                    <div class="col-12 col-md-5">
                                        <div class="the-process__text ml-md-5">
                                            <div class="the-process__text-content">
                                                <h2 class="the-process__text--heading ">Balance</h2>
                                                <p class="the-process__text">
                                                    Once part of your Vestbanking balance is used in a 
                                                    sponsoring window, your remaining balance is frozen from 
                                                    sponsorship until the payout date of the window you 
                                                    participated in. However, the remaining balance keeps 
                                                    growing according to the Vestbanking interest rate within 
                                                    the period of the cycle you participated in.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-2">
                                        <div class="the-process__picture">
                                            <div class="the-process__arrow-box arrow1">
                                                <img src="{{asset('img/Vector.png')}}" alt="an arrow pointing down" class="the-process__img">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-5">
                                        <div class="the-process__img mr-md-5 pr-md-5">
                                            <div class="the-process__img-box">
                                                <img src="{{asset('img/Group 5.png')}}" alt="A wallet icon and a user icon" class="the-process__img">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <div class="the-process__content">
                                <div class="row the-process__content-row2">
                                    <div class="col-12 col-md-5">
                                        <div class="the-process__img ml-md-4">
                                            <div class="the-process__img-box">
                                                <img src="{{asset('img/Group 5.png')}}" alt="A wallet icon and a user icon" class="the-process__img">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-2">
                                        <div class="the-process__picture">
                                            <div class="the-process__arrow-box arrow1">
                                                <img src="{{asset('img/Vector.png')}}" alt="an arrow pointing down" class="the-processs__img">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-5">
                                        <div class="the-process__text mr-md-5 pr-md-5">
                                            <div class="the-process__text-content">
                                                <h2 class="the-process__text--heading ">Withdraw</h2>
                                                <p class="the-process__text">
                                                    Withdrawals can be made anytime.
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
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3">
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
                <div class="col-12 col-md-3">
                    <div class="footer__content">
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <p class="footer__text">Company</p>
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
                <div class="col-12 col-md-3">
                    <div class="footer__content">
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <p class="footer__text">Social</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <div class="footer__item"><a href="#" class="footer__links">FAQs</a></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <div class="footer__item"><a href="#" class="footer__links">FAQs</a></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <div class="footer__item"><a href="#" class="footer__links">FAQs</a></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <div class="footer__item"><a href="#" class="footer__links">FAQs</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="footer__content mt-md-4">
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <p class="footer__text">Newsletter</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <p class="footer__item">Be the first to know about our current news.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <form action="" class="footer__form">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" class="footer__input"><button type="submit" class="footer__links">Subscribe</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

@endsection