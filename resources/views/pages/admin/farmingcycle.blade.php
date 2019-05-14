@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-md-12">
            <div class="farming-cycle__content my-4 py-5">
              
              <div class="farming-cycle__add text-center mb-4">
                <a href="#" class="farming-cycle__add--cta btn btn-lg btn-success mr-2" role="button">Add New farming cycle</a>
                <a href="#" class="farming-cycle__add--cta btn btn-lg btn-info mr-2" role="button">Edit farming cycle</a>
              </div>

              <div class="farming-cycle__details">
                <table class="table">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Farming Cycle</th>
                      <th scope="col">Number Of Units</th>
                      <th scope="col">Start Date</th>
                      <th scope="col">Due Date</th>
                      <th scope="col">Sold Out</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>
                        <a href="{{url('/admin/sponsors-list')}}" class="farming-cycle__info">20th</a>
                      </td>
                      <td>400 </td>
                      <td>4 May 2019 </td>
                      <td>28 May 2019 </td>
                      <td>
                        <a href="#" class="btn btn-lg btn-secondary farming-cycle__info">Sold Out</a>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>
                        <a href="#" class="farming-cycle__info">19th</a>
                      </td>
                      <td>400 </td>
                      <td>4 May 2019 </td>
                      <td>28 May 2019 </td>
                      <td>
                        <a href="#" class="btn btn-lg btn-secondary farming-cycle__info">Sold Out</a>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>
                        <a href="#" class="farming-cycle__info">18th</a>
                      </td>
                      <td>400 </td>
                      <td>4 May 2019 </td>
                      <td>28 May 2019 </td>
                      <td>
                        <a href="#" class="btn btn-lg btn-secondary farming-cycle__info">Sold Out</a>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">4</th>
                      <td>
                        <a href="#" class="farming-cycle__info">17th</a>
                      </td>
                      <td>400 </td>
                      <td>4 May 2019 </td>
                      <td>28 May 2019 </td>
                      <td>
                        <a href="#" class="btn btn-lg btn-secondary farming-cycle__info">Sold Out</a>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">5</th>
                      <td>
                        <a href="#" class="farming-cycle__info">16th</a>
                      </td>
                      <td>400 </td>
                      <td>4 May 2019 </td>
                      <td>28 May 2019 </td>
                      <td>
                        <a href="#" class="btn btn-lg btn-secondary farming-cycle__info">Sold Out</a>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">5</th>
                      <td>
                        <a href="#" class="farming-cycle__info">15th</a>
                      </td>
                      <td>400 </td>
                      <td>4 May 2019 </td>
                      <td>28 May 2019 </td>
                      <td>
                        <a href="#" class="btn btn-lg btn-secondary farming-cycle__info">Sold Out</a>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">6</th>
                      <td>
                        <a href="#" class="farming-cycle__info">14th</a>
                      </td>
                      <td>400 </td>
                      <td>4 May 2019 </td>
                      <td>28 May 2019 </td>
                      <td>
                        <a href="#" class="btn btn-lg btn-secondary farming-cycle__info">Sold Out</a>
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