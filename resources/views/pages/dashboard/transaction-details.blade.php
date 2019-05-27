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
                  <th scope="col">#</th>
                  <th scope="col">Transaction ID</th>
                  <th scope="col">Transaction type</th>
                  <th scope="col">Date</th>
                  <th scope="col">Amount(NGN)</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td><p class="transaction__table--id">11231</p></td>
                  <td>
                    <a href="#" data-toggle="modal" data-target="#transaction-info" role="button" class="transaction-details__item">
                      Sponsored Farm
                    </a>
                  </td>
                  <td> 17/05/2019 11:39</td>
                  <td>N400000</td>
                  <td>
                    <a href="#" data-toggle="modal" data-target="#transaction-info" role="button" class="btn btn-primary form-control transaction-details__item">
                      View
                    </a>
                  </td>
                </tr>
      
                <tr>
                  <th scope="row">2</th>
                  <td><p class="transaction__table--id">11231</p></td>

                  <td>
                    <a href="#" data-toggle="modal" data-target="#transaction-info" role="button" class="transaction-details__item">
                      Deposit
                  </a>
                  </td>
                  <td> 19/05/2019 13:39</td>
                  <td>N100000</td>
                  <td>
                    <a href="#" data-toggle="modal" data-target="#transaction-info" role="button" class="btn btn-primary form-control transaction-details__item">
                      View
                    </a>
                  </td>
                </tr>
      
                <tr>
                  <th scope="row">3</th>
                  <td><p class="transaction__table--id">11231</p></td>

                  <td>
                    <a href="#" data-toggle="modal" data-target="#transaction-info" role="button" class="transaction-details__item">
                      Deposit
                  </a>
                  </td>
                  <td> 23/05/2019 15:08</td>
                  <td>N300000</td>
                  <td>
                    <a href="#" data-toggle="modal" data-target="#transaction-info" role="button" class="btn btn-primary form-control transaction-details__item">
                      View
                    </a>
                  </td>
                </tr>
                
                <tr>
                  <th scope="row">4</th>
                  <td><p class="transaction__table--id">11231</p></td>

                  <td>
                    <a href="#" data-toggle="modal" data-target="#transaction-info" role="button" class="transaction-details__item">
                      Withdraw
                    </a>
                  </td>
                  <td> 30/05/2019 18:49</td>
                  <td>N310000</td>
                  <td>
                    <a href="#" data-toggle="modal" data-target="#transaction-info" role="button" class="btn btn-primary form-control transaction-details__item">
                      View
                    </a>
                  </td>
                </tr>
      
                <tr>
                  <th scope="row">5</th>
                  <td><p class="transaction__table--id">11231</p></td>

                  <td>
                    <a href="#" data-toggle="modal" data-target="#transaction-info" role="button" class="transaction-details__item">
                      Payout
                  </a>
                  </td>
                  <td> 13/07/2019 12:21</td>
                  <td>N230000</td>
                  <td>
                    <a href="#" data-toggle="modal" data-target="#transaction-info" role="button" class="btn btn-primary form-control transaction-details__item">
                      View
                    </a>
                  </td>
                </tr>
              </tbody>
            </table> 
          </div>
        </div>
      </div>
      <div class="row">
      <div class="col-5 offset-7 col-md-2 text-right offset-md-10"><a href="{{url('/dashboard/transactions')}}" class="transaction-details__btn btn-secondary btn form-control my-5">Back</a></div>
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

