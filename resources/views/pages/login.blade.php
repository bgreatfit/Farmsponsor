@extends('layouts.accounts')

@section('content')
<section class="section-form container-fluid">
    <div class="row">
        <div class="col-10 col-md-6 mx-auto">
            <div class="form-box">
                <div class="formHeadingContainer text-center">
                    <i class="form-heading__icon far fa-user"></i>
                    <h2 class="heading__secondary form-heading">Login</h2>
                </div>

                <form action="" method="POST" class="form__main">
                <div class="form-group">
                    <div class="form-group__content">
                        <input type="text" class="form__input form-control mx-auto px-3" id="form__input--username" name="username" placeholder="Username">
                    </div>
                </div>
            
                <div class="form-group">
                    <div class="form-group__content">
                        <input type="password" class="form__input form-control mx-auto px-3" id="form__input--password" name="password" placeholder="Password">
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-group__content">
                        <input type="password" class="form__input form-control mx-auto px-3" id="form__input--confirm-password" name="password" placeholder="Confirm Password">
                    </div>
                </div>
                <div class="form-group mb-4">
                    <div class="form-group__content">
                        <input type="checkbox" class="form__input--checkbox" id="form__input--checkbox" name="yes">
                        <label for="form__input--checkbox" class="form__input--label ">
                            <!-- custom checkbox style -->
                            <span class="label-span">
                                <i class="label-span__icon fas fa-check"></i>
                            </span> 
                            <p class="label-text">Remember me</p>
                        </label>
                    </div>
                </div>
                <div class="form-group form-btnbox">
                    <button type="submit" class="form-control form__btn mb-4">Login</button>
                    <p class="form__text">Not a member? <a href="#" class="form__input--link mb-4">Create An Account</a> </p>
                    <a href="#" class="form__input--link">Forgot your password?</a>
                </div>

                </form>

            </div>
        </div>
    </div>
</section>

{{-- <aside class="trials">
    <h1>collapse</h1>
    <div class="collapse" id="myContent">
        <div class="well">this is a collapse</div>
    </div>
    <button class="btn btn-info" data-toggle="collapse" data-target="#myContent">click to collapse</button><hr>
    <h1>dropdown</h1>
    <div class="dropdown">
        <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">CLICK HERE</button>
        <ul class="dropdown-menu">
            <li>Cars</li>
            <li>Girls</li>
            <li>Game console</li>
            <li>Money bags </li>
        </ul>
    </div>

    <hr>
    <h1>accordion</h1>
</aside> --}}

@endsection