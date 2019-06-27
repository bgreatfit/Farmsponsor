@extends('layouts.dashboard')
@section('content')
    <section class="sponsor-now">
        <div class="deposit-method">
            <div class="container">
                <div class="row">
                    <div class="col-12 offset-md-1 col-md-10">
                        <div class="deposit-method__content my-5 py-5">
                            <h1 class="deposit-method__heading text-center ">Preferred method of sponsorship</h1>
                            <ul class="list-group">
                                <li class="list-group-item deposit-method">
                                    <a href="#" data-toggle="modal" data-target="#deposit-method-bank"
                                        role="button" class="deposit-method__link">
                                            Bank Transfer
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="modal fade" id="deposit-method-bank" tabindex="-1" role="dialog" aria-labelledby="deposit-method-bankTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered deposit-method-bank" role="document">
                    <div class="modal-content">
                        <div class="modal-header px-4">
                            <h5 class="modal-title heading__secondary text-center" id="exampleModalLongTitle">Bank Transfer</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">X</span>
                            </button>
                        </div>
                        <div class="modal-body px-4">
                            <div class="deposit-method-bank__content py-4">
                                <div class="deposit-method-bank__account">
                                    <h3 class="deposit-method-bank__heading mb-4">Please fill the form below and proceed to make payment into the account details below</h3>
                                    <p class="deposit-method-bank__bank-info">Bank Name: SunTrust Bank</p>
                                    <p class="deposit-method-bank__bank-info">Account Name: GLOBETROT FARMSPONSOR NIG LTD</p>
                                    <p class="deposit-method-bank__bank-info">Account Number: 0001105129</p>
                                </div>
                                <div class="deposit-method-bank__ruler my-4 text-center">
                                    <hr>
                                </div>
                                <div class="deposit-method-bank__account">
                                    <p class="deposit-method-bank__bank-info">Bank Name: First Bank Plc</p>
                                    <p class="deposit-method-bank__bank-info">Account Name: GLOBETROT FARMSPONSOR NIG LTD</p>
                                    <p class="deposit-method-bank__bank-info">Account Number: 2033547424</p>
                                </div>
                                <div class="deposit-method-bank__ruler my-4 text-center">
                                    <hr>
                                </div>
                                <form action="{{route('vestbanking.deposit')}}" method="POST" class="deposit-method-bank__form">
                                    @csrf
                                    <h3 class="deposit-method-bank__heading mb-4">Sponsor's Information</h3>
                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <label for="input__first-name">First name: </label>
                                            <input type="text" class="form-control {{ $errors->has('firstname') ? ' is-invalid' : '' }}" id="input__first-name" name="firstname" placeholder="First name">
    
                                            @if ($errors->has('firstname'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('firstname') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="input__last-name">Last name: </label>
                                            <input type="text" class="form-control" {{ $errors->has('lastname') ? ' is-invalid' : '' }}" id="input__last-name" name="lastname" placeholder="Last name">
    
                                            @if ($errors->has('lastname'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('lastname') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
    
                                    <div class="row">
                                        <div class="col-12 col-md-12">
                                            <div class="form-group mb-4">
                                                <label for="email" class="deposit-method-bank__amount--label">Email: </label>
                                                <input type="email" id="email" class="form-control deposit-method-bank__username {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="email" placeholder="Enter Email">
                                                @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="row">
                                        <div class="col-12 col-md-12">
                                            <div class="form-group mb-4">
                                                <label for="phone-number" class="deposit-method-bank__amount--label">Phone number: </label>
                                                <input type="number" id="phone-number" class="form-control deposit-method-bank__username {{ $errors->has('email') ? ' is-invalid' : '' }}" name="phoneNumber" placeholder="Enter phone number">
                                                @if ($errors->has('phoneNumber'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('phoneNumber') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="row">
                                        <div class="col-12 col-md-12">
                                            <div class="form-group mb-4">
                                                <label for="depositAddress" class="deposit-method-bank__address--label">Address: </label>
                                                <input type="text" class="form-control deposit-method-bank__address {{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" id="address" placeholder="Enter address">
                                                @if ($errors->has('address'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('address') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
    

                                    <div class="row">
                                        <div class="col-12 col-md-12">
                                            <div class="form-group mb-4">
                                                <label for="units" class="deposit-method-bank__units--label">Numbers of units: </label>
                                                <input type="number" class="form-control deposit-method-bank__address {{ $errors->has('units') ? ' is-invalid' : '' }}" name="units" id="units" placeholder="Enter number of units">
                                                @if ($errors->has('units'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('units') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>



                                    <div class="row">
                                        <div class="col-12 col-md-12">
                                            <div class="form-group mb-4">
                                                <label for="amount" class="deposit-method-bank__amount--label">Enter sponsorship amount: </label>
                                                <input type="number" class="form-control deposit-method-bank__amount {{ $errors->has('amount') ? ' is-invalid' : '' }}" name="amount" id="amount">
                                                @if ($errors->has('amount'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('amount') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="row mb-4">
                                        <div class="col-12 col-md-6">
                                            <button type="submit" class="deposit-method-bank__btn btn btn-primary form-control">Submit</button>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="btn-box py-3 py-md-0">
                                                <button type="button" class="btn btn-secondary form-control deposit-method-bank__btn btn-lg" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
    
                                    <p class="deposit-method-bank__note"><b>Please complete transfer within 24hours, your sponsorship will be confirmed as soon as possible.</b></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection