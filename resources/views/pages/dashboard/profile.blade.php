@extends('layouts.dashboard')

@section('content')
    <div class="profile__card mt-5">
        <div class="profileHeadingContainer text-center">
            <i class="profile-heading__icon far fa-user"></i>
        </div>
        <form action="{{route('user.store')}}" method="POST" class="profile__form">
            @csrf
            <h2 class="text-center">Personal Information</h2>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="input__first-name">First name</label>
                    <input type="text" class="form-control {{ $errors->has('firstname') ? ' is-invalid' : '' }}" id="input__first-name" name="firstname" placeholder="first-name" value={{Auth::user()->firstname}}>

                    @if ($errors->has('firstname'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('firstname') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group col-md-6">
                    <label for="input__last-name">Last name</label>
                    <input type="text" class="form-control" id="input__last-name" name="lastname" placeholder="Last name" value={{Auth::user()->lastname}}>
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control {{ $errors->has('address') ? ' is-invalid' : '' }}" id="inputAddress" name="address" placeholder="1234 Nnewi St" value="{{Auth::user()->address}}">
                @if ($errors->has('address'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('address') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control {{ $errors->has('city') ? ' is-invalid' : '' }}" id="inputCity" name="city" value="{{Auth::user()->city}}">
                    @if ($errors->has('city'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('city') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">State</label>
                    <select id="inputState" class="form-control {{ $errors->has('state_id') ? ' is-invalid' : '' }}" name="state_id">
                        <option value="NULL">Choose...</option>
                        @foreach ($states as $state)
                            <option value="{{$state->id}}"
                                @if(Auth::user()->state_id == $state->id)
                                    selected
                                @endif>
                                {{$state->name}}
                            </option>
                        @endforeach
                    </select>
                    @if ($errors->has('state_id'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('state_id') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">Zip</label>
                    <input type="text" class="form-control {{ $errors->has('zip') ? ' is-invalid' : '' }}" id="inputZip" name="zip" value="{{Auth::user()->zip}}" >
                    @if ($errors->has('zip'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('zip') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group mb-5">
                    <label for="input__phone-number">Phone number</label>
                    <input type="text" class="form-control {{ $errors->has('phone') ? ' is-invalid' : '' }}" id="input__phone-number" placeholder="080xxx" name="phone" value="{{Auth::user()->phone}}">
                    @if ($errors->has('phone'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('phone') }}</strong>
                        </span>
                    @endif
                </div>
            <hr>
            <h2 class="text-center my-3">Bank Information</h2>

            <div class="row">
                <div class="col-md-12 col-12">
                    <div class="form-group">
                        <label for="input__bank-name">Bank name</label>
                        <input type="text" class="form-control {{ $errors->has('bank_name') ? ' is-invalid' : '' }}" id="input__bank-name" placeholder="Bank name" name="bank_name" value="">
                        @if ($errors->has('bank_name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('bank_name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label for="input__bank-account-name">Bank account name</label>
                    <input type="text" class="form-control {{ $errors->has('bank_account_name') ? ' is-invalid' : '' }}" id="input__bank-account-name" placeholder="Bank account name" name="bank_account_name" value="">
                    @if ($errors->has('bank_account_name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('bank_account_name') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group col-md-6">
                    <label for="input__last-name">Account number</label>
                    <input type="number" class="form-control {{ $errors->has('bank_account_number') ? ' is-invalid' : '' }}" id="input__acc-no" placeholder="Account number" name="bank_account_number" value="">

                    @if ($errors->has('bank_account_number'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('bank_account_number') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <button type="submit" class="btn btn-primary btn-lg profile__btn px-5 mt-2">Save</button>
        </form>
    </div>
@endsection
