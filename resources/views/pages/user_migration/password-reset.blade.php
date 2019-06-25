@extends('layouts.accounts')

{{-- @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card password-reset__card">
                <div class="card-header password-reset__card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action=" ">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="form__input--label col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form__input form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="form__input--label col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form__input form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="form__input--label col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-8">
                                <input id="password-confirm" type="password" class="form__input form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn form-control reset-card__btn">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@section('content')
    <div class="row">
        <div class="col-10 col-md-6 mx-auto">
            <div class="form-box">
                <div class="formHeadingContainer text-center">
                    <h2 class="heading__secondary form-heading">Reset Password</h2>
                </div>

                <form action=" " method="POST" class="form__main">
                    @csrf
                
                    <div class="form-group">
                        <div class="form-group__content">
                            <label for="form__input--password" class="form__input--label">Password</label>
                            <input required type="password" class="form__input form-control {{ $errors->has('password') ? ' is-invalid' : '' }} mx-auto px-3" id="form__input--password" name="password">
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-group__content">
                            <label for="form__input--confirm-password" class="form__input--label">Confirm password </label>
                            <input required type="password" class="form__input form-control {{ $errors->has('confirm-password') ? ' is-invalid' : '' }} mx-auto px-3" id="form__input--confirm-password" name="confirm-password">
                            @if ($errors->has('confirm-password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('confirm-password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    @if (Route::has('password.request'))
                    <div class="form-group form-btnbox">
                        <button type="submit" class="form__btn mb-4">Reset</button>
                    </div>
                    @endif

                </form>

            </div>
        </div>
    </div>


@endsection
