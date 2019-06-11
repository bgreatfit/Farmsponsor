@extends('layouts.admin')

@section('content')
    <div class="deposit-request__content py-5 my-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="deposit-request__heading-box">
                        <h1 class="deposit-request__heading mb-5 text-center">Deposits</h1>
                    </div>
                    .deposit-request
                    <div class="deposit-request__table">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Address</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Deposit Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($deposits as $key => $deposit)
                                <tr>
                                    <th scope="row">{{ $key + 1 }}</th>
                                    <td>
                                        <p class="depositor-info">{{$deposit->firstname}}</p>
                                    </td>

                                    <td>
                                        <p class="depositor-info">{{$deposit->lastname}}</p>
                                    </td>
                                    <td>
                                        <p class="depositor-info">{{$deposit->email}}</p>
                                    </td>
                                    <td>
                                        <p class="depositor-info">{{$deposit->address}}</p>
                                    </td>
                                    <td>
                                        <p class="depositor-info">{{$deposit->amount}}</p>
                                    <td>
                                        <a href="{{route('admin.confirmdeposit', $deposit->id)}}" class="btn form-control btn-lg btn-secondary depositor-status__btn">Confirm</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{
                            $deposits->links()
                        }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
