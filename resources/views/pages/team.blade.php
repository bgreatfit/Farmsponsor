@extends('layouts.basic')

@section('content')
  <main class="team-page-wrap">
      <div class="team-intro-section">
        <div class="container-fluid px-0">
            <div class="row">
                <div class="col-12 col-md-6">
                  <div class="team-content">
                      <h1 class="team__heading"> The Team </h1>
                      <p class="team__text">
                        Farmsponsor believes so much in teamwork, Everyone irrespective of their various departments 
                        aligns their intellect to see the reality of lines falling into place, one step 
                        at a time. The team is a community of self motivated, innovative individuals 
                        who understands the AgricTech space in line with the mission and vision of ensuring 
                        food security in Africa.
                      </p>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="team-content">
                      <div class="team__photo-box">
                        <img src="{{asset('img/team.svg')}}" alt="Two men and two women standing" class="team__photo">
                      </div>
                  </div>
                </div>
            </div>
        </div>
      </div>
      
      {{-- <div class="team-member-section">
        <div class="the-team">
          <div class="container">
            <div class="row">
              <div class="col-12 col-md-6">
                <div class="team-member__content">
                  <div class="team-member__card">
                    <img src="{{asset('img/b-kenneth.svg')}}" alt="Bill Kenneth, CEO" class="member__photo">
                    <h3 class="member__name">Bill Kenneths</h3>
                    <p class="member__job">Chairman, MD/CEO</p>
                    <div class="member__socials">
                      <a href="#" class="member__socials--link">
                        <img src="{{asset('img/team-linked-in.svg')}}" alt="LinkedIn" class="member__socials--icon">
                      </a>
                      <a href="#" class="member__socials--link">
                        <img src="{{asset('img/team-email.svg')}}" alt="email" class="member__socials--icon">
                      </a>
                      <a href="#" class="member__socials--link">
                        <img src="{{asset('img/team-twitter.svg')}}" alt="twitter" class="member__socials--icon">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="team-member__content">
                  <div class="team-member__card">
                    <img src="{{asset('img/b-kenneth.svg')}}" alt="Bill Kenneth, CEO" class="member__photo">
                    <h3 class="member__name">Bill Kenneths</h3>
                    <p class="member__job">Chairman, MD/CEO</p>
                    <div class="member__socials">
                      <a href="#" class="member__socials--link">
                        <img src="{{asset('img/team-linked-in.svg')}}" alt="LinkedIn" class="member__socials--icon">
                      </a>
                      <a href="#" class="member__socials--link">
                        <img src="{{asset('img/team-email.svg')}}" alt="email" class="member__socials--icon">
                      </a>
                      <a href="#" class="member__socials--link">
                        <img src="{{asset('img/team-twitter.svg')}}" alt="twitter" class="member__socials--icon">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-4">
                  <div class="team-member__content">
                    <div class="team-member__card">
                      <img src="{{asset('img/b-kenneth.svg')}}" alt="Bill Kenneth, CEO" class="member__photo">
                      <h3 class="member__name">Bill Kenneths</h3>
                      <p class="member__job">Chairman, MD/CEO</p>
                      <div class="member__socials">
                        <a href="#" class="member__socials--link">
                          <img src="{{asset('img/team-linked-in.svg')}}" alt="LinkedIn" class="member__socials--icon">
                        </a>
                        <a href="#" class="member__socials--link">
                          <img src="{{asset('img/team-email.svg')}}" alt="email" class="member__socials--icon">
                        </a>
                        <a href="#" class="member__socials--link">
                          <img src="{{asset('img/team-twitter.svg')}}" alt="twitter" class="member__socials--icon">
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-4">
                  <div class="team-member__content">
                    <div class="team-member__card">
                      <img src="{{asset('img/b-kenneth.svg')}}" alt="Bill Kenneth, CEO" class="member__photo">
                      <h3 class="member__name">Bill Kenneths</h3>
                      <p class="member__job">Chairman, MD/CEO</p>
                      <div class="member__socials">
                        <a href="#" class="member__socials--link">
                          <img src="{{asset('img/team-linked-in.svg')}}" alt="LinkedIn" class="member__socials--icon">
                        </a>
                        <a href="#" class="member__socials--link">
                          <img src="{{asset('img/team-email.svg')}}" alt="email" class="member__socials--icon">
                        </a>
                        <a href="#" class="member__socials--link">
                          <img src="{{asset('img/team-twitter.svg')}}" alt="twitter" class="member__socials--icon">
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-4">
                  <div class="team-member__content">
                    <div class="team-member__card">
                      <img src="{{asset('img/b-kenneth.svg')}}" alt="Bill Kenneth, CEO" class="member__photo">
                      <h3 class="member__name">Bill Kenneths</h3>
                      <p class="member__job">Chairman, MD/CEO</p>
                      <div class="member__socials">
                        <a href="#" class="member__socials--link">
                          <img src="{{asset('img/team-linked-in.svg')}}" alt="LinkedIn" class="member__socials--icon">
                        </a>
                        <a href="#" class="member__socials--link">
                          <img src="{{asset('img/team-email.svg')}}" alt="email" class="member__socials--icon">
                        </a>
                        <a href="#" class="member__socials--link">
                          <img src="{{asset('img/team-twitter.svg')}}" alt="twitter" class="member__socials--icon">
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-4">
                  <div class="team-member__content">
                    <div class="team-member__card">
                      <img src="{{asset('img/b-kenneth.svg')}}" alt="Bill Kenneth, CEO" class="member__photo">
                      <h3 class="member__name">Bill Kenneths</h3>
                      <p class="member__job">Chairman, MD/CEO</p>
                      <div class="member__socials">
                        <a href="#" class="member__socials--link">
                          <img src="{{asset('img/team-linked-in.svg')}}" alt="LinkedIn" class="member__socials--icon">
                        </a>
                        <a href="#" class="member__socials--link">
                          <img src="{{asset('img/team-email.svg')}}" alt="email" class="member__socials--icon">
                        </a>
                        <a href="#" class="member__socials--link">
                          <img src="{{asset('img/team-twitter.svg')}}" alt="twitter" class="member__socials--icon">
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-4">
                  <div class="team-member__content">
                    <div class="team-member__card">
                      <img src="{{asset('img/b-kenneth.svg')}}" alt="Bill Kenneth, CEO" class="member__photo">
                      <h3 class="member__name">Bill Kenneths</h3>
                      <p class="member__job">Chairman, MD/CEO</p>
                      <div class="member__socials">
                        <a href="#" class="member__socials--link">
                          <img src="{{asset('img/team-linked-in.svg')}}" alt="LinkedIn" class="member__socials--icon">
                        </a>
                        <a href="#" class="member__socials--link">
                          <img src="{{asset('img/team-email.svg')}}" alt="email" class="member__socials--icon">
                        </a>
                        <a href="#" class="member__socials--link">
                          <img src="{{asset('img/team-twitter.svg')}}" alt="twitter" class="member__socials--icon">
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-4">
                  <div class="team-member__content">
                    <div class="team-member__card">
                      <img src="{{asset('img/b-kenneth.svg')}}" alt="Bill Kenneth, CEO" class="member__photo">
                      <h3 class="member__name">Bill Kenneths</h3>
                      <p class="member__job">Chairman, MD/CEO</p>
                      <div class="member__socials">
                        <a href="#" class="member__socials--link">
                          <img src="{{asset('img/team-linked-in.svg')}}" alt="LinkedIn" class="member__socials--icon">
                        </a>
                        <a href="#" class="member__socials--link">
                          <img src="{{asset('img/team-email.svg')}}" alt="email" class="member__socials--icon">
                        </a>
                        <a href="#" class="member__socials--link">
                          <img src="{{asset('img/team-twitter.svg')}}" alt="twitter" class="member__socials--icon">
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-4">
                  <div class="team-member__content">
                    <div class="team-member__card">
                      <img src="{{asset('img/b-kenneth.svg')}}" alt="Bill Kenneth, CEO" class="member__photo">
                      <h3 class="member__name">Bill Kenneths</h3>
                      <p class="member__job">Chairman, MD/CEO</p>
                      <div class="member__socials">
                        <a href="#" class="member__socials--link">
                          <img src="{{asset('img/team-linked-in.svg')}}" alt="LinkedIn" class="member__socials--icon">
                        </a>
                        <a href="#" class="member__socials--link">
                          <img src="{{asset('img/team-email.svg')}}" alt="email" class="member__socials--icon">
                        </a>
                        <a href="#" class="member__socials--link">
                          <img src="{{asset('img/team-twitter.svg')}}" alt="twitter" class="member__socials--icon">
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-4">
                  <div class="team-member__content">
                    <div class="team-member__card">
                      <img src="{{asset('img/b-kenneth.svg')}}" alt="Bill Kenneth, CEO" class="member__photo">
                      <h3 class="member__name">Bill Kenneths</h3>
                      <p class="member__job">Chairman, MD/CEO</p>
                      <div class="member__socials">
                        <a href="#" class="member__socials--link">
                          <img src="{{asset('img/team-linked-in.svg')}}" alt="LinkedIn" class="member__socials--icon">
                        </a>
                        <a href="#" class="member__socials--link">
                          <img src="{{asset('img/team-email.svg')}}" alt="email" class="member__socials--icon">
                        </a>
                        <a href="#" class="member__socials--link">
                          <img src="{{asset('img/team-twitter.svg')}}" alt="twitter" class="member__socials--icon">
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-4">
                  <div class="team-member__content">
                    <div class="team-member__card">
                      <img src="{{asset('img/b-kenneth.svg')}}" alt="Bill Kenneth, CEO" class="member__photo">
                      <h3 class="member__name">Bill Kenneths</h3>
                      <p class="member__job">Chairman, MD/CEO</p>
                      <div class="member__socials">
                        <a href="#" class="member__socials--link">
                          <img src="{{asset('img/team-linked-in.svg')}}" alt="LinkedIn" class="member__socials--icon">
                        </a>
                        <a href="#" class="member__socials--link">
                          <img src="{{asset('img/team-email.svg')}}" alt="email" class="member__socials--icon">
                        </a>
                        <a href="#" class="member__socials--link">
                          <img src="{{asset('img/team-twitter.svg')}}" alt="twitter" class="member__socials--icon">
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-4">
                  <div class="team-member__content">
                    <div class="team-member__card">
                      <img src="{{asset('img/b-kenneth.svg')}}" alt="Bill Kenneth, CEO" class="member__photo">
                      <h3 class="member__name">Bill Kenneths</h3>
                      <p class="member__job">Chairman, MD/CEO</p>
                      <div class="member__socials">
                        <a href="#" class="member__socials--link">
                          <img src="{{asset('img/team-linked-in.svg')}}" alt="LinkedIn" class="member__socials--icon">
                        </a>
                        <a href="#" class="member__socials--link">
                          <img src="{{asset('img/team-email.svg')}}" alt="email" class="member__socials--icon">
                        </a>
                        <a href="#" class="member__socials--link">
                          <img src="{{asset('img/team-twitter.svg')}}" alt="twitter" class="member__socials--icon">
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-4">
                  <div class="team-member__content">
                    <div class="team-member__card">
                      <img src="{{asset('img/b-kenneth.svg')}}" alt="Bill Kenneth, CEO" class="member__photo">
                      <h3 class="member__name">Bill Kenneths</h3>
                      <p class="member__job">Chairman, MD/CEO</p>
                      <div class="member__socials">
                        <a href="#" class="member__socials--link">
                          <img src="{{asset('img/team-linked-in.svg')}}" alt="LinkedIn" class="member__socials--icon">
                        </a>
                        <a href="#" class="member__socials--link">
                          <img src="{{asset('img/team-email.svg')}}" alt="email" class="member__socials--icon">
                        </a>
                        <a href="#" class="member__socials--link">
                          <img src="{{asset('img/team-twitter.svg')}}" alt="twitter" class="member__socials--icon">
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-4">
                  <div class="team-member__content">
                    <div class="team-member__card">
                      <img src="{{asset('img/b-kenneth.svg')}}" alt="Bill Kenneth, CEO" class="member__photo">
                      <h3 class="member__name">Bill Kenneths</h3>
                      <p class="member__job">Chairman, MD/CEO</p>
                      <div class="member__socials">
                        <a href="#" class="member__socials--link">
                          <img src="{{asset('img/team-linked-in.svg')}}" alt="LinkedIn" class="member__socials--icon">
                        </a>
                        <a href="#" class="member__socials--link">
                          <img src="{{asset('img/team-email.svg')}}" alt="email" class="member__socials--icon">
                        </a>
                        <a href="#" class="member__socials--link">
                          <img src="{{asset('img/team-twitter.svg')}}" alt="twitter" class="member__socials--icon">
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-4">
                  <div class="team-member__content">
                    <div class="team-member__card">
                      <img src="{{asset('img/b-kenneth.svg')}}" alt="Bill Kenneth, CEO" class="member__photo">
                      <h3 class="member__name">Bill Kenneths</h3>
                      <p class="member__job">Chairman, MD/CEO</p>
                      <div class="member__socials">
                        <a href="#" class="member__socials--link">
                          <img src="{{asset('img/team-linked-in.svg')}}" alt="LinkedIn" class="member__socials--icon">
                        </a>
                        <a href="#" class="member__socials--link">
                          <img src="{{asset('img/team-email.svg')}}" alt="email" class="member__socials--icon">
                        </a>
                        <a href="#" class="member__socials--link">
                          <img src="{{asset('img/team-twitter.svg')}}" alt="twitter" class="member__socials--icon">
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-4">
                  <div class="team-member__content">
                    <div class="team-member__card">
                      <img src="{{asset('img/b-kenneth.svg')}}" alt="Bill Kenneth, CEO" class="member__photo">
                      <h3 class="member__name">Bill Kenneths</h3>
                      <p class="member__job">Chairman, MD/CEO</p>
                      <div class="member__socials">
                        <a href="#" class="member__socials--link">
                          <img src="{{asset('img/team-linked-in.svg')}}" alt="LinkedIn" class="member__socials--icon">
                        </a>
                        <a href="#" class="member__socials--link">
                          <img src="{{asset('img/team-email.svg')}}" alt="email" class="member__socials--icon">
                        </a>
                        <a href="#" class="member__socials--link">
                          <img src="{{asset('img/team-twitter.svg')}}" alt="twitter" class="member__socials--icon">
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-4">
                  <div class="team-member__content">
                    <div class="team-member__card">
                      <img src="{{asset('img/b-kenneth.svg')}}" alt="Bill Kenneth, CEO" class="member__photo">
                      <h3 class="member__name">Bill Kenneths</h3>
                      <p class="member__job">Chairman, MD/CEO</p>
                      <div class="member__socials">
                        <a href="#" class="member__socials--link">
                          <img src="{{asset('img/team-linked-in.svg')}}" alt="LinkedIn" class="member__socials--icon">
                        </a>
                        <a href="#" class="member__socials--link">
                          <img src="{{asset('img/team-email.svg')}}" alt="email" class="member__socials--icon">
                        </a>
                        <a href="#" class="member__socials--link">
                          <img src="{{asset('img/team-twitter.svg')}}" alt="twitter" class="member__socials--icon">
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
            </div>

            <div class="row">
              <div class="col-12 col-md-6">
                <div class="team-member__content">
                  <div class="team-member__card">
                    <img src="{{asset('img/b-kenneth.svg')}}" alt="Bill Kenneth, CEO" class="member__photo">
                    <h3 class="member__name">Bill Kenneths</h3>
                    <p class="member__job">Chairman, MD/CEO</p>
                    <div class="member__socials">
                      <a href="#" class="member__socials--link">
                        <img src="{{asset('img/team-linked-in.svg')}}" alt="LinkedIn" class="member__socials--icon">
                      </a>
                      <a href="#" class="member__socials--link">
                        <img src="{{asset('img/team-email.svg')}}" alt="email" class="member__socials--icon">
                      </a>
                      <a href="#" class="member__socials--link">
                        <img src="{{asset('img/team-twitter.svg')}}" alt="twitter" class="member__socials--icon">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="team-member__content">
                  <div class="team-member__card">
                    <img src="{{asset('img/b-kenneth.svg')}}" alt="Bill Kenneth, CEO" class="member__photo">
                    <h3 class="member__name">Bill Kenneths</h3>
                    <p class="member__job">Chairman, MD/CEO</p>
                    <div class="member__socials">
                      <a href="#" class="member__socials--link">
                        <img src="{{asset('img/team-linked-in.svg')}}" alt="LinkedIn" class="member__socials--icon">
                      </a>
                      <a href="#" class="member__socials--link">
                        <img src="{{asset('img/team-email.svg')}}" alt="email" class="member__socials--icon">
                      </a>
                      <a href="#" class="member__socials--link">
                        <img src="{{asset('img/team-twitter.svg')}}" alt="twitter" class="member__socials--icon">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
                <div class="col-12">
                  <div class="team-member__content">
                    <div class="team-member__card">
                      <img src="{{asset('img/b-kenneth.svg')}}" alt="Bill Kenneth, CEO" class="member__photo">
                      <h3 class="member__name">Bill Kenneths</h3>
                      <p class="member__job">Chairman, MD/CEO</p>
                      <div class="member__socials">
                        <a href="#" class="member__socials--link">
                          <img src="{{asset('img/team-linked-in.svg')}}" alt="LinkedIn" class="member__socials--icon">
                        </a>
                        <a href="#" class="member__socials--link">
                          <img src="{{asset('img/team-email.svg')}}" alt="email" class="member__socials--icon">
                        </a>
                        <a href="#" class="member__socials--link">
                          <img src="{{asset('img/team-twitter.svg')}}" alt="twitter" class="member__socials--icon">
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

          </div>
        </div>
      </div> --}}

      <div class="team-member-section">
        <div class="flex-row">
          <div class="flex-col">
            <div class="team-member-content">
              <div class="team-member__heading-wrap">
                <h2 class="team-member__heading">Board</h2>
              </div>
            </div>

            <div class="team-member__content">
              <div class="team-member__card">
                <img src="{{asset('img/b-kenneth.svg')}}" alt="Bill Kenneth, CEO" class="member__photo">
                <h3 class="member__name">Bill Kenneths</h3>
                <p class="member__job">Chairman, MD/CEO</p>
                <div class="member__socials">
                  <a href="#" class="member__socials--link">
                    <img src="{{asset('img/team-linked-in.svg')}}" alt="LinkedIn" class="member__socials--icon">
                  </a>
                  <a href="#" class="member__socials--link">
                    <img src="{{asset('img/team-email.svg')}}" alt="email" class="member__socials--icon">
                  </a>
                  <a href="#" class="member__socials--link">
                    <img src="{{asset('img/team-twitter.svg')}}" alt="twitter" class="member__socials--icon">
                  </a>
                </div>
              </div>

              <div class="team-member__card">
                <img src="{{asset('img/tm.svg')}}" alt="Secretary, Director" class="member__photo">
                <h3 class="member__name">Akpa Chike</h3>
                <p class="member__job">Secretary, Director</p>
                <div class="member__socials">
                  <a href="#" class="member__socials--link">
                    <img src="{{asset('img/team-linked-in.svg')}}" alt="LinkedIn" class="member__socials--icon">
                  </a>
                  <a href="#" class="member__socials--link">
                    <img src="{{asset('img/team-email.svg')}}" alt="email" class="member__socials--icon">
                  </a>
                  <a href="#" class="member__socials--link">
                    <img src="{{asset('img/team-twitter.svg')}}" alt="twitter" class="member__socials--icon">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="flex-row">
          <div class="flex-col">
            <div class="team-member-content">
              <div class="team-member__heading-wrap">
                <h2 class="team-member__heading">Management And Staff</h2>
              </div>
            </div>
              <div class="team-member__content">
                <div class="team-member__card">
                  <img src="{{asset('img/tm-ux-ui.svg')}}" alt="User Experience Designer" class="member__photo">
                  <h3 class="member__name">Emmanuel Jacobson</h3>
                  <p class="member__job"> User Experience Design</p>
                  <div class="member__socials">
                    <a href="#" class="member__socials--link">
                      <img src="{{asset('img/team-linked-in.svg')}}" alt="LinkedIn" class="member__socials--icon">
                    </a>
                    <a href="#" class="member__socials--link">
                      <img src="{{asset('img/team-email.svg')}}" alt="email" class="member__socials--icon">
                    </a>
                    <a href="#" class="member__socials--link">
                      <img src="{{asset('img/team-twitter.svg')}}" alt="twitter" class="member__socials--icon">
                    </a>
                  </div>
                </div>

                <div class="team-member__card">
                  <img src="{{asset('img/tm-frontend-dev.svg')}}" alt="Frontend Developer" class="member__photo">
                  <h3 class="member__name">Daboye Romeo</h3>
                  <p class="member__job">Frontend Developer</p>
                  <div class="member__socials">
                    <a href="#" class="member__socials--link">
                      <img src="{{asset('img/team-linked-in.svg')}}" alt="LinkedIn" class="member__socials--icon">
                    </a>
                    <a href="#" class="member__socials--link">
                      <img src="{{asset('img/team-email.svg')}}" alt="email" class="member__socials--icon">
                    </a>
                    <a href="#" class="member__socials--link">
                      <img src="{{asset('img/team-twitter.svg')}}" alt="twitter" class="member__socials--icon">
                    </a>
                  </div>
                </div>

                <div class="team-member__card">
                  <img src="{{asset('img/tm-lsd.svg')}}" alt="Lead Software Developer" class="member__photo">
                  <h3 class="member__name">Elisha Ukpong</h3>
                  <p class="member__job">Lead Software Developer</p>
                  <div class="member__socials">
                    <a href="#" class="member__socials--link">
                      <img src="{{asset('img/team-linked-in.svg')}}" alt="LinkedIn" class="member__socials--icon">
                    </a>
                    <a href="#" class="member__socials--link">
                      <img src="{{asset('img/team-email.svg')}}" alt="email" class="member__socials--icon">
                    </a>
                    <a href="#" class="member__socials--link">
                      <img src="{{asset('img/team-twitter.svg')}}" alt="twitter" class="member__socials--icon">
                    </a>
                  </div>
                </div>
              </div>
          </div>
        </div>
        
        <div class="flex-row">
            <div class="flex-col">
                <div class="team-member__content">
                  <div class="team-member__card">
                    <img src="{{asset('img/tm-cro-1.svg')}}" alt="Client Relationship Officer" class="member__photo">
                    <h3 class="member__name">Catherine Umerah</h3>
                    <p class="member__job"> Client Relationship Officer </p>
                    <div class="member__socials">
                      <a href="#" class="member__socials--link">
                        <img src="{{asset('img/team-linked-in.svg')}}" alt="LinkedIn" class="member__socials--icon">
                      </a>
                      <a href="#" class="member__socials--link">
                        <img src="{{asset('img/team-email.svg')}}" alt="email" class="member__socials--icon">
                      </a>
                      <a href="#" class="member__socials--link">
                        <img src="{{asset('img/team-twitter.svg')}}" alt="twitter" class="member__socials--icon">
                      </a>
                    </div>
                  </div>
        
                  <div class="team-member__card">
                    <img src="{{asset('img/tm-marketing-exec.svg')}}" alt="Marketing Executive" class="member__photo">
                    <h3 class="member__name">Peterson Okereke</h3>
                    <p class="member__job">Marketing Executive</p>
                    <div class="member__socials">
                      <a href="#" class="member__socials--link">
                        <img src="{{asset('img/team-linked-in.svg')}}" alt="LinkedIn" class="member__socials--icon">
                      </a>
                      <a href="#" class="member__socials--link">
                        <img src="{{asset('img/team-email.svg')}}" alt="email" class="member__socials--icon">
                      </a>
                      <a href="#" class="member__socials--link">
                        <img src="{{asset('img/team-twitter.svg')}}" alt="twitter" class="member__socials--icon">
                      </a>
                    </div>
                  </div>
        
                  <div class="team-member__card">
                    <img src="{{asset('img/tm-farm-admin.svg')}}" alt="Farm Admin" class="member__photo">
                    <h3 class="member__name"> Precious Madu</h3>
                    <p class="member__job">Farm Admin</p>
                    <div class="member__socials">
                      <a href="#" class="member__socials--link">
                        <img src="{{asset('img/team-linked-in.svg')}}" alt="LinkedIn" class="member__socials--icon">
                      </a>
                      <a href="#" class="member__socials--link">
                        <img src="{{asset('img/team-email.svg')}}" alt="email" class="member__socials--icon">
                      </a>
                      <a href="#" class="member__socials--link">
                        <img src="{{asset('img/team-twitter.svg')}}" alt="twitter" class="member__socials--icon">
                      </a>
                    </div>
                  </div>
                </div>
            </div>
        </div>

        <div class="flex-row">
            <div class="flex-col">
                <div class="team-member__content">
                  <div class="team-member__card">
                    <img src="{{asset('img/tm-cro-2.svg')}}" alt="Client Relationship Officer " class="member__photo">
                    <h3 class="member__name">Emmanuella Anthony</h3>
                    <p class="member__job">Client Relationship Officer </p>
                    <div class="member__socials">
                      <a href="#" class="member__socials--link">
                        <img src="{{asset('img/team-linked-in.svg')}}" alt="LinkedIn" class="member__socials--icon">
                      </a>
                      <a href="#" class="member__socials--link">
                        <img src="{{asset('img/team-email.svg')}}" alt="email" class="member__socials--icon">
                      </a>
                      <a href="#" class="member__socials--link">
                        <img src="{{asset('img/team-twitter.svg')}}" alt="twitter" class="member__socials--icon">
                      </a>
                    </div>
                  </div>
        
                  <div class="team-member__card">
                    <img src="{{asset('img/tm-a-sales-manager.svg')}}" alt="Assistant Sales Manager" class="member__photo">
                    <h3 class="member__name">Omonefe Enato</h3>
                    <p class="member__job">Assistant Sales Manager</p>
                    <div class="member__socials">
                      <a href="#" class="member__socials--link">
                        <img src="{{asset('img/team-linked-in.svg')}}" alt="LinkedIn" class="member__socials--icon">
                      </a>
                      <a href="#" class="member__socials--link">
                        <img src="{{asset('img/team-email.svg')}}" alt="email" class="member__socials--icon">
                      </a>
                      <a href="#" class="member__socials--link">
                        <img src="{{asset('img/team-twitter.svg')}}" alt="twitter" class="member__socials--icon">
                      </a>
                    </div>
                  </div>
        
                  <div class="team-member__card">
                    <img src="{{asset('img/tm-sales-manager.svg')}}" alt="Assistant Sales Manager" class="member__photo">
                    <h3 class="member__name">Gerald Akpa</h3>
                    <p class="member__job">Assistant Sales Manager</p>
                    <div class="member__socials">
                      <a href="#" class="member__socials--link">
                        <img src="{{asset('img/team-linked-in.svg')}}" alt="LinkedIn" class="member__socials--icon">
                      </a>
                      <a href="#" class="member__socials--link">
                        <img src="{{asset('img/team-email.svg')}}" alt="email" class="member__socials--icon">
                      </a>
                      <a href="#" class="member__socials--link">
                        <img src="{{asset('img/team-twitter.svg')}}" alt="twitter" class="member__socials--icon">
                      </a>
                    </div>
                  </div>
                </div>
            </div>
        </div>

        <div class="flex-row">
            <div class="flex-col">
                <div class="team-member__content">
                  <div class="team-member__card">
                    <img src="{{asset('img/tm-cro-3.svg')}}" alt="Client Relationship Officer " class="member__photo">
                    <h3 class="member__name">Opuere Amakoroma</h3>
                    <p class="member__job">Client Relationship Officer </p>
                    <div class="member__socials">
                      <a href="#" class="member__socials--link">
                        <img src="{{asset('img/team-linked-in.svg')}}" alt="LinkedIn" class="member__socials--icon">
                      </a>
                      <a href="#" class="member__socials--link">
                        <img src="{{asset('img/team-email.svg')}}" alt="email" class="member__socials--icon">
                      </a>
                      <a href="#" class="member__socials--link">
                        <img src="{{asset('img/team-twitter.svg')}}" alt="twitter" class="member__socials--icon">
                      </a>
                    </div>
                  </div>
        
                  <div class="team-member__card">
                    <img src="{{asset('img/tm-accounts-exec.svg')}}" alt="Accounts Executive" class="member__photo">
                    <h3 class="member__name">Ogungboye Abidemi</h3>
                    <p class="member__job"> Accounts Executive </p>
                    <div class="member__socials">
                      <a href="#" class="member__socials--link">
                        <img src="{{asset('img/team-linked-in.svg')}}" alt="LinkedIn" class="member__socials--icon">
                      </a>
                      <a href="#" class="member__socials--link">
                        <img src="{{asset('img/team-email.svg')}}" alt="email" class="member__socials--icon">
                      </a>
                      <a href="#" class="member__socials--link">
                        <img src="{{asset('img/team-twitter.svg')}}" alt="twitter" class="member__socials--icon">
                      </a>
                    </div>
                  </div>
        
                  <div class="team-member__card">
                    <img src="{{asset('img/tm-cro-4.svg')}}" alt="Clients Relationship Officer" class="member__photo">
                    <h3 class="member__name">Oluwatobiloba Fabanwo </h3>
                    <p class="member__job">Clients Relationship Officer</p>
                    <div class="member__socials">
                      <a href="#" class="member__socials--link">
                        <img src="{{asset('img/team-linked-in.svg')}}" alt="LinkedIn" class="member__socials--icon">
                      </a>
                      <a href="#" class="member__socials--link">
                        <img src="{{asset('img/team-email.svg')}}" alt="email" class="member__socials--icon">
                      </a>
                      <a href="#" class="member__socials--link">
                        <img src="{{asset('img/team-twitter.svg')}}" alt="twitter" class="member__socials--icon">
                      </a>
                    </div>
                  </div>
                </div>
            </div>
        </div>

        <div class="flex-row">
            <div class="flex-col">
                <div class="team-member__content">
                  <div class="team-member__card">
                    <img src="{{asset('img/tm-farm-manager.svg')}}" alt="Farm Manager" class="member__photo">
                    <h3 class="member__name">Udochukwu Ginikanwa</h3>
                    <p class="member__job">Farm Manager</p>
                    <div class="member__socials">
                      <a href="#" class="member__socials--link">
                        <img src="{{asset('img/team-linked-in.svg')}}" alt="LinkedIn" class="member__socials--icon">
                      </a>
                      <a href="#" class="member__socials--link">
                        <img src="{{asset('img/team-email.svg')}}" alt="email" class="member__socials--icon">
                      </a>
                      <a href="#" class="member__socials--link">
                        <img src="{{asset('img/team-twitter.svg')}}" alt="twitter" class="member__socials--icon">
                      </a>
                    </div>
                  </div>
        
                  <div class="team-member__card">
                    <img src="{{asset('img/tm-logistics.svg')}}" alt="Logistics" class="member__photo">
                    <h3 class="member__name">Goodluck Obinwanne</h3>
                    <p class="member__job">Logistics</p>
                    <div class="member__socials">
                      <a href="#" class="member__socials--link">
                        <img src="{{asset('img/team-linked-in.svg')}}" alt="LinkedIn" class="member__socials--icon">
                      </a>
                      <a href="#" class="member__socials--link">
                        <img src="{{asset('img/team-email.svg')}}" alt="email" class="member__socials--icon">
                      </a>
                      <a href="#" class="member__socials--link">
                        <img src="{{asset('img/team-twitter.svg')}}" alt="twitter" class="member__socials--icon">
                      </a>
                    </div>
                  </div>
        
                  <div class="team-member__card">
                    <img src="{{asset('img/tm-brooding-specialist.svg')}}" alt="Brooding Specialist" class="member__photo">
                    <h3 class="member__name">Justin Njoku</h3>
                    <p class="member__job">Brooding Specialist</p>
                    <div class="member__socials">
                      <a href="#" class="member__socials--link">
                        <img src="{{asset('img/team-linked-in.svg')}}" alt="LinkedIn" class="member__socials--icon">
                      </a>
                      <a href="#" class="member__socials--link">
                        <img src="{{asset('img/team-email.svg')}}" alt="email" class="member__socials--icon">
                      </a>
                      <a href="#" class="member__socials--link">
                        <img src="{{asset('img/team-twitter.svg')}}" alt="twitter" class="member__socials--icon">
                      </a>
                    </div>
                  </div>
                </div>
            </div>
        </div>

        <div class="flex-row">
            <div class="flex-col">
              <div class="team-member__content">
                <div class="team-member__card">
                  <img src="{{asset('img/tm-logistics-2.svg')}}" alt="Logistics" class="member__photo">
                  <h3 class="member__name">Adewale Oluwaseyi </h3>
                  <p class="member__job">Logistics</p>
                  <div class="member__socials">
                    <a href="#" class="member__socials--link">
                      <img src="{{asset('img/team-linked-in.svg')}}" alt="LinkedIn" class="member__socials--icon">
                    </a>
                    <a href="#" class="member__socials--link">
                      <img src="{{asset('img/team-email.svg')}}" alt="email" class="member__socials--icon">
                    </a>
                    <a href="#" class="member__socials--link">
                      <img src="{{asset('img/team-twitter.svg')}}" alt="twitter" class="member__socials--icon">
                    </a>
                  </div>
                </div>
        
                <div class="team-member__card">
                  <img src="{{asset('img/tm-a-dir-livestock.svg')}}" alt="Assist. Director, Livestock" class="member__photo">
                  <h3 class="member__name">Wisdom Ndubuisi</h3>
                  <p class="member__job">Assist. Director, Livestock</p>
                  <div class="member__socials">
                    <a href="#" class="member__socials--link">
                      <img src="{{asset('img/team-linked-in.svg')}}" alt="LinkedIn" class="member__socials--icon">
                    </a>
                    <a href="#" class="member__socials--link">
                      <img src="{{asset('img/team-email.svg')}}" alt="email" class="member__socials--icon">
                    </a>
                    <a href="#" class="member__socials--link">
                      <img src="{{asset('img/team-twitter.svg')}}" alt="twitter" class="member__socials--icon">
                    </a>
                  </div>
                </div>
              </div>
            </div>
        </div>

        <div class="flex-row">
          <div class="flex-col">
            <div class="team-member__content">
              <div class="team-member__card">
                <img src="{{asset('img/tm-advisor.svg')}}" alt="Advisor" class="member__photo">
                <h3 class="member__name">Ademula Olobunmi</h3>
                <p class="member__job">Advisor</p>
                <div class="member__socials">
                  <a href="#" class="member__socials--link">
                    <img src="{{asset('img/team-linked-in.svg')}}" alt="LinkedIn" class="member__socials--icon">
                  </a>
                  <a href="#" class="member__socials--link">
                    <img src="{{asset('img/team-email.svg')}}" alt="email" class="member__socials--icon">
                  </a>
                  <a href="#" class="member__socials--link">
                    <img src="{{asset('img/team-twitter.svg')}}" alt="twitter" class="member__socials--icon">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </main>
@endsection