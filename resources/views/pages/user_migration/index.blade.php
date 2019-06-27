@extends('layouts.accounts')

@section('content')
    <div class="row">
        <div class="col-10 col-md-6 mx-auto">
            <div class="form-box">
                <div class="formHeadingContainer text-center">
                    <h2 class="heading__secondary form-heading">Reset Password</h2>
                </div>

                <form action="{{route('user.reset.process', $usertoken->token)}}" method="POST" class="form__main">
                    @csrf
                    <input type="hidden" name="email" value="{{$usertoken->email}}">
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
                            <input required type="password" class="form__input form-control {{ $errors->has('confirm-password') ? ' is-invalid' : '' }} mx-auto px-3" id="form__input--confirm-password" name="password_confirmation">
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
