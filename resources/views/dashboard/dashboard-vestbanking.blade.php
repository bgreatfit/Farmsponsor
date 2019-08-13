@extends('layouts.new_dashboard')

@section('content')
    <div class="dashboard-vestbanking-wrap">
        <div class="dashboard-vestbank__panel">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-4">
                        <div class="vestbank-panel__content">
                            <span></span>
                            <div>
                                <h3 class="dashboard-vestbank__welcome-text">Welcome back Romeo</h3>
                                <p class="dashboard-vestbank__panel--text">Your Last login was 09/06/2019 05:34 pm GMT</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4">
                        <div class="vestbank-panel__content">
                            <div>
                                <p class="dashboard-vestbank__panel--text">Total Balance</p>
                                <h3 class="dashboard-vestbank__panel--figure">N150,000.00 </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4">
                        <div class="vestbank-panel__content">
                            <div>
                                <p class="dashboard-vestbank__panel--text">Accumulated Interest</p>
                                <h3 class="dashboard-vestbank__panel--figure">6.78% </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="col-12">
                <div class="row">
                    <div class="dashboard-vestbank__content">
                        <div class="vestbank-card-wrap">
                            <div class="vestbank-card__image-box"><img src="{{asset('img/dashboard-vestbank-fund.svg')}}" alt="" class="vestbank-card__image"></div>
                            <p class="vestbank-card__text text-row-one">Fund your</p>
                            <p class="vestbank-card__text text-row-two">vestbank wallet</p>
                            <a href="#" class="vestbank-card__btn">
                            <span class="vestbank-card__btn--text">click here</span>  <span class="vestbank-card__btn--icon"><img src="{{asset('img/right-arrow.svg')}}" alt="" class="btn-icon"></span>
                            </a>
                        </div>
                
                        <div class="vestbank-card-wrap">
                            <div class="vestbank-card__image-box"><img src="{{asset('img/dashboard-vestbank-withdraw.svg')}}" alt="" class="vestbank-card__image"></div>
                            <p class="vestbank-card__text text-row-one">Withdraw</p>
                            <p class="vestbank-card__text text-row-two">from vestbank</p>
                            <a href="#" class="vestbank-card__btn">
                            <span class="vestbank-card__btn--text">click here</span>  <span class="vestbank-card__btn--icon"><img src="{{asset('img/right-arrow.svg')}}" alt="" class="btn-icon"></span>
                            </a>
                        </div>
                
                        <div class="vestbank-card-wrap">
                            <div class="vestbank-card__image-box"><img src="{{asset('img/dashboard-vestbank-transaction.svg')}}" alt="" class="vestbank-card__image"></div>
                            <p class="vestbank-card__text text-row-one">Transaction</p>
                            <p class="vestbank-card__text text-row-two">History</p>
                            <a href="#" class="vestbank-card__btn">
                            <span class="vestbank-card__btn--text">click here</span>  <span class="vestbank-card__btn--icon"><img src="{{asset('img/right-arrow.svg')}}" alt="" class="btn-icon"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection