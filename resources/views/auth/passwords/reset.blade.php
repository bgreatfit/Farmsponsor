@extends('layouts.accounts')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card reset-card">
                <div class="card-header text-center">
                    <h2 class="form-heading">Reset Password</h2>
                    {{-- {{ __('Reset Password') }} --}}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="form__input--label col-12 col-form-label">{{ __('E-Mail Address') }}</label>

                            <div class="col-12 col-md-12">
                                <input id="email" type="email" class="form__input form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="form__input--label col-12 col-form-label">{{ __('Password') }}</label>

                            <div class="col-12 col-md-12">
                                <input id="password" type="password" class="form__input form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="form__input--label col-12  col-form-label">{{ __('Confirm Password') }}</label>

                            <div class="col-12 col-md-12">
                                <input id="password-confirm" type="password" class="form__input form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12 col-12">
                                <button type="submit" class="btn reset-card__btn">
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
@endsection
