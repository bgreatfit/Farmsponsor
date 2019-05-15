@extends('layouts.dashboard')

@section('content')
    <div class="transaction-page-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="transaction__content mt-3">
                        <div class="transaction__content-wrap">
                            <div class="transaction__image-box">
                                <img src="{{asset('img/dash-3.png')}}" alt="credit card illustration" class="transaction__image mb-5">
                            </div>
                            <h1 class="transaction__heading text-center">Transactions</h1>
                        </div>
                        <div class="transaction__rule"><hr></div>
                    </div>
                 </div>
            </div>
            <div class="transaction-cards-section-wrap mt-3">
                <div class="row">
                    <div class="col-md-6 col-12 col-sm-6">
                        <div class="transaction__card">
                            <h3 class="card__heading mt-2">Farms Sponsored</h3>
                            <p class="card__text">0</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 col-sm-6">
                        <div class="transaction__card">
                            <a href="#" class="card__heading">Transaction History</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection