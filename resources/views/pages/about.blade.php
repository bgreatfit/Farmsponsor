@extends('layouts.basic')

@section('content')
<main class="main main-about">
    <section class="section-about container">
        <div class="aboutWrap">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="content__about">
                        <div class="content__about--textWrap">
                            <h1 class="content__about--heading heading__primary">Who We Are</h1>
                            <p class="content__about--text">We're an Agri-Tech platform that allows 
                                individuals the opportunity to sponsor local farmers with their money 
                                and get up to 15% returns on their capital after harvest, which spans 12 weeks. <br/>
                                At a time like this in Nigeria where food is the most neccessary need, you can 
                                be a part of ensuring adequate supply of food in the country while making profits from it.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-12">
                    <div class="content__about">
                        <img src="{{asset('img/who we are.svg')}}" alt=" Business deal illustration" class="content__about--image">
                    </div>
                </div>
            </div>

            <div class="row ">
                    <div class="col-md-12 col-12">
                        <div class="introWrap">
                            <p class="intro-text">
                                This is Globetrot Farmsponsor Nig. Ltd, the farm financing company for everyone.
                            </p>
                            <p class="intro-text">
                                The idea behind the company was conceived in December 2017 by the Co-Founder/CEO, 
                                Akpa Innocent Bill. All resources were channeled towards engaging the rest of the 
                                team in seamless research and study of the industry in order to achieve all company 
                                set goals. We launched the first beta version, Farmsponsor 1.0 in February, 2018. 
                                Farmsponsor launched officially to the public in May, 2018.
                            </p>
                            <p class="intro-text">
                                Farmsponsor is using technology to ensure food is available for everyone in Nigeria by getting everyone to participate in agriculture.
                            </p>
                            <p class="intro-text">
                                At Farmsponsor, every employee is outgoing, dynamic and engaging. This is why we are all marketing and sales representatives 
                                who wear organizational objectives on our sleeves and stitch company image and presence on 
                                our minds to achieve results. Therefore if you are thrilled by success and you have passion 
                                to ensure food security in Africa, as well as posses the energy, wit and vibe required for 
                                the big task; Farmsponsor is the place to be.
                            </p>
                        </div>
                    </div>
                </div>


            </div>
        <div class="our-valuesWrap">
            <h1 class="heading__primary values__heading">Our Values</h1>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="visuals-box item1">
                        <i class="far visuals-icon fa-handshake visuals-commit"></i>
                        <h4 class="visuals-heading">Commitment</h4>
                        <p class="visuals-text">We do what we say we will do</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="visuals-box item2">
                        <i class="fas visuals-icon fa-binoculars visuals-focus"></i>
                        <h4 class="visuals-heading">Focus</h4>
                        <p class="visuals-text">We have our vision and mission in mind always</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="visuals-box item3">
                        <i class="far visuals-icon fa-calendar-check visuals-time"></i>
                        <h4 class="visuals-heading">Time</h4>
                        <p class="visuals-text">We always keep to Farm Sponsor time.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="visuals-box item4">
                        <i class="fas visuals-icon fa-lightbulb visuals-creative"></i>
                        <h4 class="visuals-heading">Creative</h4>
                        <p class="visuals-text">We're creative. We think outside the box.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="visuals-box item5">
                        <i class="fas visuals-icon fa-balance-scale visuals-honest"></i>
                        <h4 class="visuals-heading">Honesty</h4>
                        <p class="visuals-text">We are true to our words.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="visuals-box item6">
                        <i class="fas visuals-icon fa-users visuals-team"></i>
                        <h4 class="visuals-heading">Team players</h4>
                        <p class="visuals-text">We work together to ensure constant success.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="section-intro container">
        <div class="row ">
            <div class="col-md-12 col-12">
                <div class="introWrap">
                    <p class="intro-text">
                        This is Globetrot Farmsponsor Nig. Ltd, the farm financing company for everyone.
                    </p>
                    <p class="intro-text">
                        The idea behind the company was conceived in December 2017 by the Co-Founder/CEO, 
                        Akpa Innocent Bill. All resources were channeled towards engaging the rest of the 
                        team in seamless research and study of the industry in order to achieve all company 
                        set goals. We launched the first beta version, Farmsponsor 1.0 in February, 2018. 
                        Farmsponsor launched officially to the public in May, 2018.
                    </p>
                    <p class="intro-text">
                        Farmsponsor is using technology to ensure food is available for everyone in Nigeria by getting everyone to participate in agriculture.
                    </p>
                    <p class="intro-text">
                        At Farmsponsor, every employee is outgoing, dynamic and engaging. This is why we are all marketing and sales representatives 
                        who wear organizational objectives on our sleeves and stitch company image and presence on 
                        our minds to achieve results. Therefore if you are thrilled by success and you have passion 
                        to ensure food security in Africa, as well as posses the energy, wit and vibe required for 
                        the big task; Farmsponsor is the place to be.
                    </p>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="section-vision container">
        <h1 class="heading__primary section-vision__heading">Our Vision And Mission</h1>
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="vision-content">
                    <img src="{{asset('img/vision.png')}}" alt="vision illustration" class="vision-content--image">
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="vision-content ">
                    <p class="vision-content--text">
                        Our vision is to ensure food is available for everyone by getting everyone involved in agriculture.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="mission-content">
                    <p class="mission-content--text">
                        Our mission is to use technology to drive the participation of everyone in agriculture.
                    </p>
                </div>
            </div>
            <div class="col-md-5 col-12">
                <div class="mission-content">
                    <img src="{{asset('img/mission.png')}}" alt="mission illustration" class="mission-content--image">
                </div>
            </div>
        </div>
    </section>

    <section class="section-remark container-fluid">
        <div class="row">
            <div class="col">
                <div class="fs-remark__content">
                    <i class="fas fa-quote-right fs-remark__icon"></i>
                    <p class="fs-remark__text">With Farm Sponsor, consumers, 
                        farmsers, sponsors get superior value all year round.
                    </p>
                    <div class="fs-remark__image-box">
                        <img src="img/fs-ceo.jpg" alt="picture of CEO " class="fs-remark__image-box--picture">
                        <div class="fs-remark__text-box">
                            <p class="fs-remark__text-box--text fs-remark__text-box--text-staff">Bill Kenneth</p>
                            <p class="fs-remark__text-box--text fs-remark__text-box--text-job">Managing Director/CEO</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-partners">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="partners__content">
                        <h3 class="partners__content--heading">Our Partners</h3>
                        <p class="partners__content--text">Driving agri-tech to provide food for all Africans</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="partners__content partners__content--image-box"><img src="{{asset('img/the-promise.png')}}" alt="The promise" class="partners__content--image"></div>
                </div>
                <div class="col">
                    <div class="partners__content partners__content--image-box"><img src="img/fs-pic4.png" alt="Kalase farm" class="partners__content--image"></div>
                </div>
                <div class="col">
                    <div class="partners__content partners__content--image-box"><img src="img/fs-pic5.png" alt="Leadway insurance" class="partners__content--image leadway"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-testimonials">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="testimonials__content">
                        <h3 class="testimonials__content--heading-main">What people are saying about us</h3>
                        <p class="testimonials__content--text-main">
                            We are the best, but you don’t have to take our word for it. Listen to what 
                            others that have trusted us are saying about us
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="testimonials__content">
                        <h3 class="testimonials__content--heading">Perfect Service</h3>
                        <p class="testimonials__content--text">Thanks so much Farmsponsor. It was great doing business with you. The D.O.Cs arrived as scheduled, the feeds had arrived even ahead of the arrival of the birds and every input was available as needed, the brooding was superb, the sales (more by Farmsponsor) was just perfect and the pay out great.</p>
                        <div class="testimonials__content--image-box">
                            <img src="img/fs-pic6.jpeg" alt="ini obidike - farmer" class="testimonials__content--image">
                            <div class="testimonials__content--text-box">
                                <p class="testimonials__content--text testimonials__content--text-client">Ini Obidike</p>
                                <p class="testimonials__content--text ">farmer</p> 
                            </div>    
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="testimonials__content">
                        <h3 class="testimonials__content--heading">Highly Professional</h3>
                        <p class="testimonials__content--text">I want to express my sincere appreciation for your professionalism through the investment period and prompt payment! I asked around from a few followers on your IG account and they assured me that I would come and thank them later. No regrets. We need to do this again! More grace to you all to excel in Jesus name. Perfect and the pay out great.</p>
                        <div class="testimonials__content--image-box"><img src="img/fs-pic7.jpeg" alt="Bob Ononuju - sponsor" class="testimonials__content--image">
                            <div class="testimonials__content--text-box">
                                <p class="testimonials__content--text testimonials__content--text-client">Bob Ononuju</p>
                                <p class="testimonials__content--text">sponsor</p> 
                            </div>    
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="testimonials__content">
                        <h3 class="testimonials__content--heading">I Got My Investment Back</h3>
                        <p class="testimonials__content--text">Never knew I was the only sponsor sef. Well, I absolutely have no regrets about that and I'm glad I invested in that cycle because I just got back my capital plus the extra percentage that comes with it. Thank you Farmsponsor for staying true to you words. I can't wait to invest with you again. You're the best.</p>
                        <div class="testimonials__content--image-box">
                            <img src="img/fs-pic8.jpeg" alt="Okechi Okoroji - sponsor" class="testimonials__content--image">
                            <div class="testimonials__content--text-box">
                                <p class="testimonials__content--text testimonials__content--text-client">Okechi Okoroji</p> 
                                <p class="testimonials__content--text">sponsor</p>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="testimonials__content">
                        <h3 class="testimonials__content--heading">Tested and Trusted</h3>
                        <p class="testimonials__content--text">I got my alert. My bank was messing up but you guys even called me to get another account number. Thank you so much! Next cycle, I'll definitely invest. You are tested and trusted</p>
                        <div class="testimonials__content--image-box">
                            <img src="img/fs-pic9.jpeg" alt="ini obidike - farmer" class="testimonials__content--image">
                            <div class="testimonials__content--text-box">
                                <p class="testimonials__content--text testimonials__content--text-client">Olaitan R</p>
                                <p class="testimonials__content--text">Sponsor</p> 
                            </div>    
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="testimonials__content">
                        <h3 class="testimonials__content--heading">I Got My Alert</h3>
                        <p class="testimonials__content--text">I just got my alert. You guys are the bomb. I got my alert! Great guys, I look forward for my farming windows. Let's do this again guys!</p>
                        <div class="testimonials__content--image-box"><img src="img/fs-pic10.jpeg" alt="Bob Ononuju - sponsor" class="testimonials__content--image">
                            <div class="testimonials__content--text-box">
                                <p class="testimonials__content--text testimonials__content--text-client">Robert Martins</p>
                                <p class="testimonials__content--text">sponsor</p> 
                            </div>    
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="testimonials__content">
                        <h3 class="testimonials__content--heading">I Got Mine</h3>
                        <p class="testimonials__content--text">Payout Day! I have received mine. Thank you so much Farmsponsor. You kept your word. Next farming window please! #FoodSecurityForAll.</p>
                        <div class="testimonials__content--image-box">
                            <img src="img/fs-pic11.jpeg" alt="Okechi Okoroji - sponsor" class="testimonials__content--image">
                            <div class="testimonials__content--text-box">
                                <p class="testimonials__content--text testimonials__content--text-client">Bala Gana</p> 
                                <p class="testimonials__content--text">sponsor</p>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection