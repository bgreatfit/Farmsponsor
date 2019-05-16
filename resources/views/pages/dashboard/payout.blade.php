@extends('layouts.dashboard')

@section('content')
    <div class="payout-wrap my-5 py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="payout-content">
                        <h1 class="payout__heading text-center mb-4">Payouts</h1>
                        
                        <div class="payout__ruler mb-4">
                            <hr>
                        </div>

                        <div class="payout__cycles-sponsored">
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <h2 class="payout__cycles-sponsored--heading mb-4">Farm Cycles Sponsored</h2>
                                    <div class="payout__cycles-sponsored--table-box">
                                        <table class="table">
                                            <thead class="payout__thead thead-dark">
                                                <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Cycle Image</th>
                                                <th scope="col">Farming Cycle</th>
                                                <th scope="col">Number Of Units</th>
                                                <th scope="col">Status</th>
                                                
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>
                                                        <div class="cycle-image-box ml-4">
                                                        <img src="{{asset('img/chick-1.jpg')}}" alt="cycle photo" class="cycle-image">
                                                        </div>
                                                    </td>
                                
                                                    <td>
                                                        <a href="#" data-toggle="modal" data-target="#payout-details" role="button" class="payout__info">20th</a>
                                                    </td>
                                                    <td>400 </td>
                                                    <td>
                                                        <a href="#" data-toggle="modal" data-target="#payout-details" role="button" class="payout__status">
                                                            Pending
                                                        </a> 
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>
                                                        <div class="cycle-image-box ml-4">
                                                        <img src="{{asset('img/chick-1.jpg')}}" alt="cycle photo" class="cycle-image">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" data-toggle="modal" data-target="#payout-details" role="button" class="payout__info">19th</a>
                                                    </td>
                                                    <td>400 </td>
                                                    <td>
                                                        <a href="#" data-toggle="modal" data-target="#payout-details" role="button" class="payout__status">
                                                            Pending
                                                        </a> 
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>
                                                        <div class="cycle-image-box ml-4">
                                                        <img src="{{asset('img/chick-1.jpg')}}" alt="cycle photo" class="cycle-image">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" data-toggle="modal" data-target="#payout-details" role="button" class="payout__info">18th</a>
                                                    </td>
                                                    <td>400 </td>
                                                    <td>
                                                        <a href="#" data-toggle="modal" data-target="#payout-details" role="button" class="payout__status">
                                                            Pending
                                                        </a> 
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td>
                                                        <div class="cycle-image-box ml-4">
                                                        <img src="{{asset('img/chick-1.jpg')}}" alt="cycle photo" class="cycle-image">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" data-toggle="modal" data-target="#payout-details" role="button" class="payout__info">17th</a>
                                                    </td>
                                                    <td>400 </td>
                                                    <td>
                                                        <a href="#" data-toggle="modal" data-target="#payout-details" role="button" class="payout__status">
                                                            Pending
                                                        </a> 
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">5</th>
                                                    <td>
                                                        <div class="cycle-image-box ml-4">
                                                        <img src="{{asset('img/chick-1.jpg')}}" alt="cycle photo" class="cycle-image">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" data-toggle="modal" data-target="#payout-details" role="button" class="payout__info">16th</a>
                                                    </td>
                                                    <td>400 </td>
                                                    <td>
                                                        <a href="#" data-toggle="modal" data-target="#payout-details" role="button" class="payout__status">
                                                            Pending
                                                        </a> 
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">6</th>
                                                    <td>
                                                        <div class="cycle-image-box ml-4">
                                                        <img src="{{asset('img/chick-1.jpg')}}" alt="cycle photo" class="cycle-image">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" data-toggle="modal" data-target="#payout-details" role="button" class="payout__info">15th</a>
                                                    </td>
                                                    <td>400 </td>
                                                    <td>
                                                        <a href="#" data-toggle="modal" data-target="#payout-details" role="button" class="payout__status">
                                                            Pending
                                                        </a> 
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">7</th>
                                                    <td>
                                                        <div class="cycle-image-box ml-4">
                                                        <img src="{{asset('img/chick-1.jpg')}}" alt="cycle photo" class="cycle-image">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" data-toggle="modal" data-target="#payout-details" role="button" class="payout__info">14th</a>
                                                    </td>
                                                    <td>400 </td>
                                                    <td>
                                                        <a href="#" data-toggle="modal" data-target="#payout-details" role="button" class="payout__status">
                                                            Pending
                                                        </a> 
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>


                        {{-- farm cycle Payout details --}}

                        {{-- <div class="row">
                            <div class="col-md-6 col-12 text-center">
                                <div class="payout__image-box">
                                    <img src="" alt="photo of farm cycle" class="payout__image">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="row">
                                    <div class="col">
                                        <h1 class="payout__heading mb-5">
                                            Payout Information
                                        </h1>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-12">
                                        <div class="payout__info payout__btnrmation">
                                            <h2 class="payout__cycle-title mb-4">20th Farm cycle</h2>
                                            <p class="payout__sponsored mb-4">
                                                Amount sponsored: <span class="payout__sponsored--span">1000000</span>
                                            </p>
                                            <p class="payout__date mb-4">
                                                Payout date: <span class="payout__date--span">29th August 2019</span>
                                            </p>
                                            <p class="payout__interest mb-4">Payout interest: <span class="payout__date--span">15%</span></p>
                                            <form action="" class="payout__form">
                                                @csrf
                                                <div class="form-group">
                                                    <input type="number" name="payoutAmount" id="payout__amount" class="payout__amount form-control" disabled>
                                                <label for="payout__amount" class="payout__amount--label">Specify withdrawal amount</label>
                                                </div>
                                                <div class="row mb-4">
                                                    <div class="col-12 col-md-4">
                                                        <div class="form-group d-flex">
                                                            <button type="submit" class="btn payout__btn form-control btn-lg btn-success" disabled>Submit</button>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 offset-md-4 col-md-4">
                                                        <div class="form-group d-flex">
                                                            <a href="{{asset('dashboard')}}" class="payout__btn btn form-control btn-lg btn-info ml-auto">back</a>
                                                        </div>
                                                    </div>
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
                        </div> --}}

                        <div class="payout__popup">
                            <div class="modal fade" id="payout-details" tabindex="-1" role="dialog" aria-labelledby="payout-detailsTitle" aria-hidden="true">
                                <div class="modal-dialog payout__modal-box modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header modalPadding-x">
                                        <h5 class="modal-title heading__secondary text-center" id="exampleModalLongTitle">farm cycle payout</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">X</span>
                                        </button>
                                        </div>
                                        <div class="modal-body modalPadding-x">
                                            <div class="payout__details">
                                                <div class="row">
                                                    <div class="col-md-6 col-12 text-center">
                                                        <div class="payout__image-box">
                                                            <img src="" alt="photo of farm cycle" class="payout__image">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h1 class="payout__heading mb-5">
                                                                    Payout Information
                                                                </h1>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 col-12">
                                                                <div class="payout__info payout__btnrmation">
                                                                    <h2 class="payout__cycle-title mb-4">20th Farm cycle</h2>
                                                                    <p class="payout__sponsored mb-4">
                                                                        Amount sponsored: <span class="payout__sponsored--span">1000000</span>
                                                                    </p>
                                                                    <p class="payout__date mb-4">
                                                                        Payout date: <span class="payout__date--span">29th August 2019</span>
                                                                    </p>
                                                                    <p class="payout__interest mb-4">Payout interest: <span class="payout__date--span">15%</span></p>
                                                                    <form action="" class="payout__form">
                                                                        @csrf
                                                                        <div class="form-group">
                                                                            <input type="number" name="payoutAmount" id="payout__amount" class="payout__amount form-control" disabled>
                                                                        <label for="payout__amount" class="payout__amount--label">Specify withdrawal amount</label>
                                                                        </div>
                                                                        <div class="row mb-4">
                                                                            <div class="col-12 col-md-4">
                                                                                <div class="form-group d-flex">
                                                                                    <button type="submit" class="btn payout__btn form-control btn-lg btn-success" disabled>Submit</button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12 offset-md-4 col-md-4">
                                                                                <div class="form-group d-flex">
                                                                                    <button type="button" class="btn payout__btn form-control btn-lg btn-secondary" data-dismiss="modal">Close</button>
                                                                                </div>
                                                                            </div>
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="payout__ruler mt-4">
                            <hr>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>
@endsection