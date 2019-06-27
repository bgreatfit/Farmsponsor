<footer class="page-footer">
    <div class="container">
        <div class="footer-subscribe">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6">
                    <div class="footer__segment">
                        <p class="footer__subscribe--text mb-md-0">
                            Ready To Get More Updates
                            From Farmsponsor?
                        </p>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-6">
                    <div class="footer__segment">
                        <form action="{{route('newsletter.subscribe')}}" class="footer__form" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-8 col-12">
                                    <input type="text" class="form-control footer__input" placeholder="Enter email" aria-label="Recipient's username" aria-describedby="basic-addon2" name="email">
                                </div>
                                <div class="col-md-4 col-12">
                                    <button class="btn btn-outline-secondary form-control ml-md-3 subscribe-btn" type="submit">Subscribe</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-links">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="footer__content">
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <p class="footer__text">HELP</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <div class="footer__item"><a href="mailto:farmsponsorng@gmail.com" class="footer__links">Contact</a></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <div class="footer__item"><a href="#" class="footer__links">Help Center</a></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <div class="footer__item"><a href="#" class="footer__links">Terms and Conditions</a></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <div class="footer__item"><a href="#" class="footer__links">Privacy Policy</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="footer__content">
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <p class="footer__text">FARMSPONSOR</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12">
                            <div class="footer__item"><a href="{{route('home')}}" class="footer__links">Home</a></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <div class="footer__item"><a href="{{route('about')}}" class="footer__links">About</a></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <div class="footer__item"><a href="{{route('aboutVestbanking')}}" class="footer__links">Vestbanking</a></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <div class="footer__item"><a href="https:farmsponsor.com.ng/blog" target="_blank" class="footer__links">Blog</a></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <div class="footer__item"><a href="#" class="footer__links">Careers</a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="footer__content">
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <p class="footer__text">GET STARTED</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <div class="footer__item"><a href="#how-it-works" class="footer__links">How it works</a></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <div class="footer__item"><a href="#invest-section" class="footer__links">Why invest</a></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <div class="footer__item"><a href="{{route('vestbanking')}}" class="footer__links">Get involved</a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="footer__content">
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <p class="footer__text">PORT HARCOURT</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-12">
                                <div class="footer__item">
                                    <p class="footer__links">16 Abua Close, Beside RCCG Zonal HQ,</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-12">
                                <div class="footer__item">
                                    <p class="footer__links">Rumuibekwe, Port Harcourt,</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-12">
                                <div class="footer__item">
                                    <p class="footer__links">Rivers State, Nigeria.</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-12">
                                <div class="footer__item">
                                    <p class="footer__links">+ 234 703 196 0724</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-12">
                <div class="footer__social">
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <p class="footer__text">CONNECT</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <div class="footer__item footer__item--social">
                                <a href="https://www.facebook.com/farmsponsorng" target="_blank" class="footer__links mr-3">
                                    <img src="{{asset('img/facebook.svg')}}" alt="Facebook logo" class="footer__icon--fb">
                                    {{-- <i class="fab fa-facebook-square footer__icon footer__icon--fb"></i> --}}
                                </a>
                                <a href="https://twitter.com/Farmsponsor1" target="_blank" class="footer__links mr-3">
                                    <img src="{{asset('img/twitter.svg')}}" alt="twitter logo" class="footer__icon--twt">
                                    {{-- <i class="fab fa-instagram footer__icon footer__icon--ig"></i> --}}
                                </a>
                                <a href="https://www.instagram.com/farmsponsor" target="_blank" class="footer__links mr-3">
                                    <img src="{{asset('img/instagram.svg')}}" alt="instagram logo" class="footer__icon--ig">
                                    {{-- <i class="fab fa-twitter-square footer__icon footer__icon--twt"></i> --}}
                                </a>
                                <a href="https://github.com/globetrot-farmsponsor" target="_blank" class="footer__links">
                                    <img src="{{asset('img/github.svg')}}" alt="github logo" class="footer__icon--gh">
                                    {{-- <i class="fab fa-twitter-square footer__icon footer__icon--twt"></i> --}}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-12">
                <div class="footer__copyright">
                    <p class="footer__copyright--text">Copyright &copy; Globetrot Farmsponsor Nig Ltd 2019</p>
                </div>
            </div>
        </div>
    </div>
</footer>
