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

            <form action="{{ route('login')}}" method="POST" class="form__main">
                @csrf
                <div class="form-group">
                    <div class="form-group__content">
                        <input type="email" class="form__input form-control{{ $errors->has('email') ? ' is-invalid' : '' }} mx-auto px-3"
                            id="form__input--username" name="email" placeholder="Email Address"
                            value="{{ old('email') }}">
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-group__content">
                        <input type="password" class="form__input form-control{{ $errors->has('password') ? ' is-invalid' : '' }} mx-auto px-3" id="form__input--password" name="password" placeholder="Password">
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                {{-- <div class="form-group">
                    <div class="form-group__content">
                        <input type="password" class="form__input form-control mx-auto px-3" id="form__input--confirm-password" name="password" placeholder="Confirm Password">
                    </div>
                </div> --}}
                <div class="form-group mb-4">
                    <div class="form-group__content">
                        <input type="checkbox" class="form__input--checkbox" id="form__input--checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label for="form__input--checkbox" class="form__input--label ">
                            <!-- custom checkbox style -->
                            <span class="label-span">
                                <i class="label-span__icon fas fa-check"></i>
                            </span>
                            <p class="label-text">Remember me</p>
                        </label>
                    </div>
                </div>

                @if (Route::has('password.request'))
                <div class="form-group form-btnbox">
                    <button type="submit" class="form-control form__btn mb-4">Login</button>
                    <p class="form__text">Not a member? <a href="{{ route('login') }}" class="form__input--link mb-4">Create An Account</a> </p>
                    <a href="{{ route('password.request') }}" class="form__input--link">Forgot your password?</a>
                </div>
                @endif

                </form>

            </div>
        </div>
    </div>
</section>

@endsection
