@extends ('layouts.basic')

@section('content')
@include('includes.header')
  <section class="how-it-works">
    <div class="container">
      <div class="row">
          <div class="col-12 col-md-6">
            <div class="content-wrap">
              <div class="fs-intro">
                  <h2 class="fs-intro__heading heading__secondary mb-5 ">
                      Farm Sponsor is here to help you invest your money in Agriculture
                  </h2>
                  <p class="fs-intro--text">
                      Food security is the responsibility of everyone of us.
                      If you feel farming is dirty, sponsor a farmer.
                      Together we can stop hunger.
                  </p>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-5">
              <div class="content-wrap">
                <img src="{{asset('img/asset 1.png')}}" alt="iphone" class="fs-process__photo" width="100%">
              </div>
          </div>
      </div>

      <div class="row">
            <div class="col-12 col-md-4">
              <div class="content-wrap mt-md-5">
                <div class="fs-process m-3 ">
                    <img src="img/asset 2.png" alt="iphone" class="fs-process__photo" width="100%">
                </div>
              </div>
            </div>

            <div class="col-12 col-md-6 offset-md-2">
              <div class="content-wrap">
                <div class="fs-process">
                    <div class="fs-process--row">
                        <h2 class="heading__secondary fs-process__heading">
                            <Span><i class="fs-process__heading--icon icon-basic-gear"></i></Span>
                            <span>How the farm sponsor app works:</span>
                        </h2>
                        <h3 class="heading__tertiary fs-process__heading--tertiary">
                            <Span><i class="heading__tertiary--icon icon-basic-compass"></i></Span>Create A User Account
                        </h3>
                        <p class="fs-process__text">
                            Simply signup using your email or social media
                            (Facebook and Twitter). Creating an account takes just a few seconds.
                        </p>
                    </div>

                    <div class="fs-process--row">
                      <h3 class="heading__tertiary fs-process__heading--tertiary">
                          <Span><i class="heading__tertiary--icon icon-basic-compass"></i></Span>Vest Funds in Vestbank wallet
                      </h3>
                      <p class="fs-process__text">
                         Add the funds you want to sponsor a farm with to your personal Vestbank wallet.
                      </p>
                      <a href="{{route('aboutVestbanking')}}" class="fs-process__btn fs-invest__cta btn">More info on Vestbanking</a>
                    </div>

                    <div class="fs-process--row">
                        <h3 class="heading__tertiary fs-process__heading--tertiary">
                            <Span><i class="heading__tertiary--icon icon-basic-magnifier"></i></Span>Find A Farm To Sponsor
                        </h3>
                        <p class="fs-process__text">
                            Select a farm from our list of available farms ready
                            for sponsorship on the current farm cycle, buy a specific
                            number of units at N100,000 per unit and that's it. Note: You must have up
                            to the specified sponsorship amount in your Vestbank balance inorder to sponsor a farm.
                          .
                        </p>
                    </div>

                    <div class="fs-process--row">
                        <h3 class="heading__tertiary fs-process__heading--tertiary">
                            <Span><i class="heading__tertiary--icon icon-basic-clockwise"></i></Span>Stay Updated
                        </h3>
                        <p class="fs-process__text">
                          Regularly check our updates to keep you informed on our promos, farm updates, blogs and others.
                        </p>
                    </div>

                </div>
              </div>
            </div>
      </div>

      <div class="row">
          <div class="col-md-6 col-12">
            <div class="content-wrap">
                <h2 class="fs-invest__heading heading__secondary">why invest with farm sponsor</h2>
                <div class="fs-invest__row">
                  <h3 class="fs-invest__heading--tertiary heading__tertiary">
                      We Empower Farmers
                  </h3>
                  <p class="fs-invest__text">
                    We empower local farmers with funds from individuals and skils to produce at 
                    capacity or more and in return, you will get back your initial capital and a 
                    certain percentage of your initial capital (usually 15%) after harvest (Usually 
                    12 weeks) 
                  </p>
                </div>

                <div class="fs-invest__row">
                    <h3 class="fs-invest__heading--tertiary heading__tertiary">
                        We Have High Returns On Investments
                    </h3>
                    <p class="fs-invest__text">
                      At an ROI of up to 15% on your capital investment over the farming season, 
                      Farm Sponsor has the highest return on investment in the industry
                    </p>
                </div>

                <div class="fs-invest__row">
                    <h3 class="fs-invest__heading--tertiary heading__tertiary">
                      Multiple Farming Cycles
                    </h3>
                    <p class="fs-invest__text">
                      In just under a year since we began operations, we've had 14 farming cycles. 
                      This means that you have the potential to keep earning as much and as often as 
                      possible. This is residual income at it's finest.
                    </p>
                </div>

                <div class="fs-invest__row">
                <a href="{{route('login')}}" class="fs-invest__cta btn mr-5 my-3">Get started with Sponsor</a>
                    <a href="{{route('faq')}}" class="fs-invest__cta btn">Findout more</a>
                </div>
            </div>
          </div>

          <div class="col-md-5 col-12 offset-md-1">
            <div class="content-wrap">
                <img src="img/invest.png" alt="investment" class="fs-invest__photo" width="100%">
            </div>
          </div>
      </div>

    </div> <!-- container -->
  </section>

  <section class="statistics">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-12">
            <div class="content-wrap text-center">
              <h3 class="stat-update__heading heading__tertiary">
                We've been working so hard for you
              </h3>
              <p class="stat-update__text">Our numbers speak for themselves</p>
            </div>
          </div>
        </div>
        <div class="row">
          <!--stats counter -->
          <div class="col-md-2 col-12 offset-md-1">
            <div class="content-wrap">
              <div class="row justify-content-center">
                  <i class="fas fa-user-tie sponsors"></i>
              </div>
              <div class="row justify-content-center">
                  <span class="sponsor stat-update__figure"></span>
              </div>
              <div class="row justify-content-center">
                  <span class="stat-update__figure--label">Sponsors</span>
              </div>
            </div>
          </div>
          <div class="col-md-2 col-12">
            <div class="content-wrap">
              <div class="row justify-content-center">
                  <i class="fas fa-user-circle cycles"></i>
              </div>
              <div class="row justify-content-center">
                  <span class="cycle stat-update__figure"></span>
              </div>
              <div class="row justify-content-center">
                <span class="stat-update__figure--label">cycles</span>
              </div>
            </div>
          </div>
          <div class="col-md-2 col-12">
            <div class="content-wrap">
              <div class="row justify-content-center">
                  <i class="fas fa-kiwi-bird farm"></i>
              </div>
              <div class="row justify-content-center">
                <span class="stat-update__figure"><span class="farms" >0</span>&#43;</span>
              </div>
              <div class="row justify-content-center">
                <span class="stat-update__figure--label">Farms</span>
              </div>
            </div>
          </div>

          <div class="col-md-2 col-12">
            <div class="content-wrap">
              <div class="row justify-content-center">
                  <i class="fas fa-users farmer"></i>
              </div>
              <div class="row justify-content-center">
                <span class="stat-update__figure"><span class="farmers">0</span>&#43;</span>
              </div>
              <div class="row justify-content-center">
                <span class="stat-update__figure--label">Farmers</span>
              </div>
            </div>
          </div>

          <div class="col-md-2 col-12">
            <div class="content-wrap">
                <div class="row justify-content-center">
                  <i class="fas fa-comments review"></i>
                </div>
                <div class="row justify-content-center">
                  <span class="stat-update__figure"><span class="reviews">0</span>&#43;</span>
                </div>
                <div class="row justify-content-center">
                  <span class="stat-update__figure--label">Reviews</span></p>
                </div>
            </div>
          </div>
        </div>
      </div>
  </section>

  <section class="news-letter">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="content-wrap">
            <h2 class="heading__secondary heading__secondary--news-letter">Say hello to farm sponsor</h2>
            <p class="news-letter__text">
                If you have any questions, simply say hello
                to us at hello@farmsponsor.com.ng and we’ll respond to you immediately
            </p>
            <form class="news-letter__form" method="POST" action="{{route('newsletter.subcribe')}}">
                @csrf
            <h3 class="heading__tertiary text-center">OR</h3>
            <p class="news-letter__text">Subscribe to our mailing list to get first hand information on our latest offers, products and services.</p>
            <form class="news-letter__form">
                <div class="form-group news-letter__form-group">
                  <label for="news-letter-email">Email address: </label>
                  <input type="email" class="form-control" id="news-letter-email" aria-describedby="emailHelp" name="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-success btn-lg btn__news-letter">Submit</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </section>

@endsection
