@extends('layouts.dashboard')

@section('content')
<div class="farmlist-content-wrap my-5 pt-5 pr-3 container-fluid">
  {{-- <div class="row">
    <div class="btn-group" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-secondary">Left</button>
        <button type="button" class="btn btn-secondary">Middle</button>
        <button type="button" class="btn btn-secondary">Right</button>
    </div>
  </div> --}}
  <div class="row">
    <div class="col-md-4 col-12 col-sm-8 mx-sm-auto mx-auto">
        @include('includes.farmsCard')
    </div>

    <div class="col-md-4 col-12 col-sm-8 mx-sm-auto mx-auto">
        @include('includes.farmsCard')
    </div>

    <div class="col-md-4 col-12 col-sm-8 mx-sm-auto mx-auto">
        @include('includes.farmsCard')
    </div>
  </div>

  <div class="row mt-3">
        <div class="col-md-4 col-12 col-sm-8 mx-sm-auto mx-auto">
            @include('includes.farmsCard')
        </div>
    
        <div class="col-md-4 col-12 col-sm-8 mx-sm-auto mx-auto">
            @include('includes.farmsCard')
        </div>
    
        <div class="col-md-4 col-12 col-sm-8 mx-sm-auto mx-auto">
            @include('includes.farmsCard')
        </div>
  </div>

  <div class="row mt-3">
        <div class="col-md-4 col-12 col-sm-8 mx-sm-auto mx-auto">
            @include('includes.farmsCard')
        </div>
    
        <div class="col-md-4 col-12 col-sm-8 mx-sm-auto mx-auto">
            @include('includes.farmsCard')
        </div>
    
        <div class="col-md-4 col-12 col-sm-8 mx-sm-auto mx-auto">
            @include('includes.farmsCard')
        </div>
  </div>
</div>
@endsection