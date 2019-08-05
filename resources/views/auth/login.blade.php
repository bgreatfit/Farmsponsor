@extends('layouts.accounts')

@section('content')
    <div class="row">
        <div class="col-10 col-md-6 mx-auto">
            <div class="form-box">
                <div class="formHeadingContainer text-center">
                    <h2 class="form-heading">Login</h2>
                </div>

            <form action="{{ route('login')}}" method="POST" class="form__main">
                @csrf
                <div class="form-group">
                    <div class="form-group__content">
                        <label for="" class="password-request--label">
                            <a href="{{ route('password.request') }}" class="form__input--link">Forgot your password?</a>
                        </label>
                        <input required type="email" class="form__input form-control{{ $errors->has('email') ? ' is-invalid' : '' }} mx-auto px-3"
                            id="form__input--username" name="email" value="{{ old('email') }}" placeholder="Email">
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-group__content">
                        <input required type="password" class="form__input form-control {{ $errors->has('password') ? ' is-invalid' : '' }} mx-auto px-3" id="form__input--password" name="password" placeholder="Password">
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                @if (Route::has('password.request'))
                <div class="form-row form-btnbox">
                    <div class="form-group col-12 col-md-4">
                        <button type="submit" class="form__btn">Login</button>
                    </div>
                    <div class="form-group col-12 col-md-8">
                        <div class="form-group-content">
                            <p class="form__text">No account? <a href="{{ route('register') }}" class="form__input--link">Create account</a> </p>
                        </div>
                    </div>
                    </div>
                </div>
                @endif
                </form>
            </div>
        </div>
    </div>


@endsection
