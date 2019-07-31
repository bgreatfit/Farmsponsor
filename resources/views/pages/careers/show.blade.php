@extends('layouts.basic')
@section('content')
<div class="career-details-wrap">
    <header class="career-details-jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12">
                    <a href="{{route('careers')}}" class="career-details__back-link">
                        <img src="{{asset('img/left-arrow.svg')}}" class="left-arrow"> Engineering
                    </a>
                    <h1 class="career-details__heading--main">
                        Frontend Engineer-React.JS 
                    </h1>
                    <p class="career-details__heading--text">
                        Port Harcourt | Full time
                    </p>
                </div>
            </div>
        </div>
    </header>
    <main class="career-details-main-content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="career-details__description">
                                <h2 class="career-details__heading">Farmsponsor</h2>
                                <p class="career-details__text">
                                    Farmsponsor is using technology to ensure food is available for everyone 
                                    in Nigeria by getting everyone to participate in agriculture. At Farmsponsor, 
                                    every employee is outgoing, dynamic and engaging. This is why we are all marketing 
                                    and sales representatives who wear organizational objectives on our sleeves and 
                                    stitch company image and presence on our minds to achieve results. 
                                    Therefore if you are thrilled by success and you have passion to ensure food security 
                                    in Africa, as well as posses the energy, wit and vibe required for the big task; 
                                    Farmsponsor is the place to be.
                                </p>
                                <h3 class="career-details__heading--sub">Role:</h3>
                                <p class="career-details__text">
                                    We're seeking a frontend developer who is a self-starter and quick learner with 
                                    a keen interest in Agric-Tech. Our ideal candidate is one who communicates effectively 
                                    and consistently ships high quality, well-tested code.
                                </p>
                                <h3 class="career-details__heading--sub">Requirements:</h3>
                                <p class="career-details__text">
                                    Expert knowledge of Javascript on client and server          
                                </p>
                                <p class="career-details__text">
                                    Working experience with React, Redux Data APIs, Websockets, GraphQL
                                </p>
                                <p class="career-details__text">
                                    Proficient in HTML & CSS to deliver scalable functionality and design
                                </p>
                                <p class="career-details__text">
                                    Experienced with Node.js ecosystem, webpack knowledge, grunt/gulp tasks
                                </p>
                                <p class="career-details__text">
                                    Current with the state of the JavaScript eco-system (ES6, Babel, NPM, Webpack, Rollup, etc.)
                                </p>
                                <p class="career-details__text">
                                    Understand the core principles of immutable state handling
                                </p>
                                <p class="career-details__text">
                                    Write modular code, developed as reusable
                                </p>
                                <p class="career-details__text">
                                    Unit testing experience for Javascript React/Redux
                                </p>
                                <p class="career-details__text">Experienced with git code management</p>
                                <p class="career-details__text">CLI knowledge</p>
                                <p class="career-details__text">
                                    Minimal working knowledge of design software such as Photoshop, AI, Sketch
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="career-details__application">
                                <form action="" class="career-details__application--form" id="careers-application__form">
                                    <div class="career-details__form-heading-wrap">
                                        <div class="form-heading__content">
                                            <h2 class="career-details__form-heading">Apply for this job</h2>
                                            <span class="career-details__form-heading-block"></span>
                                            <span class="career-details__form-heading-block-description">(Optional)</span>
                                        </div>
                                        
                                        <p class="career-details__required">
                                            <span class="career-details__asteric">*</span>Required
                                        </p>
                                    </div>
                                    
                                    <div class="horizontal-rule">
                                        <hr>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-row">
                                            <div class="col-12 col-md-3">
                                                <label for="first-name__input" id="first-name__label" class="input__label">
                                                    First name<span class="career-details__asteric">*</span>
                                                </label>
                                            </div>
                                            <div class="col-12 col-md-8">
                                                <div class="input-wrap">
                                                    <input type="text" class="career-details__application-input form-control" id="first-name__input">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-row">
                                            <div class="col-12 col-md-3">
                                                <label for="last-name__input" id="last-name__label" class="input__label">
                                                    Last name<span class="career-details__asteric">*</span>
                                                </label>
                                            </div>
                                            <div class="col-12 col-md-8">
                                                <div class="input-wrap">
                                                    <input type="text" class="career-details__application-input form-control" id="last-name__input">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                            <div class="form-row">
                                                <div class="col-12 col-md-3">
                                                    <label for="email__input" id="email__label" class="input__label">
                                                        Email<span class="career-details__asteric">*</span>
                                                    </label>
                                                </div>
                                                <div class="col-12 col-md-8">
                                                    <div class="input-wrap">
                                                        <input type="email" class="career-details__application-input form-control" id="email__input">
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-row">
                                            <div class="col-12 col-md-3">
                                                <label for="phone__input" class="phone__label input__label">
                                                    Phone
                                                </label>
                                            </div>
                                            <div class="col-12 col-md-8">
                                                <div class="input-wrap">
                                                    <input type="number" class="career-details__application-input form-control" id="phone__input">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-row">
                                            <div class="col-12 col-md-3">
                                                <label for="resume__input" id="resume__label" class="input__label">
                                                    Resume/CV<span class="career-details__asteric">*</span>
                                                </label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <div class="input-wrap">
                                                    <input type="file" class="career-details__file-input" id="resume__input">
                                                    <button type="button" class="custom-file__btn" id="resume-input__btn">Attach</button>
                                                    <span class="custom-file-info" id="resume-file-info"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-row">
                                            <div class="col-12 col-md-3">
                                                <label for="cover-letter__input" class="cover-letter__label input__label">
                                                    Cover Letter
                                                </label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <div class="input-wrap">
                                                    <input type="file" class="career-details__file-input" id="cover-letter__input">
                                                    <button type="button" class="custom-file__btn" id="cover-letter-input__btn">Attach</button>
                                                    <span class="custom-file-info" id="cover-letter-file-info"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="horizontal-rule">
                                        <hr>
                                    </div>
                                    <div class="form-group">
                                        <label for="linkedin__input" class="linkedin__label input__label">
                                            LinkedIn profile
                                        </label>
                                        <div class="input-wrap">
                                            <input type="text" class="career-details__application-input form-control" id="linkedin__input">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        {{-- <div class="form-row"> --}}
                                            <label for="website__input" class="website__label input__label">
                                                Website
                                            </label>
                                            <div class="input-wrap">
                                                <input type="text" class="career-details__application-input form-control" id="website__input">
                                            </div>
                                        {{-- </div> --}}
                                    </div>
                                    <div class="form-group">
                                        <label for="job-source__input" class="job-source__label input__label">
                                            How did you hear about this job?
                                        </label>
                                        <div class="input-wrap">
                                            <input type="text" class="career-details__application-input form-control" id="job-source__input">
                                        </div>
                                    </div>
                                    <div class="horizontal-rule">
                                        <hr>
                                    </div>
                                    <div class="form-group">
                                        <div class="btn-container">
                                            <button class="career-details__submit-btn" type="submit">Submit Application</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection