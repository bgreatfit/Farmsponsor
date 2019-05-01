@extends('layouts.dashboard')

@section('content')
    <div class="profile__card mt-5">
        <div class="profileHeadingContainer text-center">
            <i class="profile-heading__icon far fa-user"></i>
        </div>
        <form action="" class="profile__form">
            <h2 class="text-center">Personal Information</h2>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="input__first-name">First name</label>
                    <input type="text" class="form-control" id="input__first-name" placeholder="first-name">
                </div>
                <div class="form-group col-md-6">
                    <label for="input__last-name">Last name</label>
                    <input type="text" class="form-control" id="input__last-name" placeholder="Last name">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Nnewi St">
            </div>
            <div class="form-group">
                <label for="inputAddress2">Address 2</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, flat, or floor">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">State</label>
                    <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">Zip</label>
                    <input type="text" class="form-control" id="inputZip">
                </div>
            </div>
            <div class="form-group mb-5">
                    <label for="input__phone-number">Phone number</label>
                    <input type="text" class="form-control" id="input__phone-number" placeholder="080xxx">
                </div>
            <hr>
            <h2 class="text-center my-3">Bank Information</h2>

            <div class="row">
                <div class="form-group col-md-6">
                    <label for="input__bank-name">Bank name</label>
                    <input type="text" class="form-control" id="input__bank-name" placeholder="Bank name">
                </div>
                <div class="form-group col-md-6">
                    <label for="input__last-name">Account number</label>
                    <input type="text" class="form-control" id="input__acc-no" placeholder="Account number">
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-lg profile__btn px-5 mt-2">Save</button>
        </form>
    </div>
@endsection