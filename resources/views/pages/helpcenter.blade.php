@include('includes.helpline')
@extends('layouts.basic')

@section('content')
    <section class="helpcenter-wrap">
        <header class="helpcenter__header">
            <h1 class="helpcenter__heading">Help and support</h1>
        </header>
        <div class="helpcenter__content-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="helpcenter__content">
                            <div class="helpcenter__icon-wrap">
                            <img src="{{asset('img/hc-phone.svg')}}" alt="mobile phone and credit card icons" class="helpcenter__icon">
                            </div>
                            <div class="helpcenter__text-wrap">
                                <h2 class="helpcenter__title">Who is a sponsor?</h2>
                                <p class="helpcenter__text">An individual or group that sponsors a farmer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="helpcenter__content">
                            <div class="helpcenter__icon-wrap">
                                <img src="{{asset('img/hc-socket.svg')}}" alt="mobile phone and credit card icons" class="helpcenter__icon">
                            </div>
                            <div class="helpcenter__text-wrap">
                                <h2 class="helpcenter__title">What is a Farm Cycle?</h2>
                                <p class="helpcenter__text">
                                    The period from after the sponsoring window, through 
                                    the farming period until after harvest and sales.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="helpcenter__content">
                            <div class="helpcenter__icon-wrap">
                                <img src="{{asset('img/hc-4squares.svg')}}" alt="mobile phone and credit card icons" class="helpcenter__icon">
                            </div>
                            <div class="helpcenter__text-wrap">
                                <h2 class="helpcenter__title">What is a unit?</h2>
                                <p class="helpcenter__text">
                                    These are packets of sponsorship data created by Farmsponsor for sponsors to buy. 
                                    The funds gotten from sale of unit are used to fund farmers throughout the farm cycle.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="helpcenter__content">
                            <div class="helpcenter__icon-wrap">
                            <img src="{{asset('img/hc-farm.svg')}}" alt="mobile phone and credit card icons" class="helpcenter__icon">
                            </div>
                            <div class="helpcenter__text-wrap">
                                <h2 class="helpcenter__title">What is a Farm?</h2>
                                <p class="helpcenter__text">
                                    This is the location where Farmsponsor carry 
                                    out agricultural activities
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="helpcenter__content">
                            <div class="helpcenter__icon-wrap">
                                <img src="{{asset('img/hc-window.svg')}}" alt="mobile phone and credit card icons" class="helpcenter__icon">
                            </div>
                            <div class="helpcenter__text-wrap">
                                <h2 class="helpcenter__title">What is a Sponsoring Window?</h2>
                                <p class="helpcenter__text">
                                    The window of opportunity for sponsors to send funds to farmers through Farmsponsor.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="helpcenter__content">
                            <div class="helpcenter__icon-wrap">
                                <img src="{{asset('img/hc-moneybag.svg')}}" alt="mobile phone and credit card icons" class="helpcenter__icon">
                            </div>
                            <div class="helpcenter__text-wrap">
                                <h2 class="helpcenter__title">What are returns?</h2>
                                <p class="helpcenter__text">
                                    The yield (remunerations) paid at the end of the farm cycle to the sponsors.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="helpcenter__content">
                            <div class="helpcenter__icon-wrap">
                            <img src="{{asset('img/hc-moneybag.svg')}}" alt="mobile phone and credit card icons" class="helpcenter__icon">
                            </div>
                            <div class="helpcenter__text-wrap">
                                <h2 class="helpcenter__title">What is my return? </h2>
                                <p class="helpcenter__text">
                                    Your seed input (Capital) plus a percentage of your seed input, 
                                    depending on the farm cycle and window you sponsored.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="helpcenter__content">
                            <div class="helpcenter__icon-wrap">
                                <img src="{{asset('img/hc-3cards.svg')}}" alt="mobile phone and credit card icons" class="helpcenter__icon">
                            </div>
                            <div class="helpcenter__text-wrap">
                                <h2 class="helpcenter__title">Can I have multiple sponsorships? </h2>
                                <p class="helpcenter__text">
                                    YES! So long as they fall within a sponsorship window and they are not 
                                    below the minimum or above the maximum sponsorship amount, otherwise it is 
                                    consired alien sponsorship
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="helpcenter__content">
                            <div class="helpcenter__icon-wrap">
                                <img src="{{asset('img/hc-3daimonds.svg')}}" alt="mobile phone and credit card icons" class="helpcenter__icon">
                            </div>
                            <div class="helpcenter__text-wrap">
                                <h2 class="helpcenter__title">What is the minimum I can sponsor with?</h2>
                                <p class="helpcenter__text">It depends on the farm, the sponsoring window and cycle. This will be duly advertised.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="helpcenter__content">
                            <div class="helpcenter__icon-wrap">
                            <img src="{{asset('img/hc-user.svg')}}" alt="mobile phone and credit card icons" class="helpcenter__icon">
                            </div>
                            <div class="helpcenter__text-wrap">
                                <h2 class="helpcenter__title"> Who's eligible to sponsor? </h2>
                                <p class="helpcenter__text">A sponsor must be least 18 years old to participate or with the help of a guardian if below 18.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="helpcenter__content">
                            <div class="helpcenter__icon-wrap">
                                <img src="{{asset('img/hc-shield.svg')}}" alt="mobile phone and credit card icons" class="helpcenter__icon">
                            </div>
                            <div class="helpcenter__text-wrap">
                                <h2 class="helpcenter__title">Are you covered by insurance?</h2>
                                <p class="helpcenter__text">A third party insurance covers Farmsponsor from financial loss and by extension both farmers and sponsors are indemnified from financial losses. This implies that all returns are assured. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="helpcenter__content">
                            <div class="helpcenter__icon-wrap">
                                <img src="{{asset('img/hc-moneybag.svg')}}" alt="mobile phone and credit card icons" class="helpcenter__icon">
                            </div>
                            <div class="helpcenter__text-wrap">
                                <h2 class="helpcenter__title">When do I get my returns?</h2>
                                <p class="helpcenter__text"> At the end of the term of the farming cycle.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="helpcenter__content">
                            <div class="helpcenter__icon-wrap">
                            <img src="{{asset('img/hc-square-window.svg')}}" alt="mobile phone and credit card icons" class="helpcenter__icon">
                            </div>
                            <div class="helpcenter__text-wrap">
                                <h2 class="helpcenter__title"> How can I sponsor a farm?  </h2>
                                <p class="helpcenter__text">Select a farm from our list of available farms ready for sponsorship on the current farm cycle, buy a specific number of units at N100,000.00 per unit by clicking “sponsor now” or “sponsor via vestbanking” and that’s it.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="helpcenter__content">
                            <div class="helpcenter__icon-wrap">
                                <img src="{{asset('img/hc-globe.svg')}}" alt="mobile phone and credit card icons" class="helpcenter__icon">
                            </div>
                            <div class="helpcenter__text-wrap">
                                <h2 class="helpcenter__title">Can I sponsor from any country? </h2>
                                <p class="helpcenter__text">Yes, you can sponsor from any where in the world  </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="helpcenter__content">
                            <div class="helpcenter__icon-wrap">
                                <img src="{{asset('img/hc-people.svg')}}" alt="mobile phone and credit card icons" class="helpcenter__icon">
                            </div>
                            <div class="helpcenter__text-wrap">
                                <h2 class="helpcenter__title"> I am a farmer, how do I join farmsponsor programme?</h2>
                                <p class="helpcenter__text"> 
                                    If you have an up-to-capacity farm and are willing to do business with us, then contact us with: 
                                    +234 0703 196 0724, +234 0808 099 0560 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection