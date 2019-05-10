@extends('layouts.accounts')

@section('content')
  <div class="sectionWrap">
    <div class="row">
        <div class="col-10 col-md-6 mx-auto">
            <div class="form-box">
                <div class="formHeadingContainer text-center">
                    <i class="form-heading__icon far fa-user"></i>
                    <h2 class="heading__secondary form-heading my-3">Register</h2>
                </div>

                <form action="{{ route('register')}}" method="POST" class="form__content">
                    @csrf
                    <div class="form-group">
                        <div class="form-group__content">
                            <input required type="text" class="form__input form-control {{ $errors->has('firstname') ? ' is-invalid' : '' }} mx-auto" id="form__input--first-name" name="firstname" value="{{ old('firstname') }}" placeholder="First Name">
                            @if ($errors->has('firstname'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('firstname') }}</strong>
                            </span> @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-group__content">
                            <input required type="text" class="form__input form-control {{ $errors->has('lastname') ? ' is-invalid' : '' }} mx-auto px-3" id="form__input--last-name" name="lastname" value="{{ old('last-name') }}" placeholder="Last Name">
                            @if ($errors->has('lastname'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('lastname') }}</strong>
                            </span> @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-group__content">
                            <input required type="text" class="form__input form-control {{ $errors->has('username') ? ' is-invalid' : '' }} mx-auto px-3" id="form__input--username" name="username" value="{{ old('username') }}" placeholder="Username">
                            @if ($errors->has('username'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span> @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-group__content">
                            <input required type="email" class="form__input form-control {{ $errors->has('email') ? ' is-invalid' : '' }} mx-auto px-3"
                            id="form__input--email" name="email" placeholder="Email" value="{{ old('email') }}">
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-group__content">
                            <input required type="password" class="form__input form-control {{ $errors->has('password') ? ' is-invalid' : '' }} mx-auto px-3"
                            id="form__input--password" name="password" placeholder="Password">
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-group__content">
                            <input required type="password" class="form__input form-control mx-auto px-3" id="form__input--confirm-password" name="password_confirmation" placeholder="Confirm Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group__content register">
                            <input required type="checkbox" class="form__input--checkbox" id="form__input--checkbox" name="remember">
                        @if ($errors->has('remember'))
                            <span class="invalid-feedback" role="alert">
                                <strong>Accept terms and conditions</strong>
                            </span>
                        @endif
                            <label for="form__input--checkbox" class="form__input--labelRegister ">
                                <!-- custom checkbox style -->
                                <span class="label-spanRegister">
                                    <i class="label-span__icon fas fa-check"></i>
                                </span> <!-- end of custom checkbox -->
                                <span class="label-textRegister">
                                    I Accept <a href="#" class="form__input--link form__input--terms-link">Terms and Conditions</a>
                                </span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group form-btnbox">
                        <button type="submit" class="form-control form__btn mb-4">Create An Account</button>
                        <p class="form__text">Already a member? <a href="{{ route('login') }}" class="form__input--link">Login Here</a> </p>
                    </div>
                </form>

            </div>
        </div>
    </div>
  </div>
@endsection
