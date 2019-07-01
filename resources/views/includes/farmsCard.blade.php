{{-- OLD FARM CARD --}}
        {{-- <div class="content-wrap card-box">
            <div class="farms__display card">
                <a href="#" class="card__info"> <img src="{{asset('img/Chick-2.jpg')}}" alt="hen image" class="farms__image card-img"></a>
                <h3 class="heading__tertiary card__heading text-center">19<sup>th</sup>  sponsoring window </h3>
                <div class="farms__text ">
                    <p>Farm cycle: 7th April to 24th April</p>
                    <p>15% Returns</p>
                </div>
                <div class="card__progress-bar"> </div>
                <a href="{{asset('dashboard/farmcycle')}}" class="farms__btn btn-lg">Sponsor Now</a>
                <p class="farms__text farms__text--status">Open</p>
            </div>
        </div> --}}

{{-- NEW FARM CARD (NOT DYNAMIC) --}}
        <div class="farmlist__card">
            <div class="farmlist__status">
                <p class="farmlist__status--text">
                    @if($farm->due_date->lt(now()))
                    Closed
                    @elseif($farm->hasExhaustedUnit())
                    SoldOut
                    @elseif($farm->start_date->lt(now()))
                    Open
                    @else
                        Soon
                    @endif
                </p>
            </div>
            <div class="farmlist__card-body">
                <div class="farmlist__card-body--image-wrap">
                    <img src="{{asset('img/farmcard-pic1.svg')}}" alt="Custom photo for farm cycle" class="farmlist__card-body--image">
                </div>
                <div class="farmlist__card-body--text-wrap">
                    <div class="container-block">
                        <div class="flex-row">
                            <div class="flex-col-2">
                                <p class="farmlist__text">Farm Title:</p>
                                <p class="farmlist__sub-text mb-5">{{$farm->name}}</p>
                            </div>
                            <div class="flex-col-2">
                                <p class="farmlist__text text-right">Returns</p>
                                <p class="farmlist__returns text-right">{{$farm->returns}}%</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <p class="farmlist__text">Start Date:</p>
                                <p class="farmlist__sub-text mb-4">{{$farm->start_date->diffForHumans()}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <p class="farmlist__text">Due Date: </p>
                                <p class="farmlist__sub-text mb-4">{{$farm->due_date->diffForHumans()}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="farmlist__sponsor">

                @if($farm->due_date->lt(now()))
                    <a href="#" class="farmlist__sponsor-btn"> Closed  <img src="{{asset('img/greater-than.svg')}}" alt="greater than sign" class="sponsor-btn--icon ml-3"> </a>

                @elseif($farm->hasExhaustedUnit())
                    <a href="#" class="farmlist__sponsor-btn"> Sold Out  <img src="{{asset('img/greater-than.svg')}}" alt="greater than sign" class="sponsor-btn--icon ml-3"> </a>

                @elseif($farm->start_date->lt(now()))
                    <a href="{{route('farms.show', $farm->slug)}}" class="farmlist__sponsor-btn">Sponsor  <img src="{{asset('img/greater-than.svg')}}" alt="greater than sign" class="sponsor-btn--icon ml-3"> </a>
                @else
                    <a href="#" class="farmlist__sponsor-btn"> Soon <img src="{{asset('img/greater-than.svg')}}" alt="greater than sign" class="sponsor-btn--icon ml-3"> </a>

                @endif

            </div>
        </div>
