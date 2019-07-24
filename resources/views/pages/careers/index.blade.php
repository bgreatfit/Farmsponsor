@extends('layouts.basic')
@section('content')
<div class="career-wrap">
    <header class="career-jumbotron">
        <div class="career-search-container">
            <form action="" class="career-search__form">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="form-group form__group">
                            <input type="text" placeholder="Search" class="form-control careers-search__input">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="row">
                            <div class="col-10 col-md-4">
                                <div class="form-group form__group">
                                    <input type="text"  placeholder="Location" class="form-control careers-search__input">
                                </div>
                            </div>
                            <div class="col-2 col-md-8">
                                <div class="form-group form__group">
                                    <button type="submit" class="career-search__btn btn btn-success">Go</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </header>
    <main class="career-main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <div class="career-heading-container">
                        <h1 class="career-main-heading">Current Job Openings</h1>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="career-position">
                        <h2 class="career-heading">Design</h2>
                        <div class="career-position__content">
                            <a href="{{route('career.show')}}" class="career-position__link">
                                <p class="career-position__title">Frontend Engineer <span class="career-position__btn"><img src="{{asset('img/career-pos-btn.svg')}}" alt="greater than icon" class="career-position__icon"></span></p> 
                            </a>
                            <p class="career-position__location">Port harcourt , <span class="career-position__type">Full time</span></p>
                        </div>
                    </div>
                    <div class="career-position">
                        <h2 class="career-heading">Engineering</h2>
                        <div class="career-position__content">
                            <a href="{{route('career.show')}}" class="career-position__link">
                                <p class="career-position__title">Frontend Engineer <span class="career-position__btn"><img src="{{asset('img/career-pos-btn.svg')}}" alt="greater than icon" class="career-position__icon"></span></p> 
                            </a>
                            <p class="career-position__location">Port harcourt , <span class="career-position__type">Full time</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
</div>
   
@endsection