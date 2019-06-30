@extends('layouts.dashboard')

@section('content')
<section class="farmlist py-5 my-5">
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
    </div>
    {{$farms->links()}}
</section>
@endsection
