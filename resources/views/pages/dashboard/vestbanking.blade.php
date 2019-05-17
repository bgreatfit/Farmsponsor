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
                <div class="col-md-6 col-12">
                    <div class="vestbank-bank-card-section">
                        <a href="{{url('/dashboard/deposit')}}" class="vestbank__btn-wrap">
                            <div class="vestbank__card vestbank__deposit">
                                <div class="vestbank__card--image-box">
                                <img src="{{asset('img/vestbank-03.svg')}}" alt="Credit card" class="vestbank__card--image">    
                                </div> 
                                <p class="vestbank__card--text">Add Money</p>
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
                                <p class="vestbank__card--text">Withdraw Money</p>
                            </div>
                        </a>
                    </div>
                </div>
                {{-- <div class="col-md-4 col-12">
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
                </div> --}}
            </div>

            {{-- <div class="vestbank-deposit-popup" id="vestbank-deposit-method">
                <div class="vestbank-deposit__background">
                    <div class="vestbank-deposit__body">
                        <div class="container">
                            <a href="{{url('/dashboard/vestbanking')}}" class="vestbank-deposit__back-btn">X</a>
                            <div class="row">
                                <div class="col-md-12 col-12">
                                    <h2 class="vestbank-deposit__heading heading__secondary text-center">deposit Funds</h2>
                                </div>
                            </div>
                            <hr>
                            <div class="vestbank-deposit__content mt-4">
                                <form action="" class="vestbank-deposit__form">
                                    @csrf
                                    <p class="vestbank-deposit__form--text mb-3">How much do would you like to deposit?</p>
                                    <div class="form-group mt-3">
                                        <label for="vestbank-deposit__amount" class="vestbank-deposit__amount--label">
                                        <input type="number" name="amount" id="vestbank-deposit__amount" 
                                        class="form-control vestbank-deposit__form--input {{ $errors->has('amount') ? ' is-invalid' : '' }} ">
                                        @if ($errors->has('amount'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('amount') }}</strong>
                                            </span>
                                        @endif
                                            <small>Specify amount</small>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="vestbank-deposit__btn form-control btn btn-lg btn-success">Make deposit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="vestbank-deposit__content">
                <div class="modal fade" id="vestbank-deposit" tabindex="-1" role="dialog" aria-labelledby="vestbank-depositTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title heading__secondary text-center" id="exampleModalLongTitle">deposit Funds</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">X</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <form action="" class="vestbank-deposit__form">
                                    @csrf
                                    <p class="vestbank-deposit__form--text mb-3 text-center">How much do would you like to deposit?</p>
                                    <div class="form-group mt-3">
                                        <input type="number" name="amount" id="vestbank-deposit__amount" 
                                            class="form-control vestbank-deposit__form--input {{ $errors->has('amount') ? ' is-invalid' : '' }} ">
                                            @if ($errors->has('amount'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('amount') }}</strong>
                                                </span>
                                            @endif
                                        <label for="vestbank-deposit__amount" > <small>Specify amount</small></label>
                                    </div>
                                    <div class="form-group">
                                        <label for="vestbank-deposit__standing-order"> Choose standing order: </label>
                                        <select name="standing-order" id="vestbank-deposit__standing-order" class="form-control vestbank-deposit__standing-order {{ $errors->has('standing-order') ? ' is-invalid' : '' }}">
                                            <option value="all">Invest all in the next sponsoring window</option>
                                            <option value="part">Invest part in the next sponsoring window</option>
                                        </select>
                                        @if ($errors->has('standing-order'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('standing-order') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="input-standing-order">Enter amount: </label>
                                        <input type="number" id="input-standing-order" name="standing-order-amount" class="form-control {{ $errors->has('standing-order') ? ' is-invalid' : '' }}">
                                
                                        @if ($errors->has('standing-order-amount'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('standing-order-amount') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <button type="button" class="btn btn-secondary vestbank-deposit__btn btn-lg" data-dismiss="modal">Close</button>
                                        <button type="submit" class="vestbank-deposit__btn btn btn-lg btn-success">Make deposit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
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
                                <p class="vestbankwithdraw__form--text mb-3 text-center">How much do would you like to withdraw?</p>
                                <form action="" class="vestbank-withdraw__form">
                                    @csrf
                                    <div class="form-check form-check-inline">
                                        <label for="vestbank-withdraw__capital" class="radio-inline">
                                            <input type="radio" name="option" value="capital" id="vestbank-withdraw__capital" class="vestbank-withdraw__form--input "> Capital
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
                                    <div class="form-group mt-3">
                                        <input type="number" name="withdrawAmount" id="vestbank-withdraw__amount" 
                                        class="form-control vestbank-withdraw__form--input {{ $errors->has('withdrawAmount') ? ' is-invalid' : '' }}">
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