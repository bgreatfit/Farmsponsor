@extends('layouts.dashboard')

@section('content')
    <div class="deposit-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="deposit__content">
                        <div class="row">
                            <div class="col-12 col-md-10">
                                <div class="deposit__form-box">
                                    <form action="" class="deposit__form">
                                        @csrf
                                        <h2 class="deposit__form--heading">Deposit funds</h2>
                                           
                                        <div class="form-group">
                                            <input type="number" class="deposit__amount" name="depositAmount" id="deposit__amount">
                                            <label for="deposit__amount" class="deposit__amount--label">Enter deposit amount</label>
                                        </div>
                                        <div class="form-group">
                                            <a href="#" class="deposit__btn-next btn btn-default">Next</a>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="deposit-page-wrap">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-10">
                    <div class="page-content">
                        <div class="deposit-page__form-box">
                            <form action="" class="deposit-page__form">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="input__first-name">First name</label>
                                        <input type="text" class="form-control {{ $errors->has('firstname') ? ' is-invalid' : '' }}" id="input__first-name" name="firstname" placeholder="first-name">
                                    
                                        @if ($errors->has('firstname'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('firstname') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="input__last-name">Last name</label>
                                        <input type="text" class="form-control" {{ $errors->has('lastname') ? ' is-invalid' : '' }}" id="input__last-name" name="lastname" placeholder="Last name">
                                    
                                        @if ($errors->has('lastname'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('lastname') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="number" class="deposit-page__amount">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
