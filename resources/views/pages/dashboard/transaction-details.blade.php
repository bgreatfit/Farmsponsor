@extends('layouts.dashboard')

@section('content')
<div class="transaction-details__content my-5 py-5">
  <div class="container-fluid">
      <div class="row">
        <div class="col-12 col-md-12">
          <h1 class="transaction-details__heading mb-5">Transaction Details</h1>
          <div class="transaction-details__table">
            <table class="table table-striped table-hover table-bordered">
              <thead>
                <tr>
                  <th scope="col">Transaction ID</th>
                  <th scope="col">Transaction type</th>
                  <th scope="col">Date</th>
                  <th scope="col">Amount(NGN)</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                  @foreach($transactionslog as $transaction)
                    <tr>
                        <td><p class="transaction__table--id">{{$transaction->transaction_id}}</p></td>
                        <td>
                        <a href="#" data-toggle="modal" data-target="#transaction-info" role="button" class="transaction-details__item">
                            {{$transaction->transactiontype}}
                        </a>
                        </td>
                        <td> {{$transaction->created_at->diffForHumans()}}</td>
                        <td>{{$transaction->amount}}</td>
                        <td>
                        <a href="#" data-toggle="modal" data-target="#transaction-info" role="button" class="btn btn-primary form-control transaction-details__item">
                            View
                        </a>
                        </td>
                    </tr>
                  @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-5 offset-7 col-md-2 text-right offset-md-10">
          <a href="{{url('/dashboard/transactions')}}" class="transaction-details__btn btn-secondary btn form-control my-5">Back</a>
        </div>
      </div>

      <div class="row">
        <div class="transaction-info__content">
            <div class="modal fade" id="transaction-info" tabindex="-1" role="dialog" aria-labelledby="transactionInfoTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title heading__secondary text-center" id="exampleModalLongTitle">Transaction Information</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">X</span>
                        </button>
                        </div>
                        <div class="modal-body">
                          <h2 class="transaction-info__heading">Transaction Information</h2>
                          <p class="transaction-info__text">Transaction Id: <span class="transaction-info__text--content">127761</span></p>
                          <p class="transaction-info__text">Trasaction Type: <span class="transaction-info__text--content">Sponsored farm</span></p>
                          <p class="transaction-info__text">Description: <span class="transaction-info__text--content">20th cycle sponsorship</span></p>
                          <p class="transaction-info__text">Amount: <span class="transaction-info__text--content">N700000</span></p>
                          <p class="transaction-info__text">Date: <span class="transaction-info__text--content">23/5/2019</span></p>

                            <div class="row">
                                <div class="col-12 offset-md-6 text-right col-md-6">
                                  <button type="button" class="btn btn-secondary vestbank-deposit__btn btn-lg" data-dismiss="modal">Back</button>
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



@endsection

