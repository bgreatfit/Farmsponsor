@extends('layouts.dashboard')

@section('content')
    <div class="payout-wrap">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="payout-content">

                        <div class="payout__ruler">
                            <hr>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-12 text-center">
                                <div class="payout__image-box">
                                    <img src="" alt="photo of farm cycle" class="payout__image">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="row">
                                    <div class="col">
                                        <h1 class="payout__heading">
                                            Payout Information
                                        </h1>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-12">
                                        <div class="payout__information">
                                            <h2 class="payout__farm-cycle">20th Farm cycle</h2>
                                            <p class="payout__sponsored">
                                                Amount sponsored: <span class="payout__sponsored--span">1000000</span>
                                            </p>
                                            <p class="payout__date">
                                                Payout date: <span class="payout__date--span">29th August 2019</span>
                                            </p>
                                            <p class="payout__interest">Payout interest: <span class="payout__date--span">15%</span></p>
                                            <form action="" class="payout__form">
                                                @csrf
                                                <div class="form-group">
                                                    <input type="number" name="payoutAmount" id="payout__amount" class="payout__amount form-control" disabled>
                                                <label for="payout__amount" class="payout__amount--label">Specify withdrawal amount</label>
                                                </div>
                                                <div class="form-group d-flex">
                                                    <button type="submit" class="btn btn-lg btn-success" disabled>Submit</button>
                                                    <a href="{{asset('dashboard')}}" class="payout__back-btn btn btn-lg btn-info ml-auto">back</a>
                                                </div>
                                                <div class="form-group">
                                                    <p class="payout__note">
                                                        <strong>Withdrawals will become available from payout date.</strong>  
                                                    </p>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="payout__ruler">
                            <hr>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection