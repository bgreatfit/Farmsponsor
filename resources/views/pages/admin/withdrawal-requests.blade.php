@extends('layouts.admin')

@section('content')
    <div class="withdrawal-request__content py-5 my-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="withdrawal-request__heading-box">
                        <h1 class="withdrawal-request__heading mb-5 text-center">Withdrawals</h1>
                    </div>
                    <div class="withdrawal-request__table">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Username</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Withdrawal Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>
                                        <p class="widthdrawal-info">Macjohanson</p>
                                    </td>
                
                                    <td>
                                        <p class="widthdrawal-info">Laggamann</p>
                                    </td>
                                    <td>
                                        <p class="widthdrawal-info">mjlaggaboss4ever</p>
                                    </td>
                                    <td>
                                        <p class="widthdrawal-info">700000</p>
                                    <td>
                                        <button type="button" class="btn form-control btn-lg btn-secondary widthdrawal-status__btn">Pending</button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>
                                        <p class="widthdrawal-info">Macjohanson</p>
                                    </td>
                                    <td>
                                        <p class="widthdrawal-info">Laggamann</p>
                                    </td>
                                    <td>
                                        <p class="widthdrawal-info">mjlaggaboss4ever</p>
                                    </td>
                                    <td>
                                        <p class="widthdrawal-info">700000</p>
                                    </td>
                                    <td>
                                        <button type="button" class="btn form-control btn-lg btn-secondary widthdrawal-status__btn">Pending</button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>
                                        <p class="widthdrawal-info">Macjohanson</p>
                                    </td>
                                    <td>
                                        <p class="widthdrawal-info">Laggamann</p>
                                    </td>
                                    <td>
                                        <p class="widthdrawal-info">mjlaggaboss4ever</p>
                                    </td>
                                    <td>
                                        <p class="widthdrawal-info">700000</p>
                                    </td>
                                    <td>
                                        <button type="button" class="btn form-control btn-lg btn-secondary widthdrawal-status__btn">Pending</button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>
                                        <p class="widthdrawal-info">Macjohanson</p>
                                    </td>
                                    <td>
                                        <p class="widthdrawal-info">Laggamann</p>
                                    </td>
                                    <td>
                                        <p class="widthdrawal-info">mjlaggaboss4ever</p>
                                    </td>
                                    <td>
                                        <p class="widthdrawal-info">700000</p>
                                    </td>
                                    <td>
                                        <button type="button" class="btn form-control btn-lg btn-success widthdrawal-status__btn">Paid</button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>
                                        <p class="widthdrawal-info">Macjohanson</p>
                                    </td>
                                    <td>
                                        <p class="widthdrawal-info">Laggamann</p>
                                    </td>
                                    <td>
                                        <p class="widthdrawal-info">mjlaggaboss4ever</p>
                                    </td>
                                    <td>
                                        <p class="widthdrawal-info">700000</p>
                                    </td>
                                    <td>
                                        <button type="button" class="btn form-control btn-lg btn-success widthdrawal-status__btn">Paid</button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>
                                        <p class="widthdrawal-info">Macjohanson</p>
                                    </td>
                                    <td>
                                        <p class="widthdrawal-info">Laggamann</p>
                                    </td>
                                    <td>
                                        <p class="widthdrawal-info">mjlaggaboss4ever</p>
                                    </td>
                                    <td>
                                        <p class="widthdrawal-info">700000</p>
                                    </td>
                                    <td>
                                        <button type="button" class="btn form-control btn-lg btn-success widthdrawal-status__btn">Paid</button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>
                                        <p class="widthdrawal-info">Macjohanson</p>
                                    </td>
                                    <td>
                                        <p class="widthdrawal-info">Laggamann</p>
                                    </td>
                                    <td>
                                        <p class="widthdrawal-info">mjlaggaboss4ever</p>
                                    </td>
                                    <td>
                                        <p class="widthdrawal-info">700000</p>
                                    </td>
                                    <td>
                                        <button type="button" class="btn form-control btn-lg btn-secondary widthdrawal-status__btn">Pending</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection