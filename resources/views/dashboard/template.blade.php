@extends('layouts.new_dashboard')
@section('content')
    <div class="dashboard-home-wrap">
        <main class="dashboard-home__details">
            <div class="dashboard-home__content">
                <div class="transaction-card">
                    <div class="transaction-card-wrap">
                        <div class="transaction-card__content">
                            <span>
                                <img src="{{asset('img/dashboard-transactions-made.svg')}}" alt="" class="transaction-card__img">
                            </span>
                            <span class="transaction-card__stat">16</span>
                        </div>
                        <div class="transaction-card__content">
                            <p class="transaction-card__text">Total Transactions Made</p>
                        </div>
                    </div>
                </div>

                <div class="transaction-card">
                    <div class="transaction-card-wrap">
                        <div class="transaction-card__content">
                            <span>
                                <img src="{{asset('img/dashboard-returns.svg')}}" alt="" class="transaction-card__img">
                            </span>
                            <span class="transaction-card__stat">30000</span>
                        </div>
                        <div class="transaction-card__content">
                            <p class="transaction-card__text">Expected returns</p>
                        </div>
                    </div>
                </div>

                <div class="transaction-card">
                    <div class="transaction-card-wrap">
                        <div class="transaction-card__content">
                            <span>
                                <img src="{{asset('img/dashboard-returns.svg')}}" alt="" class="transaction-card__img">
                            </span>
                            <span class="transaction-card__stat">70000</span>
                        </div>
                        <div class="transaction-card__content">
                            <p class="transaction-card__text">Returns collected</p>
                        </div>
                    </div>
                </div>

                <div class="transaction-card">
                    <div class="transaction-card-wrap">
                        <div class="transaction-card__content">
                            <span>
                                <img src="{{asset('img/dashboard-amount.svg')}}" alt="" class="transaction-card__img">
                            </span>
                            <span class="transaction-card__stat">10</span>
                        </div>
                        <div class="transaction-card__content">
                            <p class="transaction-card__text">number of farms sponsored</p>
                        </div>
                    </div>
                </div>

                <div class="transaction-card">
                    <div class="transaction-card-wrap">
                        <div class="transaction-card__content">
                            <span>
                                <img src="{{asset('img/dashboard-amount.svg')}}" alt="" class="transaction-card__img">
                            </span>
                            <span class="transaction-card__stat">57000</span>
                        </div>
                        <div class="transaction-card__content">
                            <p class="transaction-card__text">Amount in vestbank</p>
                        </div>
                    </div>
                </div>

            </div>
        </main>
        <aside class="dashboard-home__utilities">
            <div class="payday-counter">
                @include('includes.dashboard.utilities.payday-counter')
            </div>
            <div class="calendar-wrap">
                @include('includes.dashboard.utilities.calendar')
            </div>
        </aside>
    </div>
@endsection