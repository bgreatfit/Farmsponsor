@extends('layouts.accounts')

@section('content')
    <section class="section-form container">
        <div class="row">
            <div class="col-10 col-md-6 mx-auto">
                <div class="form-box">
                    <div class="formHeadingContainer text-center">
                        <i class="form-heading__icon far fa-user"></i>
                        <h2 class="heading__secondary form-heading my-3">Register</h2>
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
                        <div class="form-group">
                                <div class="form-group__content register">
                                        <input type="checkbox" class="form__input--checkbox" id="form__input--checkbox" name="yes">
                                        <label for="form__input--checkbox" class="form__input--labelRegister ">
                                            <!-- custom checkbox style -->
                                            <span class="label-spanRegister">
                                                <i class="label-span__icon fas fa-check"></i>
                                            </span> 
                                            <span class="label-textRegister">
                                                I Accept <a href="#" class="form__input--link form__input--terms-link">Terms and Conditions</a>
                                            </span>
                                        </label>
                                    </div>
                        </div>
                        <div class="form-group form-btnbox">
                            <button type="submit" class="form-control form__btn mb-4">Create An Account</button>
                            <p class="form__text">Already a member? <a href="#" class="form__input--link">Login Here</a> </p>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>

@endsection