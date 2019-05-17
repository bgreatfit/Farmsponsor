@extends('layouts.dashboard')

@section('content')

    <div class="deposit-method">
        <div class="container">
            <div class="row">
                <div class="col-12 offset-md-1 col-md-10">
                    <div class="deposit-method__content my-5 py-5">
                        <h1 class="deposit-method__heading text-center ">Choose deposit method</h1>
                        <ul class="list-group">
                            <li class="list-group-item deposit-method">
                                <a href="#" data-toggle="modal" data-target="#deposit-method-bank" 
                                    role="button" class="deposit-method__link">
                                        Bank Transfer
                                </a>
                            </li>
                            <li class="list-group-item deposit-method">
                                <a href="#" class="deposit-method__link">
                                    Web Deposit
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
                                <h3 class="deposit-method-bank__heading mb-4">Deposit Account</h3>
                                <p class="deposit-method-bank__bank-info">Bank Name: First Bank Plc</p>
                                <p class="deposit-method-bank__bank-info">Account Name: GLOBETROT FARMSPONSOR NIG LTD</p>
                                <p class="deposit-method-bank__bank-info">Account Number: 2033547424</p>
                            </div>
                            <div class="deposit-method-bank__ruler my-4 text-center">
                                <hr>
                            </div>
                            <form action="" class="deposit-method-bank__form">
                                @csrf
                                <h3 class="deposit-method-bank__heading mb-4">Depositor's Information</h3>
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
                                            <label for="depositAmount" class="deposit-method-bank__amount--label">Username: </label>
                                            <input type="text" class="form-control deposit-method-bank__username {{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" id="username">
                                            @if ($errors->has('username'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('username') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 col-md-12">
                                        <div class="form-group mb-4">
                                            <label for="depositAmount" class="deposit-method-bank__amount--label">Enter deposit amount: </label>
                                            <input type="number" class="form-control deposit-method-bank__amount {{ $errors->has('depositAmount') ? ' is-invalid' : '' }}" name="depositAmount" id="depositAmount">
                                            @if ($errors->has('depositAmount'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('depositAmount') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-12 col-md-6">
                                        <a href="#" class="deposit-method-bank__btn btn btn-primary form-control">Submit</a>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="btn-box py-3 py-md-0">
                                            <button type="button" class="btn btn-secondary form-control deposit-method-bank__btn btn-lg" data-dismiss="modal">Close</button>
                                            {{-- <a href="{{asset('dashboard/de')}}" class=" btn form-control btn-lg btn-info ml-auto">back</a> --}}
                                        </div>
                                    </div>
                                </div>

                                <p class="deposit-method-bank__note"><b>Please complete transfer before submitting deposit form, your account will be creditted within 2hrs after confirmation.</b></p>

                            </form>
                            
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
