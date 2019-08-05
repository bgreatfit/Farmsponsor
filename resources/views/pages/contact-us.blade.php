@extends('layouts.basic')
@section('content')
    <div class="contact-us-wrap">
        <section class="map-container">
            {{-- <div class="container-fluid"> --}}
                <div class="flex-row">
                    <div class="flex-col-2">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3975.5679062484205!2d7.051126414316145!3d4.844000296482587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1069cd1fb8059409%3A0x18096b315cf8b6fc!2sFarmSponsor!5e0!3m2!1sen!2sng!4v1563871975803!5m2!1sen!2sng" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <div class="flex-col-2">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    <div class="contact-form-container">
                                        <h1 class="contact-heading">Contact.</h1>
                                        <h1 class="contact-heading">Get in touch</h1>
                                        <p class="contact-text">leave us a message</p>
                                        <form action="{{route('contact.store')}}" method="POST" class="contact-form">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="contact-first-name__input" class="contact-first-name__label">
                                                            Name <span class="required-star text-danger">*</span>
                                                        </label>
                                                        <input type="text" id="contact-first-name__input"  name="name"  value="{{old('name')}}" class="contact-form__input form-control {{ $errors->has('name') ? ' is-invalid' : '' }} ">

                                                        @if ($errors->has('name'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('name') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="contact-email__input" class="contact-email__label">
                                                            Email <span class="required-star text-danger">*</span>
                                                        </label>
                                                        <input type="email" id="contact-email__input" name="email"  value="{{old('email')}}" class="contact-form__input form-control {{ $errors->has('email') ? ' is-invalid' : '' }} ">
                                                        @if ($errors->has('email'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="col-12 mt-2">
                                                    <div class="form-group">
                                                        <label for="contact-email__input" class="contact-email__label">
                                                            Subject <span class="required-star text-danger">*</span>
                                                        </label>
                                                        <input type="text" id="contact-email__input" name="subject"  value="{{old('subject')}}" class="contact-form__input form-control {{ $errors->has('subject') ? ' is-invalid' : '' }} ">
                                                        @if ($errors->has('subject'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('subject') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="contact-message" class="contact-message__label">Message</label>
                                                <textarea class="form-control contact-form__message {{ $errors->has('message') ? ' is-invalid' : '' }} " name="message" id="contact-message" rows="10"> {{old('message')}}</textarea>

                                                @if ($errors->has('message'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('message') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group contact-submit__btn-container">
                                                <button class="contact-submit__btn btn">Send message</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            {{-- </div> --}}
        </section>
        <section class="main-content-area">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12">
                        <div class="contact-background">
                            <div class="contact-background__heading-content">
                                <h1 class="contact-heading">quick.</h1>
                                <h1 class="contact-heading">support</h1>
                                <p class="contact-text contact-text-lg">YOU CAN GET ALL THE CONTACT INFORMATION.</p>
                            </div>
                            <div class="background">
                                <p class="background-text">Contact</p>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="contact-medium">
                        <img src="{{asset('img/contact-location.svg')}}" alt="location" class="contact-medium__icon contact-medium__location">
                            <h2 class="contact-medium__title">visit us</h2>
                            <p class="contact-medium__info">16 Abua Close, Beside RCCG Zonal HQ, </p>
                            <p class="contact-medium__info">Rumuibekwe, Port Harcourt,</p>
                            <p class="contact-medium__info">Rivers State, Nigeria.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="contact-medium">
                            <img src="{{asset('img/contact-phone.svg')}}" alt="location" class="contact-medium__icon ">
                            <h2 class="contact-medium__title">call us</h2>
                            <p class="contact-medium__info">+ 234 905 913 3051 </p>
                            <p class="contact-medium__info">+ 234 703 196 0724 </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="contact-medium">
                            <img src="{{asset('img/contact-mail.svg')}}" alt="location" class="contact-medium__icon">
                            <h2 class="contact-medium__title">email us</h2>
                            <p class="contact-medium__info">farmsponsorng@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h3 class="connect">connect with us</h3>
                        <div class="social-media-handles">
                            <a href="https://www.facebook.com/farmsponsorng" target="_blank" class="social-media">
                                <img src="{{asset('img/contact-fb.svg')}}" alt="facebook" class="social-media__handle">
                            </a>
                            <a href="https://twitter.com/Farmsponsor1" target="_blank" class="social-media">
                                <img src="{{asset('img/contact-twt.svg')}}" alt="twitter" class="social-media__handle">
                            </a>
                            <a href="https://www.instagram.com/farmsponsor" target="_blank" class="social-media">
                                <img src="{{asset('img/contact-ig.svg')}}" alt="instagram" class="social-media__handle">
                            </a>
                            <a href="https://github.com/globetrot-farmsponsor" target="_blank" class="social-media">
                                <img src="{{asset('img/contact-gh.svg')}}" alt="github" class="social-media__handle">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection