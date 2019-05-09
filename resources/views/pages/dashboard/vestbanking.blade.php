@extends('layouts.dashboard')

@section('content')
    <div class="vestbank-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <div class="vestbank__balance-wrap">
                        <div class="vestbank__balance">
                            <p class="vestbank__balance--label">Vestbank Balance</p>
                            <h3 class="vestbank__balance--text"> 0.00 NGN </h3>
                            <div class="vestbank__logo">
                                <div class="vestbank__logo--wrap">
                                    <img src="{{asset('img/vestbank-logo.png')}}" alt="Vestbank logo" class="vestbank__logo--image">
                                </div>
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-12">
                    <div class="vestbank-bank-card-section">
                        <a href="#" class="vestbank__btn-wrap">
                            <div class="vestbank__card vestbank__deposit">
                                <div class="vestbank__card--image-box">
                                <img src="{{asset('img/vestbank-03.svg')}}" alt="Credit card" class="vestbank__card--image">    
                                </div> 
                                <p class="vestbank__card--text">Add Money</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="vestbank-bank-card-section">
                        <a href="#vestbank-withdraw" class="vestbank__btn-wrap">
                            <div class="vestbank__card vestbank__withdraw">
                                <div class="vestbank__card--image-box">
                                    <img src="{{asset('img/vestbank-01.svg')}}" alt="Safe illustration" class="vestbank__card--image">    
                                </div> 
                                <p class="vestbank__card--text">Withdraw Money</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="vestbank-bank-card-section">
                        <div class="vestbank__btn-wrap">
                            <div class="vestbank__card vestbank__standing-order">
                                <div class="vestbank__card--image-box">
                                    <img src="{{asset('img/vestbank-4.svg')}}" alt="files order" class="vestbank__card--image">    
                                </div> 
                                <p class="vestbank__card--text">Standing Order:</p>
                                <p class="vestbank__card--order">You have no standing order</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vestbank-withdraw-popup" id="vestbank-withdraw">
                <div class="vestbank-withdraw__background">
                    <div class="vestbank-withdraw__body">
                        <div class="container">
                            <a href="{{url('/dashboard/vestbanking')}}" class="vestbank-withdraw__back-btn">X</a>
                            <div class="vestbank-withdraw--content">
                                <form action="" class="vestbank-withdraw__form">
                                    <div class="row">
                                        <p class="vestbank-withdraw__form--text">How much do would you like to withdraw?</p>
                                    </div>
                                    <div class="row">
                                        <div class="form-check form-check-inline">
                                            <label for="vestbank-withdraw__capital radio-inline">
                                                <input type="radio" name="option" value="capital" id="vestbank-withdraw__capital" class="vestbank-withdraw__form--input"> Capital
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label for="vestbank-withdraw__interest radio-inline">
                                                <input type="radio" name="option" value="interest" id="vestbank-withdraw__interest" class="vestbank-withdraw__form--input"> Interest
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label for="vestbank-withdraw__all radio-inline">
                                                <input type="radio" name="option" value="all" id="vestbank-withdraw__all" class="vestbank-withdraw__form--input"> All
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label for="vestbank-withdraw__other radio-inline">
                                                <input type="radio" name="option" value="other" id="vestbank-withdraw__other" class="vestbank-withdraw__form--input"> Other
                                            </label>
                                        </div>
                                    </div>
                                    
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection