@extends('layouts.dashboard')

@section('content')
    <div class="profile__card mt-5">
        <div class="profileHeadingContainer text-center">
            <i class="profile-heading__icon far fa-user"></i>
        </div>
<<<<<<< HEAD
        <form action="" class="profile__form">
=======
        <form action="{{route('user.store')}}" method="POST" class="profile__form">
>>>>>>> ab3b10b5add355a52be85adfa3fa93dcc671f27d
            @csrf
            <h2 class="text-center">Personal Information</h2>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="input__first-name">First name</label>
                    <input type="text" class="form-control" id="input__first-name" name="firstname" placeholder="first-name" value={{Auth::user()->firstname}}>
                </div>
                <div class="form-group col-md-6">
                    <label for="input__last-name">Last name</label>
                    <input type="text" class="form-control" id="input__last-name" name="lastname" placeholder="Last name" value={{Auth::user()->lastname}}>
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control" id="inputAddress" name="address1" placeholder="1234 Nnewi St" value={{Auth::user()->address1}}>
            </div>
            <div class="form-group">
                <label for="inputAddress2">Address 2</label>
                <input type="text" class="form-control" id="inputAddress2" name="address2" placeholder="Apartment, flat, or floor" value={{Auth::user()->address2}}>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control" id="inputCity" name="city" value={{Auth::user()->city}}>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">State</label>
                    <select id="inputState" class="form-control" name="state">
                        <option value="NULL">Choose...</option>
                        @foreach ($states as $state)
                            <option value="{{$state->id}}">
                                {{$state->name}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">Zip</label>
                    <input type="text" class="form-control" id="inputZip" name="zip">
                </div>
            </div>
            <div class="form-group mb-5">
                    <label for="input__phone-number">Phone number</label>
                    <input type="text" class="form-control" id="input__phone-number" placeholder="080xxx" name="phone">
                </div>
            <hr>
            <h2 class="text-center my-3">Bank Information</h2>

            <div class="row">
                <div class="form-group col-md-6">
                    <label for="input__bank-name">Bank name</label>
                    <input type="text" class="form-control" id="input__bank-name" placeholder="Bank name" name="bank_name">
                </div>
                <div class="form-group col-md-6">
                    <label for="input__last-name">Account number</label>
                    <input type="text" class="form-control" id="input__acc-no" placeholder="Account number" name="bank_account_number">
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-lg profile__btn px-5 mt-2">Save</button>
        </form>
    </div>
@endsection
