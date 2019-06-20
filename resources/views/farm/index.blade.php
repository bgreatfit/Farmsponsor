@extends('layouts.basic')

@section('content')
<section class="farmlist my-5 py-5">
    <div class="container">
        <div class="row">
            @foreach($farms as $farm)
                <div class="col-md-3 col-12 col-sm-8 mx-sm-auto mx-auto">
                    <div class="content-wrap card-box">
                       @include('includes.farmsCard')
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-12 col-md-12">
                @include('includes.pagination')
            </div>
        </div>
    </div>
</section>
@endsection
