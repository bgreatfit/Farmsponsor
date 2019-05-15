@extends('layouts.admin')

@section('content')
<div class="sponsors-list-wrap my-5 py-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="sponsors-list__content ">
                    <h1 class="sponsors-list__heading text-center mb-5">20th Farming Cycle</h1> 
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-12">
                <div class="sponsors-list__content ">
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Confirm</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Amount Sponsored</th>
                            <th scope="col">Units</th>
                            <th scope="col">Returns (NGN)</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Email</th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>
                                    <a href="#" class="sponsor-confirm btn btn-md btn-warning">Comfirm</a>
                                </td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>200000</td>
                                <td>2</td>
                                <td>30,000</td>
                                <td>081755478627</td>
                                <td>Lukasmakedemsquirt@jrake.co.uk</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>
                                    <a href="#" class="sponsor-confirm btn btn-md btn-warning">Comfirm</a>
                                </td>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>200000</td>
                                <td>2</td>
                                <td>30,000</td>
                                <td>081755478627</td>
                                <td>Lukasmakedemsquirt@jrake.co.uk</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>
                                    <a href="#" class="sponsor-confirm btn btn-md btn-warning">Comfirm</a>
                                </td>
                                <td>Zennanam</td>
                                <td>Okoroafor</td>
                                <td>1000000</td>
                                <td>10</td>
                                <td>150,000</td>
                                <td>081755478627</td>
                                <td>Lukasmakedemsquirt@jrake.co.uk</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>
                                    <a href="#" class="sponsor-confirm btn btn-md btn-warning">Comfirm</a>
                                </td>
                                <td>Larry</td>
                                <td>smith</td>
                                <td>200000</td>
                                <td>2</td>
                                <td>30,000</td>
                                <td>081755478627</td>
                                <td>Lukasmakedemsquirt@jrake.co.uk</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>
                                    <a href="#" class="sponsor-confirm btn btn-md btn-warning">Comfirm</a>
                                </td>
                                <td>Mathew</td>
                                <td>Hardlook</td>
                                <td>300000</td>
                                <td>3</td>
                                <td>45,000</td>
                                <td>081755478627</td>
                                <td>Lukasmakedemsquirt@jrake.co.uk</td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>
                                    <a href="#" class="sponsor-confirm btn btn-md btn-warning">Comfirm</a>
                                </td>
                                <td>Sandra</td>
                                <td>Fiddleman</td>
                                <td>100,000</td>
                                <td>1</td>
                                <td>15,000</td>
                                <td>081755478627</td>
                                <td>Lukasmakedemsquirt@jrake.co.uk</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection