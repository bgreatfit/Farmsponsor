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
                            <img src="{{asset('img/vestbank-logo.png')}}" alt="" class="vestbank__logo--image">
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-12">
                    <div class="vestbank-bank-card-section">
                        <a href="#" class="vestbank__btn">
                            <div class="vestbank__card vestbank__deposit">
                                <div class="vestbank__card--image-box">
                                    <img src="" alt="" class="vestbank__card--image">    
                                </div> 
                                <p class="vestbank__card--text">Add Money</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="vestbank-bank-card-section">
                        <a href="#" class="vestbank__btn">
                            <div class="vestbank__card vestbank__withdraw">
                                <div class="vestbank__card--image-box">
                                    <img src="" alt="" class="vestbank__card--image">    
                                </div> 
                                <p class="vestbank__card--text">Withdraw Money</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="vestbank-bank-card-section">
                        <a href="#" class="vestbank__btn">
                            <div class="vestbank__card vestbank__standing-order">
                                <div class="vestbank__card--image-box">
                                    <img src="" alt="" class="vestbank__card--image">    
                                </div> 
                                <p class="vestbank__card--text">Standing Order</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection