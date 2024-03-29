@extends('layouts.admin')

@section('content')
    <div class="deposit-request__content py-5 my-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="deposit-request__heading-box">
                        <h1 class="deposit-request__heading mb-5 text-center">Vestbank Users List</h1>
                    </div>

                    <div class="deposit-request__table">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Transaction id</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Capital</th>
                                    <th scope="col">Interest</th>
                                    <th scope="col">Balance</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Interest</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach($unapproved_deposits as $deposit) --}}
                                    <tr>
                                        <th scope="row"> </th>
                                        <td>
                                            <p class="depositor-info"> </p>
                                        </td>
                                        <td>
                                            <p class="depositor-info"> </p>
                                        </td>
                                        <td>
                                            <p class="depositor-info"> </p>
                                        </td>
                                        <td>
                                            <p class="depositor-info"> </p>
                                        </td>
                                        <td>
                                            <p class="depositor-info"> </p>
                                        </td>
                                        <td>
                                            <p class="depositor-info"> </p>
                                        </td>
                                        <td>
                                            <p class="depositor-info"> </p>
                                        </td>
                                        <td>
                                            <p class="depositor-info"> </p>
                                        </td>
                                        <td>
                                            <p class="depositor-info"> </p>
                                        </td>
                                    </tr>
                                {{-- @endforeach --}}
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
