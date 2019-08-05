@extends('layouts.dashboard')

@section('content')
    <div class="vestbank-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <div class="vestbank__balance-wrap">
                        <div class="vestbank__balance">
                            <p class="vestbank__balance--label">Vestbank Balance</p>
                            <h3 class="vestbank__balance--text"> {{Auth::user()->vestbank->balanceforDisplay}} </h3>
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
                <div class="col-md-6 col-12">
                    <div class="vestbank-bank-card-section">
                        <a href="{{route('funding.create')}}" class="vestbank__btn-wrap">
                            <div class="vestbank__card vestbank__deposit">
                                <div class="vestbank__card--image-box">
                                <img src="{{asset('img/vestbank-03.svg')}}" alt="Credit card" class="vestbank__card--image">
                                </div>
                                <p class="vestbank__card--text">Fund Account</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="vestbank-bank-card-section">
                        <a href="#" data-toggle="modal" data-target="#vestbank-withdraw" role="button" class="vestbank__btn-wrap">
                            <div class="vestbank__card vestbank__withdraw">
                                <div class="vestbank__card--image-box">
                                    <img src="{{asset('img/vestbank-01.svg')}}" alt="Safe illustration" class="vestbank__card--image">
                                </div>
                                <p class="vestbank__card--text disabled">Withdraw Money</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="vestbank-withdraw__content">
                <div class="modal fade" id="vestbank-withdraw" tabindex="-1" role="dialog" aria-labelledby="vestbankwithdrawTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title heading__secondary text-center" id="exampleModalLongTitle">Withdraw Funds</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">X</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <p class="vestbankwithdraw__form--text mb-3 text-center">How much would you like to withdraw?</p>
                                <form action="{{route('funding.withdraw')}}" class="vestbank-withdraw__form" method="POST">
                                    @csrf
                                    <div class="form-check form-check-inline">
                                        <label for="vestbank-withdraw__capital" class="radio-inline">
                                            <input type="radio" name="option" value="capital" id="vestbank-withdraw__capital" class="vestbank-withdraw__form--input" selected> Capital
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label for="vestbank-withdraw__interest" class="radio-inline">
                                            <input type="radio" name="option" value="interest" id="vestbank-withdraw__interest" class="vestbank-withdraw__form--input"> Interest
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label for="vestbank-withdraw__all" class="radio-inline">
                                            <input type="radio" name="option" value="all" id="vestbank-withdraw__all" class="vestbank-withdraw__form--input"> All
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label for="vestbank-withdraw__other" class="radio-inline">
                                            <input type="radio" name="option" value="other" id="vestbank-withdraw__other" class="vestbank-withdraw__form--input"> Other
                                        </label>
                                    </div>
                                    <div class="form-group mt-3 others-hide hide-content">
                                        <input type="number" name="amount" id="vestbank-withdraw__amount"
                                        class="form-control {{ $errors->has('withdrawAmount') ? ' is-invalid' : '' }}">
                                        <label for="vestbank-withdraw__amount" class="vestbank-withdraw__amount--label">
                                            <small>Specify amount</small>
                                        </label>
                                        @if ($errors->has('withdrawAmount'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('withdrawAmount') }}</strong>
                                            </span>
                                        @endif

                                    </div>
                                    <div class="form-group">
                                        <button type="button" class="btn btn-secondary vestbankwithdraw__btn btn-lg" data-dismiss="modal">Close</button>
                                        <button type="submit" class="vestbank-withdraw__btn btn btn-lg btn-success">Make withdrawal</button>
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
