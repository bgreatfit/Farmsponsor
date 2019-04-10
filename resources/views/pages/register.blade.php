@extends('layouts.accounts')

@section('content')
    <section class="section-form container">
        <div class="row">
            <div class="col-10 col-md-6 mx-auto">
                <div class="form-box">
                    <div class="formHeadingContainer text-center">
                        <i class="form-heading__icon far fa-user"></i>
                        <h2 class="heading-secondary form-heading">Register</h2>
                    </div>

                    <form action="" method="POST" class="form__content">
                    <div class="form-group">
                      <div class="form-group__content">
                        <input type="text" class="form__input form-control mx-auto" id="form__input--first-name" name="first-name" placeholder="First Name">
                      </div>
                    </div>

                    <div class="form-group">
                        <div class="form-group__content">
                            <input type="text" class="form__input form-control mx-auto px-3" id="form__input--last-name" name="last-name" placeholder="Last Name">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-group__content">
                            <input type="text" class="form__input form-control mx-auto px-3" id="form__input--username" name="username" placeholder="Username">
                        </div>
                    </div>

                    <div class="form-group">
                            <div class="form-group__content">
                                <input type="email" class="form__input form-control mx-auto px-3" id="form__input--email" name="email" placeholder="Email">
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
                    <div class="form-group ml-md-4 pl-md-2">
                        <div class="form-group__content">
                            <input type="checkbox" class="form__input--checkbox" id="form__input--terms" name="terms" value="yes">
                            <label for="form__input--terms" class="form__input--label">I Accept <a href="#" class="form__input--link form__input--terms-link">Terms and Conditions</a></label>
                        </div>
                    </div>
                    <div class="form-group form-btnbox">
                        <button type="submit" class="btn btn-info btn-lg form__btn">Create An Account</button>
                        <p class="form__text u-margin-top-small">Already a member? <a href="#" class="form__input--link">Login Here</a> </p>
                    </div>

                    </form>

                </div>
            </div>
        </div>
    </section>

@endsection